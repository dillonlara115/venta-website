<?php
/*
Template Name: Denver Page
*/
?>

<?php get_header(); ?>
<div id="hp-header" class="hp-header hp-header-denver">
	<div class="container">
		<div class="hp-headline">Venta Denver, CO</div>
		<div style="clear: both"></div>
	</div>
</div>
</div>
<div class="denver-content">
	<div class="main-content">
		<?php echo $post->post_content ?>
	</div>
	<?php dynamic_sidebar( 'contact-sidebar' ); ?>
</div>
<h2 class="center-content">Our Recent Work</h2>
<?php 

$posts = get_posts(array(
	'post_type'			=> 'portfolio'
));

if( $posts ): ?>
	
	<div class="portfolio denver-portfolio">
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post )
		
		?> 
		<a href="<?php the_permalink(); ?>" class="portfolio-item">
			<?php the_post_thumbnail( 'full' ); ?>
			<div class="portfolio-content">
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('tagline') ?></p>
				
			</div>
			<div class="background"></div>
		</a>
	
	<?php endforeach; ?>
	
	</div>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>
<div class="services">
	<h2 class="center-content">Our Services</h2>
	<div class="container">
		<div class="item"><i class="icon-design-and-creative"></i><h3>Design & Creative</h3>
		<p>Our team is passionate about branding, design and creative. We design your marketing elements - from print to website to logos and more - to serve as an identifiable and memorable icon of your brand, so you don’t get lost in the crowd. </p>
		</div>
		<div class="item"><i class="icon-seo-marketing-without-glare"></i><h3>SEO</h3>
			<p>Our SEO specialists will optimize your website to generate traffic, build your site’s domain authority by creating useful and shareable content, and grow your online presence using the latest and most effective SEO tactics to date. </p>
		</div>
		<div class="item"><i class="icon-ppc-optimization"></i><h3>PPC</h3>
			<p>Pay-Per-Click Advertising drives leads & markets your services online by putting your business in front of people who are already searching for you. We create PPC strategies, manage, test & design campaigns for the most optimized success.</p>
		</div>
		<div class="item"><i class="icon-web-design-and-development"></i><h3>Web Design & Dev</h3>
			<p>Today’s responsive web calls for uncompromising content and functionality. Venta’s web design & development team creates beautifully optimized websites, leveraging open-source CMS to customize your specific business needs.</p>
		</div>
		<div class="item"><i class="icon-video-marketing-production"></i><h3>Video</h3>
			<p>Videos are one of the most powerful ways of increasing website conversion rates on your website. We’ll work from start to finish on your videos from pre-production, post-production editing, video SEO, website embedding and more. </p>
		</div>
	</div>
</div>



<?php get_footer(); ?>