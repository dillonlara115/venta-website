<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="hp-header" class="hp-header">
	<video autoplay  muted loop poster="http://ventamarketing.com/wp-content/uploads/2015/05/video.png">
		<source src="<?php bloginfo('template_url'); ?>/video/venta.mp4" type="video/mp4"/>
		<source src="<?php bloginfo('template_url'); ?>/video/venta.ovg" type="video/ovg"/>
		<source src="<?php bloginfo('template_url'); ?>/video/venta.webm" type="video/webm"/>
	</video>
	<div class="container">
		<div class="hp-headline">Digital Marketing & Web Design</div>
			<h2 class="hp-headline">we help businesses identify, visualize, and achieve their goals through adaptive digital marketing</h2>
			
			<div style="clear: both"></div>
		</div>
	</div>
</div>

<div class="content-bg">
	<div class="container">
		<div class="home-content">
			<div id="hp-body-img">
				<img src="/wp-content/uploads/2014/08/max-hp-venta.jpg">
			</div>
			<div id="hp-body-content">
				<h2>A Digital Marketing Agency</h2>
				<p>Venta Marketing is digital marketing company that provides website design, Internet marketing, print design, and marketing and creative strategies.</p>
				<p>There are a lot of companies that do what we do; however, we believe that what we do is not the most important reason to work with us. We believe that why and how we do what we do is what sets us apart.</p>
				<p>We take a perceptive, goal-centered approach to every project. Every service that we provide, we offer because we fully believe that service will help our client achieve their goals. We do this because we care. We care about our clients, we care about their goals, and we care about their success. That is what sets us apart and why we do what we do. When hired we become a member of our clientʼs team and are fully invested in their success.</p>
				<p>It is our mission to do our part by providing perceptive, goal-centered marketing services and caring more.</p>
			</div>
			<div style="clear: both"></div>
		</div>
	</div>
</div>

<div id="hp-services">
	<div class="container">
		<h2><span>Our Services</span></h2>
		<p>Our organized process and approach to projects allows our team to effectively collaborate with clients to develop the best possible end product that addresses yours goals and achieves maximum success.</p>
		<div class="services-venta">
			<div class="service-venta">
				<div class="img">
					<img src="/wp-content/uploads/2015/06/web-design-service-icn-white-venta.png">
				</div>
				<h2>Web Design & Development</h2>
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

<div id="hp-portfolio" class="homepage-portfolio">
	<div class="container">
		<h2 class="center-content">Our Recent Work</h2>
		<p>We take a goal-centered approach to every project and are committed to developing websites that our clients are proud to call theirs.</p>
	</div>

	<?php 

// args
$args = array(
	'numberposts'	=> -1,
	'showposts' => 4,
	'post_type'		=> 'portfolio',
	'meta_query' => array(
	'relation'		=> 'AND',
		array(
			'key'		=> 'category',
			'value'		=> 'Featured',
			'compare'	=> 'LIKE'
		),
	),
);


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
	<div class="portfolio denver-portfolio">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="portfolio-item">
					<?php the_post_thumbnail( 'full' ); ?>
					<div class="portfolio-content">
						<h3><?php the_title(); ?></h3>
						<p><?php the_field('tagline') ?></p>
						
					</div>
					<div class="background"></div>
				</a>
	 <?php  endwhile; ?>

	</div>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<div id="hp-testimonials">
	<div class="container">
		<div class="quote">
			<p>"Venta Marketing has helped Boyle Investment Company develop digital marketing strategies that keep us on the cutting edge. Their team is great to work with, constantly develops creative, goal-centered strategies, and always delivers high-quality work on time. From website design to SEO to email marketing to Social Media management, we rely on Venta Marketing for all of our digital marketing needs."</p>
			<p id="name"><span>Anne Brand,</span> Director of Marketing at Boyle Investment Company</p>
			<a href="http://www.boyle.com/" target="_blank"><img src="/wp-content/uploads/2014/08/boyle-logo.jpg"></a>
		</div>
	</div>
</div>
</div>
<div style="clear:both"></div>
</div>

<?php get_footer(); ?>