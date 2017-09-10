<section class="container-top">
	<h2>Guide</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</section>
<section class="container-link">
<div class="col-group wrap-inner">
		<?php for ($i = 0; $i < 7; $i++): ?>
			<a href="<?= $Html->href("guide/subcategory") ?>"><div class="category">
				<h4>TITLE</h4>
			</div></a>
		<?php endfor; ?>
	</div>
</section>