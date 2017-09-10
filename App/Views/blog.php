<div class="top-box">
	<div class="wrap-inner" style="text-align:center">
		<h1>Blog</h1>
		<h3 class="subtitle">Tenez-vous au courant !</h3>
	</div>
</div>
<div class="content blog-content">
	<div class="col-group wrap-inner">
		<section class="articles col-9">
			<div class="col-group">
				<?php $i = 0; foreach ($articles as $article): ?>
					<div class="article col-<?= (($i == 0) ? '12' : '6') ?>">
						<div class="title">
							<h3><?= $article->title ?></h3>
							<span class="meta"><?= ucfirst($article->there_is) ?> par <span><img src="https://minotar.net/avatar/Utarwyn/18"> Utarwyn</span></span>
						</div>

						<span class="type-badge"><?= $article->categorie ?></span>
						<span class="comments-badge"><i class="fa fa-comments"></i> 5</span>

						<a href="<?= $Html->href("blog/{$article->id}-{$article->slug}") ?>">
							<div class="image-container">
								<div class="image" style="background-image:url(http://lorempicsum.com/futurama/494/235/1)"></div>
							</div>
						</a>
					</div>
				<?php $i++; endforeach ?>
			</div>
		</section>
		<section class="socials col-3">
			<div class="social twitter">
				<div class="title">
					<h3><i class="fa fa-twitter"></i> Twitter</h3>
				</div>
				<div class="content">
					<a class="twitter-timeline" data-lang="fr" data-theme="light" href="https://twitter.com/Utaria_FR">Tweets de Utaria_FR<br>Chargement...</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div class="social facebook">
				<div class="title">
					<h3><i class="fa fa-facebook-square"></i> Facebook</h3>
				</div>
				<div class="content">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Futaria.fr%2F&tabs=timeline&width=254&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="254" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div>
			</div>
		</section>
	</div>
</div>