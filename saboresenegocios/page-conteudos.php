<?php
/*
Template Name: Conteudos
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
    <div class="conteudo">
    <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'orderby' => 'DESC',
          'paged' => get_query_var('paged') 
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="item">
          <div class="col-1">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumb-noticia'); ?>
            </a>
          </div>
          <div class="col-2">
            <h4>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h4>
            <p><?php the_field('chamada'); ?></p>
            <p><a href="<?php the_permalink(); ?>" class="btn">Leia mais</a></p>
          </div>          
        </div>        
        <?php endwhile;                
          endif;                            
        ?>
        <div class="pagination">
          <?php wp_pagenavi( array( 'query' => $loop ) ); ?>  
        </div>


    </div>
  </div>
</div><!-- principal -->

<?php get_footer(); ?>