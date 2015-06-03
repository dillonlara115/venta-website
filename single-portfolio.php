<?php get_header(); ?>

<?php the_post(); ?>
<?php $headerimage = get_field('header_image'); ?>
	<div id="hp-header" class="hp-header hp-header-portfolio" style="background: url(<?php echo $headerimage['url']; ?>) no-repeat center center;background-size: cover;" >
		<div class="container">
			<div class="hp-headline portfolio-headline">
				<?php the_title(); ?>
			</div>
			<p class="portfolio-tagline"><?php the_field('tagline'); ?></p>
			<div style="clear: both"></div>
		</div>
	</div>
</div>


<div class="container">
		<div class="portfolio-container">
		<?php echo $post->post_content ?>
		<div class="portfolio-summary">
			<h2>Project Summary</h2>
			<?php echo the_field('project_summary'); ?>
		</div>

		<div class="portfolio-services">
			<h2>Services Provided</h2>
			<?php

			$field = get_field_object('services_provided'); 
			$colors = get_field('services_provided');

			foreach($colors as $key => $val) {
			    $label = $colors[$key];
			    echo '<div class="portfolio-single-service">'. $field['choices'][$label] . '</div>';
			}

			?>
		</div>

		<div class="portfolio-device-image">
			<?php 

			$image = get_field('device_image');

			if( !empty($image) ): ?>
				<a href="http://<?php the_field('project_url'); ?>" target="_blank">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

			<?php endif; ?>
		</div>
		
	<div class="portfolio-site cl-effect-18">
		<a href="http://<?php the_field('project_url'); ?>" target="_blank"><span data-hover="Visit Site">Visit Site</span></a>
	</div>
		
	</div>
	
</div>

<div style="clear:both;"></div>


<?php get_footer(); ?>