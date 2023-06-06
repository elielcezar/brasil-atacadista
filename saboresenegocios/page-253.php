<?php get_header(); ?>


<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>



<div id="principal">


  <div class="container">

    <div class="conteudo">

      <?php the_content(); ?>

      <ul>
        <?php
          $loop = new WP_Query(array(
            'post_type' => 'planilha',
            'posts_per_page' => -1      
          ));
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
        <li><a href="<?php the_field('arquivo'); ?>"><?php the_title(); ?></a></li>
        <?php endwhile;
          endif;
          wp_reset_postdata();
        ?>
      </ul>




    </div>

  </div>

</div>


<?php get_footer(); ?>