<div class="top-box">
	<div class="wrap-inner">
		<h1>Blog de développement</h1>
		<h3 class="subtitle">Retrouvez les nouveautés d'UTARIA</h3>
	</div>
</div>
<div class="content blog-content">
	<div class="wrap-inner">
		<?php if (empty($articles)): ?>
			<p class="nothinghere"><i class="fa fa-times-circle" style="font-size:2em;color:#c0392b"></i><br>Aucun article dans le blog !</p>
		<?php endif; ?>
		<?php function printArticle($article, $Html) { ?>
			<div class="article">
				<div class="date"><?= $article->date ?></div>
				<a href="<?= $Html->href("blog/" . $article->id . "-" . $article->slug) ?>" title="<?= $article->title; ?>">
					<div class="title"><?= $article->title; ?></div>
				</a>
				<div class="server"><?= $article->categorie ?></div>
			</div>
		<?php } ?>

		<div class="row-3">
			<?php foreach ($articles as $i => $art):
			      if ($i % 3 != 0) continue;
			      printArticle($art, $Html);
			      endforeach; ?>
		</div>
		<div class="row-3">
			<?php foreach ($articles as $i => $art): 
			      if ($i % 3 != 1) continue;
			      printArticle($art, $Html);
			      endforeach; ?>
		</div>
		<div class="row-3">
			<?php foreach ($articles as $i => $art): 
			      if ($i % 3 != 2) continue;
			      printArticle($art, $Html);
			      endforeach; ?>
		</div>

		<div class="clear"></div>
	</div>
</div>