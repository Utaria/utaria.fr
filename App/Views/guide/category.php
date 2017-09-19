<div class="top-box">
	<div class="wrap-inner" style="text-align:center">
		<h1>Guide</h1>
		<h3 class="subtitle"><b><?= $category->name ?></b></h3>
	</div>
</div>

<section class="container-link">
	<div class="wrap-inner">
		<?php foreach ($articles as $article): ?>
			<a href="<?= $Html->href("guide/{$category->id}/{$article->id}-{$article->slug}") ?>">
				<div class="category sub">
					<h4><?= $article->name ?></h4>
				</div>
			</a>
		<?php endforeach; ?>
	</div>
</section>