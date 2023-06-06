<?php get_header(); ?>

<div id="masthead">
    <div class="container">
      <h1><?php single_cat_title( ); ?></h1>
    </div>
  </div>

<div id="principal">
  <div class="container">
    <div class="conteudo">
    <?php      
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
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
          <?php wp_pagenavi( ); ?>  
        </div>


    </div>
  </div>
</div><!-- principal -->

<?php get_footer(); ?>