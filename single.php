<?php get_header(); ?>

<?php the_post(); ?>


</div>


<div class="container" style="padding-top: 120px;">


    <div class="main-content">
      <h1><?php the_title(); ?></h1>
      <?php echo $post->post_content ?>
    </div>
    <?php dynamic_sidebar( 'contact-sidebar' ); ?>



</div>

<div style="clear:both;"></div>


<?php get_footer(); ?>
