<?php
/*
Template Name: Denver Page
*/
?>

<?php get_header(); ?>
<div id="hp-header" class="hp-header hp-header-denver">
	<div class="container">
		<div class="hp-headline">Denver, CO</div>
		<h2 class="hp-headline">we help businesses identify, visualize, and achieve their goals through adaptive digital marketing</h2>
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
<div class="portfolio denver-portfolio">

		<a href="http://lauraleeshealthyplate.com/" class="portfolio-image" target="_blank"><img src="/wp-content/uploads/2014/08/llhp-hp-portfolio.jpg"></a>

		<a href="http://democracy.missouri.edu/" class="portfolio-image" target="_blank"><img src="/wp-content/uploads/2014/08/kinder-hp-portfolio.jpg"></a>

		<a href="http://constructionkdc.com/" class="portfolio-image" target="_blank"><img src="/wp-content/uploads/2014/08/kdc-hp-portfolio.jpg"></a>
		
</div>
<div class="services">
	<h2 class="center-content">Our Services</h2>
	<div class="container">
		<div class="item"><i class="icon-design-and-creative"></i><h3>Design and Creative</h3>
		<p>Our team is passionate about branding, design and creative. We design your marketing elements - from print to website to logos and more - to serve as an identifiable and memorable icon of your brand, so you don’t get lost in the crowd. </p>
		</div>
		<div class="item"><i class="icon-seo-marketing-without-glare"></i><h3>SEO</h3>
			<p>People are searching for you, and your business deserves to be found online! Whether you need a new SEO strategy, a better local presence, technical SEO audits, or just a fresh start – we can help. Our SEO specialists will optimize your website to generate traffic, build your site’s domain authority by creating useful and shareable content, and grow your online presence using the latest and most effective SEO tactics to date. </p>
		</div>
		<div class="item"><i class="icon-ppc-optimization"></i><h3>PPC</h3>
			<p>Pay-Per-Click Advertising drives leads and markets your services online by putting your business in front of people who are already searching for you or a service like yours. We create PPC strategies, manage and design campaigns, and A/B test landing pages for the most optimized success. We continually monitor and track our PPC efforts to ensure you are receiving the most optimal clicks.</p>
		</div>
		<div class="item"><i class="icon-web-design-and-development"></i><h3>Web Design and Development</h3>
			<p>Today’s responsive web calls for uncompromising content and functionality. Venta’s web design & development team create beautifully optimized websites, leveraging open-source content management systems to customize your business needs. Our content strategy & creation team will ensure your site’s content is effective, impactful and easy to navigate. </p>
		</div>
		<div class="item"><i class="icon-video-marketing-production"></i><h3>Video</h3>
			<p>Videos are one of the most powerful ways of increasing website conversion rates on your website. Venta Marketing provides professional video production services for your site including testimonial videos, company videos and more. We’ll work from start to finish on your videos from pre-production, post-production, video SEO, embedding and more. </p>
		</div>
	</div>
</div>



<?php get_footer(); ?>