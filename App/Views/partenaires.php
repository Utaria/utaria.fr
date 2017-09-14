<div class="top-box">
	<div class="wrap-inner" style="text-align:center">
		<h1>Partenaires</h1>
		<h3 class="subtitle">Notre liste des bonnes références !</h3>
	</div>
</div>

<?php if (count($partenaires["service"]) > 0): ?>
<div class="partenary-section services">
	<div class="title">
		<div class="wrap-inner"><h3><i class="fa fa-free-code-camp"></i> Services partenaires</h3></div>
	</div>

	<div class="wrap-inner col-group">
		<p>Minestream</p>
	</div>
</div>
<?php endif; ?>

<?php if (count($partenaires["youtube"]) > 0): ?>
<div class="partenary-section youtubers">
	<div class="title">
		<div class="wrap-inner"><h3><i class="fa fa-youtube"></i> Vidéastes Youtube</h3></div>
	</div>

	<div class="wrap-inner col-group">
		<?php foreach ($partenaires["youtube"] as $ytPart): ?>
			<div class="youtuber">
				<a href="<?= $ytPart->link ?>" target="_blank">
					<section>
						<article class="fold">
							<img src="<?= $ytPart->image ?>">
							<div class="info">
								<h4><?= $ytPart->name ?></h4>
							</div>
						</article>
					</section>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>

<?php if (count($partenaires["twitch"]) > 0): ?>
<div class="partenary-section streamers">
	<div class="title">
		<div class="wrap-inner">
			<h3><i class="fa fa-twitch"></i> Streameurs Twitch</h3>
		</div>
	</div>

	<div class="wrap-inner col-group">
		<?php foreach ($partenaires["twitch"] as $twPart): ?>
			<div class="streamer" data-name="<?= $twPart->name ?>">
				<a href="<?= $twPart->link ?>" target="_blank">
					<section>
						<article class="fold">
							<img src="<?= $twPart->image ?>">
							<div class="info">
								<h4>
									<?= $twPart->name ?>
									<span class="state"></span>
								</h4>
							</div>
						</article>
					</section>
				</a>
			</div>
		<?php endforeach ?>
	</div>
</div>
<?php endif; ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<?= $Html->js("partenaires") ?>