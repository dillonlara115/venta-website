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
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
				<?php edit_post_link( __( 'Edit', 'blankslate' ), '<span class="edit-link">', '</span>' ) ?>
			</div>
		</div>
		<?php comments_template( '', true ); ?>

		
		<div style="clear:both"></div>
	</div>
</div>

<?php get_footer(); ?>