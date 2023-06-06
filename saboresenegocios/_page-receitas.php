<?php
/*
Template Name: Receitas
*/
//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

<!--div id="masthead" style="background-image: url(<?php the_field('banner'); ?>);">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p class="chamada"><?php the_field('chamada'); ?></p>
  </div>
</div-->

<?php
$loop = new WP_Query(array(
  'post_type' => 'receita',
  'posts_per_page' => 1
));
if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post(); ?>

<div id="masthead" style="background-image: url(<?php the_field('banner'); ?>);">
  <div class="background-wrapper">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <p class="chamada"><?php the_field('chamada'); ?></p>
    </div>
  </div>
</div>

<?php endwhile;
endif;
wp_reset_postdata();
?>


<div id="recentes">
  <h3>Recentes</h3>
  <div class="container">
    <div class="wrapper">
      <div class="posts">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'receita',
          'posts_per_page' => 3,
          'orderby' => 'rand'
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

  <!--div class="tabs">
            <ul>
                <li><a href="">Carnes</a></li>
                <li><a href="">Masses</a></li>
                <li><a href="">Sopas</a></li>
                <li><a href="">Frutos do Mar</a></li>
                <li><a href="">Sobremesas</a></li>
                <li><a href="">Veganos</a></li>
            </ul>
        </div-->
  <!--div class="posts">
            <div class="col-1">
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/thumb-3.jpg" alt="">
                    <h4>Lorem ipsum</h4>                    
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/thumb-1.jpg" alt="">
                    <h4>Lorem ipsum</h4>                    
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/thumb-2.jpg" alt="">
                    <h4>Lorem ipsum</h4>                    
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/thumb-3.jpg" alt="">
                    <h4>Lorem ipsum</h4>                    
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/thumb-3.jpg" alt="">
                    <h4>Lorem ipsum</h4>                    
                </div>
            </div>           
        </div-->
</div>

<div id="principal">
  <div class="container">

    <div class="col-1">

      <?php
      $loop = new WP_Query(array(
        'post_type' => 'receita',
        'posts_per_page' => 1
      ));
      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>

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
      <p class="rendimento">Rende: <strong><?php the_field('rendimento'); ?></strong></p>
      <p class="tempo">Tempo de preparo: <strong><?php the_field('tempo_de_preparo'); ?></strong> </p>

      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>

    </div>
    <div class="col-2">

      <?php
      $loop = new WP_Query(array(
        'post_type' => 'receita',
        'posts_per_page' => 1
      ));
      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>

    </div>



  </div>
</div><!-- principal -->

<div id="publicidade">
  <div class="container">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner.jpg" alt="">
  </div>
</div>


<div id="recomendados">
  <h3>Recomendados para você</h3>
  <div class="container">

    <div class="wrapper">

      <div class="posts">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'orderby' => 'rand'
          //'offset' => 1        
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
          <p><?php the_field('chamada'); ?></p>
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>