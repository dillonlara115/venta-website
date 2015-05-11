<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width">
<title><?php wp_title(' | ', true, 'right'); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="/responsive-tabs/jQueryTab.css" type="text/css" media="screen" />
<script src="/responsive-tabs/js/jQueryTab.js"></script>

<link rel="stylesheet" type="text/css" href="/hover-effects/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="/hover-effects/css/style4.css" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61752176-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>
</head>


<?php if ( is_page( 'denver' ) ) { ?>
	<body>


	<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div id="custom-bg" class="page-denver" style="background-image: url('<?php echo $image[0]; ?>')">
<?php endif; ?>
<?php } else { ?>
	<body <?php body_class(); ?>>
	<div class="page">
<?php } ?>


<div class="header-top">
<div class="container">
	<a href="/"><img src="/wp-content/uploads/2014/08/venta-logo-bg-white.png" alt="Venta Marketing" class="logo"></a>
	<div id="navigation">
		<ul>
			<a href="/about/"><li>About</li></a>
			<a href="/services/"><li>Services</li></a>
			<a href="/contact/"><li>Contact</li></a>
		</ul>
	</div>
</div>
</div>