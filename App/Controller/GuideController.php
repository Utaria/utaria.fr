<?php
namespace app\Controller;

use App;
use Core\Controller\Controller;

class GuideController extends Controller {

	protected $table_class = "GuideArticle";


	public function index() {
		$categories = App::getInstance()->getTable("GuideCategorie")->all();

		foreach ($categories as $category)
			$category->slug = $this->slugify($category->name);

		$this->render("guide", compact("categories", "colors"));
	}

	public function category($params) {
		$id = $params["id"];

		$category = App::getInstance()->getTable("GuideCategorie")->find($id);
		if ($category == null)
			App::getInstance()->notFound();

		$articles = App::getInstance()->getTable("GuideArticle")->allInCategory($id);

		foreach ($articles as $article)
			$article->slug = $this->slugify($article->name);

		$this->render("guide.category", compact("category", "articles"));
	}

	public function article($params) {
		$id = $params["id"];

		$article = $this->getTable()->find($id);
		if ($article == null)
			App::getInstance()->notFound();

		$this->render("guide.article", compact("article"));
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