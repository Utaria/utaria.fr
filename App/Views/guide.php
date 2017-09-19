<div class="top-box">
	<div class="wrap-inner" style="text-align:center">
		<h1>Guide</h1>
		<h3 class="subtitle">Laissez nous vous aider !</h3>
	</div>
</div>

<section class="container-link">
	<div class="col-group wrap-inner">
		<?php foreach ($categories as $category): ?>
			<a class="col-3" href="<?= $Html->href("guide/{$category->id}-{$category->slug}") ?>">

				<div class="category">
					<div class="bg" style="background-image:url(<?= $Html->srcImg("guide/{$category->id}.jpg") ?>)"></div>
					<h4><?= $category->name ?></h4>
				</div>

			</a>
		<?php endforeach ?>
	</div>
</section>