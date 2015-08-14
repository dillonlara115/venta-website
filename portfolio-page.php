<?php
/*
Template Name: Portfolio Landing Page
*/
?>
<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div id="hp-header" class="hp-header hp-header-portfolio" style="background: url(<?php echo $feat_image ?>) no-repeat center center;background-size: cover;" >
		<div class="container">
			<div class="hp-headline portfolio-headline">
				<?php the_title(); ?>
			</div>
			<p class="portfolio-tagline"><?php the_field('page_tagline'); ?></p>
			<div style="clear: both"></div>
		</div>
	</div>
</div>
<div class="body-container">
	<?php 
		$posts = get_posts(array(
			'showposts' => 4,
			'post_type'			=> 'portfolio',
		));

		if( $posts ): ?>
			
			<div class="portfolio main-portfolio">
				
			<?php foreach( $posts as $post ): 
				
				setup_postdata( $post );
				$logo = get_field('logo');
				$whiteLogo = get_field('white_logo');
				?> 
				<a href="<?php the_permalink(); ?>" class="portfolio-item">
					<?php the_post_thumbnail( 'full' ); ?>
					<img src="<?php echo $whiteLogo['url']; ?>" alt="<?php echo $whiteLogo['alt']; ?>" class="white-logo" />
					<div class="portfolio-content">
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="color-logo"/>
					</div>
					
				</a>
			
			<?php endforeach; ?>
			
			</div>
			
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>
		
	</div>
</div>



<?php get_footer(); ?>