<?php
function getCommentById($comments, $id) {
	foreach ($comments as $v)
		if ($v->id == $id)
			return $v;
	return null;
}

$publishDate = "Publié le ". strftime("%d %B %Y", strtotime($article->date));
if ($article->draft) $publishDate = "Brouillon rédigé";

?>
<div class="top-box">
	<div class="wrap-inner">
		<h1<?php if(strlen($article->title) > 50): ?> style="font-size:2.2em"<?php endif; ?>><?= $article->title ?></h1>
		<h3 class="subtitle"><?= $publishDate ?> par 
		<span class="player-info"><img src="https://minotar.net/avatar/<?= $article->author ?>/32" alt="Avatar de <?= $article->author ?>"> <?= $article->author ?></span></h3>
	</div>
</div>
<div class="blog-content content">
	<div class="wrap-inner">
		<article id="lightgallery">
			<?php
			$regex = '#<img([^>]*) src="([^"/]*/?[^".]*\.[^"]*)"([^>]*)>((?!</a>))#';
			$replace = '<div class="article-image"><a href="$2" rel="nofollow"><img$1 src="$2"$3></a></div>';
			$content = preg_replace($regex, $replace, $article->content);

			echo $content;
			?>
		</article>
	</div>
</div>

<aside>
	<div class="metabar">
		<div class="wrap-inner">
			<div class="left">
				<p>
					Article rédigé par <img src="https://minotar.net/avatar/<?= $article->author ?>/24" alt="Avatar de <?= $article->author ?>"> <b><?= $article->author ?></b>
					<br /><br />
					<div class="views-counter"><?= $article->views ?> vue<?= ($article->views > 1) ? "s" : "" ?></div>
				</p>
			</div>
			<div class="right">
				<div>
			    	<p style="margin-bottom:5px"><i>Vous avez aimé cet article ? Alors partagez-le avec vos amis en cliquant sur les boutons ci-dessous :</i></p>
			    <div>
			        <a title="Twitter" href="https://twitter.com/intent/tweet?url=<?= $Html->getCurrentURL() ?>&via=Utaria_FR&text=<?= 'Titre de la page' ?>" rel="nofollow"><img src="https://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" /></a>
			        <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?= $Html->getCurrentURL() ?>&t=<?= 'Titre de la page' ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="https://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" /></a>
			        <a target="_blank" title="Google +" href="https://plus.google.com/share?url=<?= $Html->getCurrentURL() ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=400');return false;"><img src="https://korben.info/wp-content/themes/korben2013/hab/gplus_icon.png" alt="Google Plus" /></a>
			        <a target="_blank" title="Envoyer par mail" href="mailto:?subject=<?= 'Titre de la page' ?>&body=<?= $Html->getCurrentURL() ?>" rel="nofollow"><img src="https://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" /></a>
			    </div>
			</div>
			</div>
			<div class="clear"></div>
		</div>		
	</div>

	<div class="comments wrap-inner" id="comments">
		<h3><?= count($comments) ?> commentaire<?= (count($comments) > 1) ? "s" : "" ?></h3>
		<hr />

		<?php function printComment($list, $comment) { ?>
			<div class="comment">
				<div class="author-head">
					<img src="https://minotar.net/avatar/<?= $comment->playername ?>/70" alt="Avatar de <?= $comment->playername ?>">
				</div>	
				<div class="content">
					<div class="meta">
						<span class="playername"><?= $comment->playername; ?></span>
						&mdash;
						Posté il y a <?= formatDate($comment->date) ?>

						<span class="send_response" id="response_trigger" data-commentid="<?= $comment->id ?>">
							(Cliquez pour répondre)
						</span>

						<?php if($comment->comment_parent_id != null): ?>
							<span class="response_to">
								En réponse à 
								<b><?= getCommentById($list, $comment->comment_parent_id)->playername ?></b>
							</span>
						<?php endif; ?>
					</div>

					<p>
						<?= nl2br(stripslashes($comment->content)) ?>
					</p>
				</div>
				
				<div class="clear"></div>

				<div class="subcomments">
					<?php 
					$list = array_reverse($list);
					foreach ($list as $v)
						if ($v->comment_parent_id == $comment->id)
							printComment($list, $v);
					?>
				</div>
			</div>
			
			<div class="clear"></div>
		<?php } ?>

		<?php
			foreach ($comments as $v)
				if ($v->comment_parent_id == null)
					printComment($comments, $v);
		?>

		<form method="POST" id="postcomment" action="/devblog/postcomment">
			<br />
			<h3>Postez <?php if (count($comments) > 0): ?>aussi un<?php else: ?>le premier<?php endif; ?> commentaire !</h3>
			<br />

			<div class="row-container">

				<div class="postform_parent_comment-container">
					<span class="introduce">Répondre à :</span>
					<div id="postform_parent_comment" class="comment"></div>
				</div>

				<input type="hidden" name="parentCommentId" value="-1" id="parent_comment_id_input">
				<input type="hidden" name="articleId" value="<?= $article->id ?>">


				<div class="left">
					<div class="input<?= (isset($_GET["err"]) ? " error" : "") ?>">
						<label for="playername">Pseudo sur le serveur</label>
						<input type="text" name="playername" id="playername" placeholder="Votre nom de joueur" required autocomplete="off">
					</div>
				</div>	
				<div class="right">
					<div class="input<?= (isset($_GET["err"]) ? " error" : "") ?>">
						<label for="password">Mot de passe de connexion</label>
						<input type="password" name="password" id="password" placeholder="Votre mot de passe" required autocomplete="off">
					</div>
				</div>

				<div class="clear"></div>
				<br />

				<div class="input">
					<label for="content">Commentaire</label>
					<textarea name="content" id="content" placeholder="Le contenu de votre commentaire" required autocomplete="off"></textarea>
				</div>

				<div class="input">
					<input type="submit" name="" id="postcomment_form" value="Envoyer">
				</div>
				<div class="clear"></div>
			</div>
		</form>
	</div>
</aside>

<script type="text/javascript" src="/js/devblog.js" defer></script>

<script type="text/javascript" src="/js/lightgallery.min.js"></script>
<script type="text/javascript" src="/js/lg-zoom.js"></script>
<script type="text/javascript">
	var imageLinks = document.querySelectorAll(".article-image");
	var opts       = {download: false};

    for (var imageLink of imageLinks)
    	lightGallery(imageLink, opts);
</script>