<?php
/*
Template Name: Denver Page
*/
?>

<?php get_header(); ?>
<div id="hp-header" class="hp-header hp-header-denver">
	<div class="container">
		<div class="hp-headline">Venta Denver</div>
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
<?php 

$posts = get_posts(array(
			'showposts' => 8,
			'post_type'			=> 'portfolio',
		));


if( $posts ): ?>
	
	<div class="portfolio denver-portfolio">
		
		<?php foreach( $posts as $post ): 
				
				setup_postdata( $post );
				$logo = get_field('logo');
				$whiteLogo = get_field('white_logo');
				?>  
		<a href="<?php the_permalink(); ?>" class="portfolio-item">
			<?php the_post_thumbnail( 'full', array( 'class' => 'main-portfolio-image' )  ); ?>
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="color-logo"/>
		</a>
	
	<?php endforeach; ?>
	
	</div>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>
<div id="hp-services">
	<div class="container">
		<h2><span>Our Services</span></h2>
		<p>Our organized process and approach to projects allows our team to effectively collaborate with clients to develop the best possible end product that addresses yours goals and achieves maximum success.</p>
		<div class="services-venta">
			<div class="service-venta">
				<div class="img">
					<img src="/wp-content/uploads/2015/06/web-design-service-icn-white-venta.png">
				</div>
				<h2><a href="<?php echo get_permalink( 73 ); ?>">Web Design & Development</a></h2>
				<ul>
					<li>Responsive Web Design</li>
					<li>WordPress Web Design</li>
					<li>E-Commerce Web Design</li>
					<li>Custom Web Development</li>
				</ul>
			</div>
			<div class="service-venta">
				<div class="img">
					<img src="/wp-content/uploads/2015/06/internet-marketing-service-icn-white-venta.png">
				</div>
				<h2>Internet Marketing</h2>
				<ul>
					<li>Search Engine Optimization</li>
					<li>Pay-Per-Click</li>
					<li>Email Marketing</li>
					<li>Social Media</li>
				</ul>
			</div>
			<div class="service-venta">
				<div class="img">
					<img src="/wp-content/uploads/2015/06/creative-service-icn-white-venta.png">
				</div>
				<h2>Visual & Creative</h2>
				<ul>
					<li>Video Production</li>
					<li>Collateral Design</li>
					<li>Logo Design</li>
					<li>Photography</li>
				</ul>
			</div>
		<div style="clear:both"></div>
		</div>
	</div>
</div>



<?php get_footer(); ?>