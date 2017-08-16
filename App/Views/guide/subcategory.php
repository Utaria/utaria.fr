<section class="container-top">
			<h2>Category</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</section>
		<section class="container-link">
			<div class="wrap-inner">
				<?php for ($i = 0; $i < 7; $i++): ?>
					<a href="<?= $Html->href("guide/article") ?>"><div class="category sub">
						<h4>TITLE</h4>
					</div></a>
				<?php endfor; ?>
			</div>
		</section>