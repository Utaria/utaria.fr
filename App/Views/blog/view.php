<div class="top-box article-top-box" style="background-image:url(http://lorempicsum.com/futurama/1280/500/2)">
	<div class="col-group wrap-inner">
		<h1><?= $article->title ?></h1>
		<h3 class="subtitle">
			<?= $article->publishDate ?> — <span class="player-info"><img src="https://minotar.net/avatar/<?= $article->author ?>/32" alt="Avatar de <?= $article->author ?>"> <span class="author"><?= $article->author ?></span></span>
		</h3>
	</div>
</div>

<div class="article-container wrap-inner">
	<div class="col-group blog-article" id="lightgallery">
		<aside class="social-column col-2">
			<a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?= $Html->getCurrentURL() ?>&t=<?= $pageTitle ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><div class="social fb">
				<i class="fa fa-facebook"></i> facebook
			</div></a>

			<a title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?url=<?= $Html->getCurrentURL() ?>&via=Utaria_FR&text=<?= 'Titre de la page' ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=280,width=500');return false;"><div class="social tw">
				<i class="fa fa-twitter"></i> twitter
			</div></a>

			<a target="_blank" title="Google +" href="https://plus.google.com/share?url=<?= $Html->getCurrentURL() ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=400');return false;"><div class="social gp">
				<i class="fa fa-google-plus"></i> Google+
			</div></a>

			<a target="_blank" title="Envoyer par mail" href="mailto:?subject=<?= 'Titre de la page' ?>&body=<?= $Html->getCurrentURL() ?>" rel="nofollow"><div class="social ma">
				<i class="fa fa-envelope"></i> e-mail
			</div></a>

			<div class="social vi">
				<i class="fa fa-eye"></i> <?= $article->views ?> vue<?= (($article->views > 1) ? "s" : "") ?>
			</div>
		</aside>
		<article class="content col-8">
			<?= $article->content; ?>
		</article>
	</div>
	<div class="comments-container col-group" id="comments">
		<h3><?= (count($comments) > 0) ? count($comments) : "Aucun" ?> commentaire<?= (count($comments) > 1) ? "s" : "" ?><?php if (count($comments) == 0): ?> — Postez le premier !<?php endif; ?></h3>

		<form method="POST" id="postcomment" action="">
			<div class="col-12">
				<input type="hidden" name="parentCommentId" value="-1" id="parent_comment_id_input">
				<input type="hidden" name="articleId" value="<?= $article->id ?>">

				<div class="col-6">
					<div class="input<?= (isset($_GET["err"]) ? " error" : "") ?>">
						<label for="playername">Pseudonyme</label>
						<input type="text" name="playername" id="playername" placeholder="Votre pseudo de joueur" required autocomplete="off">
					</div>
				</div>	
				<div class="col-6">
					<div class="input<?= (isset($_GET["err"]) ? " error" : "") ?>">
						<label for="password">Mot de passe de connexion</label>
						<input type="password" name="password" id="password" placeholder="Votre mot de passe" required autocomplete="off">
					</div>
				</div>
				<div class="col-12">
					<textarea name="content" id="content" placeholder="Votre commentaire..." required autocomplete="off"></textarea>
				</div>

				<div class="col-offset-10 col-2">
					<input type="submit" name="" id="postcomment_form" value="Envoyer">
				</div>
				<div class="clear"></div>
			</div>
		</form>
		
		<?php function printComment($list, $comment, $offset) { ?>
			<?php if ($offset > 0): ?>
				<div class="reply-icon col-1 col-offset-<?= ($offset > 1) ? 1 : 0 ?>">
					<i class="fa fa-mail-reply"></i>
				</div>
			<?php endif; ?>

			<div class="comment col-<?= 12 - $offset ?>">
				<div class="author-head col-1">
					<img src="https://minotar.net/avatar/<?= $comment->playername ?>/70" alt="Avatar de <?= $comment->playername ?>">
				</div>	
				<div class="content col-11">
					<div class="meta">
						<span class="playername"><?= $comment->playername; ?></span>
						<span class="date"><?= $comment->thereIsDate ?></span>

						&mdash; <span class="reply" id="response_trigger" data-commentid="<?= $comment->id ?>">
							Répondre
						</span>
					</div>

					<p>
						<?= nl2br(stripslashes($comment->content)) ?>
					</p>
				</div>				
			</div>
			
			<?php 
				foreach ($list as $v)
					if ($v->parent_comment_id == $comment->id)
						printComment($list, $v, $offset + 1);
			?>
		<?php } ?>
		
		<div class="comments-list col-group">
		<?php
			foreach ($comments as $v)
				if (is_null($v->parent_comment_id))
					printComment($comments, $v, 0);
		?>
		</div>
	</div>
</div>

<script type="text/javascript" src="/js/devblog.js" defer></script>

<script type="text/javascript" src="/js/lightgallery.min.js"></script>
<script type="text/javascript" src="/js/lg-zoom.js"></script>
<script type="text/javascript">
	var imageLinks = document.querySelectorAll(".article-image");
	var opts       = {download: false};

    for (var imageLink of imageLinks)
    	lightGallery(imageLink, opts);
</script>