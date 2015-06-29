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
		
	</div>
	<div class="step one">
		<h3>Web Design</h3>
		<span class="section-content"><span>We design and develop creatively, simple websites that help our clients achieve their goals.</span></span> 
	</div>
	<div class="step two">
		<h3>Internet Marketing</h3>			
		<span class="section-content"><span>Our Internet marketing strategies are built to drive traffic and deliver results.</span></span> 
	</div>
	<div class="step three">
		<h3>Video</h3>
		<span class="section-content"><span>Professional video production that effectively delivers your company's message.</span></span> 
	</div>
	<div class="step four">
		<h3>Design & Creative</h3>
		<span class="section-content"><span>Creative services that correctly promote and brand your company as an industry leader.</span></span> 
	</div>
	<div style="clear:both"></div>
</div>

<div id="hp-portfolio" class="homepage-portfolio">
	<div class="container">
		<h2 class="center-content">Our Recent Work</h2>
			<p style="text-align: center; color: #fff;">We take a goal-centered approach to every project and are committed to developing websites that our clients are proud to call theirs.</p>
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
							<h3><?php the_field('tagline') ?></h3>
							<p><?php the_field('tagline') ?></p>
							
						</div>
						<div class="background"></div>
					</a>
		 <?php  endwhile; ?>

		</div>
	<?php endif; ?>

	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</div>

<div id="hp-testimonials">
	<div class="container">
		<div class="quote">
			<p>"Venta Marketing has helped Boyle Investment Company develop digital marketing strategies that keep us on the cutting edge. Their team is great to work with, constantly develops creative, goal-centered strategies, and always delivers high-quality work on time. From website design to SEO to email marketing to Social Media management, we rely on Venta Marketing for all of our digital marketing needs."</p>
			<p id="name"><span>Anne Brand,</span> Director of Marketing at Boyle Investment Company</p>
			<a href="http://www.boyle.com/" target="_blank"><img src="/wp-content/uploads/2014/08/boyle-logo.jpg"></a>
		</div>
	</div>
</div>
<div style="clear:both"></div>
</div>

<?php get_footer(); ?>