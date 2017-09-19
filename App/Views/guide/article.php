<div class="top-box article-top-box">
	<div class="wrap-inner" style="text-align:center">
		<h1 style="font-size:2.5em">Guide</h1>
		<h3 style="font-size:1.2em;color:#eee" class="subtitle"><b><?= $article->name ?></b></h3>
	</div>
</div>

<div class="article-container wrap-inner">
	<div class="col-group blog-article">
		<aside class="col-1"></aside>
		<article class="content col-10 guide-content">
			<?= nl2br($article->content) ?>
		</article>
	</div>
</div>