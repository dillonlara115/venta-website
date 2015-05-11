<?php get_header(); ?>

<div class="about">
	<h1 class="entry-title"><span><?php the_title(); ?></span></h1>
</div>

<div class="content-bg">
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