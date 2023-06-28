<?php get_header(); ?>

<div id="masthead" style="background-image: url(<?php the_field('banner'); ?>);">
  <div class="background-wrapper">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <p class="chamada"><?php the_field('chamada'); ?></p>
    </div>
  </div>
</div>

<div id="recentes">
  <h3>Recentes</h3>
  <div class="container">
    <div class="wrapper">
      <div class="posts">
        <?php
        $currentID = get_the_ID();

        $loop = new WP_Query(array(
          'post_type' => 'receita',
          'posts_per_page' => 3,
          'orderby' => 'rand',
          'post__not_in' => array($currentID)
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="item">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumb-noticia'); ?>
          </a>
          <h4>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h4>
          <!--p><?php the_field('chamada'); ?></p-->
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>

<div id="principal">
  <div class="container">

    <div class="col-1">
      <img src="<?php the_field('foto_receita'); ?>">
      <div id="compartilhe">
        <div class="container">
          <?php
        global $wp;
        $current_url = home_url(add_query_arg(array(), $wp->request));
        ?>
          <ul>
            <li class="fb"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank">Facebook</a></li>
            <li class="twitter"><a href="https://twitter.com/intent/tweet?text=<?php echo $current_url; ?>" target="_blank">Twitter</a></li>
            <li class="wpp"><a href="https://api.whatsapp.com/send?text=<?php echo $current_url; ?>" target="_blank">Whatsapp</a></li>
            <li class="telegram"><a href="https://t.me/share/url?url=<?php echo $current_url; ?>" target="_blank">Telegram</a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $current_url; ?>" target="_blank">Linkedin</a></li>
          </ul>
        </div>
      </div>
      <?php 
      $rendimento = get_field('rendimento');
      if ($rendimento){ ?>
      <p class="rendimento">Rende: <strong><?php the_field('rendimento'); ?></strong></p>
      <?php } ?>
      <?php
        $tempo = get_field('tempo_de_preparo');
        if ($tempo){ ?>
      <p class="tempo">Tempo de preparo: <strong><?php the_field('tempo_de_preparo'); ?></strong> </p>
      <?php } ?>
      <?php
      $file = get_field('planilha_de_custos');
      if ($file){ ?>
      <p class="planilha"><a href="<?php echo $file; ?>" target="_blank">Faça o download da Planilha de Custos</a></p>
      <?php } ?>
    </div>
    <div class="col-2">
      <?php the_content(); ?>
    </div>



  </div>
</div><!-- principal -->

<div id="publicidade">
  <div class="container">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner.jpg" alt="">
  </div>
</div>


<div id="recomendados">

  <div class="container">
    <?php
            $featured_posts = get_field('recomendados');
            if( $featured_posts ): ?>

    <h3>Recomendados para você</h3>

    <div class="posts">

      <?php foreach( $featured_posts as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
      <div class="item">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumb-noticia'); ?>
        </a>
        <h4>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h4>
        <!--p><?php the_field('chamada'); ?></p-->
      </div>
      <?php endforeach; ?>

      <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>

    </div>

    <?php endif; ?>

  </div>
</div>
<?php get_footer(); ?>