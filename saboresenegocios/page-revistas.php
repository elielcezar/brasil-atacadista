<?php
/*
Template Name: Revistas
*/
//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>



<div id="principal">
  <div class="container">

    <ul class="fornecedores">
    <?php
      $loop = new WP_Query(array(
        'post_type' => 'revistas',
        'posts_per_page' => -1,        
        'order' => 'DESC'       

      ));
      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>

      <?php
            $image = get_field('capa');
            $size = 'revistas'; // (thumbnail, medium, large, full or custom size)            
      ?>
      
      <li>
        <a href="<?php the_field('url'); ?>">
            <?php 
            if( $image ) {
              echo wp_get_attachment_image( $image, $size );
            }
            ?>
            <p class="btn"><?php the_title(); ?></p>
        </a>
        </li>
      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </ul>

  </div>
</div>





<?php get_footer(); ?>