<?php
namespace App\Controller;

use \Core\Controller\Controller;
use \App\Helper\API;
use \App;

class BlogController extends Controller {

	public function index() {
		$categorieTable = App::getInstance()->getTable("BlogCategorie");
		$articles       = $this->getTable()->allByDate();

		// On paramètre chaque article de la liste.
		foreach ($articles as $article) {
			$article->slug      = $this->slugify($article->title);
			$article->categorie = $categorieTable->getNameById($article->category_id);

			$article->author    = API::get("player.name", array("id" => $article->author_id))->playername;

			$article->there_is  = $this->thereIsDate(@strtotime($article->date));
		}

		$this->render('blog', compact('articles'));
	}

	public function view($params) {
		$id   = $params['id'];
		$slug = $params['slug'];

		// Récupération de l'article
		$article = $this->getTable()->findActive($id);
		if ($article == null) App::getInstance()->notFound();

		// On corrige le slug dans l'URL s'il n'est pas bon.
		$realSlug = $this->slugify($article->title);

		if ($slug != $realSlug)
			\App::getInstance()->redirect("blog/$id-$realSlug");

		// Récupération des commentaires dans leur propre table
		$comments = App::getInstance()->getTable("BlogComment")->findFor($article->id);

		foreach ($comments as $comment) {
			$comment->playername  = API::get("player.name", array("id" => $comment->player_id))->playername;
			$comment->thereIsDate = $this->thereIsDate(strtotime($comment->date));
			$comment->content = stripslashes($comment->content);
		}

		$article->author = API::get("player.name", array("id" => $article->author_id))->playername;

		// On parse le contenu pour afficher correctement les images
		$regex   = '#<img([^>]*) src="([^"/]*/?[^".]*\.[^"]*)"([^>]*)>((?!</a>))#';
		$replace = '<div class="article-image"><a href="$2" rel="nofollow"><img$1 src="$2"$3></a></div>';

		$article->content = preg_replace($regex, $replace, $article->content);

		// On gère la date de publication
		$article->publishDate = strftime("%d %B %Y", strtotime($article->date));
		if ($article->draft) $article->publishDate = "Brouillon";
		
		// On ajoute une vue à l'article qui vient d'être visionné
		// sans se soucier de l'IP ou autre, on fait simple.
		$this->getTable()->update(
			array("views" => ++$article->views), // Champs à modifier
			array("id"    => $article->id)       // Conditions
		);

		// On défini le titre de la page
		$this->setPageTitle($article->title . ' - Blog');

		// Puis on rend la vue, pour afficher la page ;-)
		$this->render('blog.view', compact('article', 'comments'));
	}

	public function postcomment($params) {
		if (empty($params)) App::getInstance()->notFound();
		$id = $params["id"];

		// Récupération de l'article
		$article = $this->getTable()->findActive($id);
		if ($article == null || empty($_POST)) App::getInstance()->notFound();

		$player = API::get("player.checkauth", array(
			"name"     => $_POST["playername"],
			"password" => sha1($_POST["password"])
		), true);

		if (!$player->auth || is_null($player->player_id)) {
			App::getInstance()->redirect("blog/{$article->id}-r#comments");
		}

		if ($_POST["parentCommentId"] == "-1")
			$_POST["parentCommentId"] = null;

		$comTable = App::getInstance()->getTable("BlogComment");

		$content = htmlentities($_POST["content"]);
		$content = addslashes($content);

		$comTable->insert(array(
			"content"           => $content,
			"article_id"        => $article->id,
			"player_id"         => $player->player_id,
			"parent_comment_id" => $_POST["parentCommentId"]
		));

		//var_dump($article); die();
		App::getInstance()->redirect("blog/{$article->id}-r#comments");
	}


	private function thereIsDate($date) {
		$diff    = time() - $date;
		$thereIs = $diff . " seconde" . (($diff > 1) ? "s" : "");

		if ($diff >= 86400) {
			$days    = floor($diff / 86400);
			$thereIs = $days . " jour" . (($days > 1) ? "s" : "");
		} else if ($diff >= 3600) {
			$hrs     = floor($diff / 3600);
			$thereIs = $hrs . " heure" . (($hrs > 1) ? "s" : "");
		} else if ($diff >= 60) {
			$mns     = floor($diff / 60);
			$thereIs = $mns . " minute" . (($mns > 1) ? "s" : "");
		}

		return "il y a $thereIs";
	}

	private function slugify($text) {
		$text = $this->replace_accents($text);
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		$text = trim($text, '-');-
		$text = preg_replace('~-+~', '-', $text);
		$text = strtolower($text);

		if (empty($text)) return 'n-a';

		return $text;
	}

	private function replace_accents($str) {
		$unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y');

		$str = strtr($str, $unwanted_array);
		return $str;
	}

}

?>