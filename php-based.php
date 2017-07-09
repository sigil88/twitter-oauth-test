<style type="text/css">
	.php-based {
		padding: 15px;
	}
	.link__wrapper {
		color: #363636;
	}

	.php-based .twitter-cards {
		flex-wrap: wrap;
	}
</style>
<div class="php-based container">
	<?php 
		require('twitter/initTwitter.php');
	?>
		<div class="columns">
			<div class="column is-12">
				<h1 class="title">PHP based cards</h1>
			</div>
		</div>
		<div class="columns twitter-cards">
		<?php 
			$tweetSelection = array_slice($statuses, 0, 6); // show no more than 6 tweets
			foreach($tweetSelection as $key => $tweet) : 
				$user = $tweet->user;
				$url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
				$string = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.%-=#]*(\?\S+)?)?)?)@', '<a href="$1">$1</a>', $tweet->text); 
				?>
				<div class="column is-4">
					<div class="box">
						<div class="media">
							<div class="media-left">
								<figure class="image is-48x48">
								  <img src="<?= $user->profile_image_url; ?>" alt="Image">
								</figure>                       

							</div>
							<div class="media-content">
								<a href="<?php echo $user->url; ?>" target="_blank" class="link__wrapper">
									<p class="title is-4">
										<?php echo $user->name; ?>
									</p>
									<p class="subtitle is-6"><?= $string; ?></p>
								</a>
							</div>
							
						</div>

					</div>
				</div>
			<?php 
				// var_dump($tweet);
			endforeach;
			?>
		
	</div>
	
</div>