<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div id="hp-header" class="hp-header hp-header-portfolio" style="background: url(<?php echo $feat_image ?>) no-repeat center center;background-size: cover;" >
		<div class="container">
			<div class="hp-headline portfolio-headline">
				<?php the_title(); ?>
			</div>
			<div style="clear: both"></div>
		</div>
	</div>
</div>
<div class="body-container">
	<div class="container">
	<?php the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="about-content">
			<div class="main-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php dynamic_sidebar( 'contact-sidebar' ); ?>
		<div style="clear:both"></div>
</div>



<?php get_footer(); ?>