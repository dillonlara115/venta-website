<?php 

$posts = get_posts(array(
	'post_type'			=> 'Team'
));

if( $posts ): ?>
	
	<div class="team-container">
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post )
		
		?> 
		<a href="<?php the_permalink(); ?>" class="team-member">
			<?php the_post_thumbnail( 'full' ); ?>
			<div class="team-member-title">
				<p><?php the_title(); ?></p>
				<span><?php the_field('job_title') ?></span>
				
			</div>
			<p class="team-member-description"><?php the_field('about_team_member') ?></p> 
		</a>
	
	<?php endforeach; ?>
	
	</div>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>

