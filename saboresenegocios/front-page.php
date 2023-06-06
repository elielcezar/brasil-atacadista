<?php
/*
Template Name: Homepage Custom
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <?php
  $images = acf_photo_gallery('banners_desktop', $post->ID);

  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
      <div class="item">
        <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
      </div>
  <?php endforeach;
  endif; ?>
</section>

<section class="banners top mobile carrossel">
  <?php
  $images = acf_photo_gallery('banners_mobile', $post->ID);
  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
      <div class="item">
        <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
      </div>
  <?php endforeach;
  endif; ?>
</section>

<div id="main-wrapper">

  <div id="newsletter">
    <h3>Newsletter</h3>
    <p>Cadastre-se para receber novidades</p>
    <?php echo do_shortcode('[mc4wp_form id=94]'); ?>
  </div>

  <div id="banner-planilha">
    <a href="http://brasilatacadista.com.br/saboresenegocios/quer-calcular-os-custos-da-sua-receita/">
      <img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/banner-mobile-receita-brasil.jpg" alt="">
    </a>
  </div>

  <section id="receitas">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'receita',
          'posts_per_page' => 1,
          'orderby' => 'rand'
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <div class="info">
                <h2>Receitas</h2>
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('chamada'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
              </div>
              <div class="img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>

              </div>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>


      </div>

      <div id="sidebarWrap">
        <div id="sidebar">

          <div class="newsletter">
            <h3>Newsletter</h3>
            <p>Receba novidades</p>
            <?php echo do_shortcode('[mc4wp_form id=94]'); ?>
          </div>

          <div class="revista">
            <h3>Revista</h3>
            <p>Clique para a primeira edição!</p>
            <a href="http://brasilatacadista.com.br/saboresenegocios/revista"><img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/capa-1.jpg" alt=""></a>
          </div>

          <div class="banner">
            <a href="http://brasilatacadista.com.br/saboresenegocios/quer-calcular-os-custos-da-sua-receita/">
              <img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/banner-calcule.jpg" alt="">
            </a>
          </div>

        </div>
      </div>

    </div>
  </section>

  <div class="patrocinadores-1">
    <div class="container">
      <div class="content">
        <h3>Patrocinadores</h3>
        <ul class="patrocinadores">


          <?php
          $loop = new WP_Query(array(
            'post_type' => 'fornecedores',
            'meta_key'      => 'tipo',
            'meta_value'    => 'fixo',
            'posts_per_page' => -1,
            'orderby' => 'rand'
          ));
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <li><a href="http://brasilatacadista.com.br/saboresenegocios/vitrine-do-fornecedor/"><img src="<?php the_field('logo'); ?>" alt=""></a></li>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </ul>
      </div>
      <div class="sidebar"></div>
    </div>
  </div>

  <div class="patrocinadores-2">
    <div class="container">
      <div class="content">
        <h3>Patrocinadores</h3>
        <ul class="carrossel-patrocinadores">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'fornecedores',
            'meta_key'      => 'tipo',
            'meta_value'    => 'randomico',
            'posts_per_page' => -1,
            'orderby' => 'rand'
          ));
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <li><a href="http://brasilatacadista.com.br/saboresenegocios/vitrine-do-fornecedor/"><img src="<?php the_field('logo_branco'); ?>" alt=""></a></li>

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </ul>
      </div>
      <div class="sidebar"></div>
    </div>
  </div>


  <section id="harmonizacao">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'mao-na-massa',
          'posts_per_page' => 1
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <div class="info">
                <h2>Seu negócio</h2>
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('chamada'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
              </div>
              <div class="img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>

              </div>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>



      </div>
      <div class="sidebar"></div>
    </div>
  </section>

  <div id="editorial">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',          
          'posts_per_page' => 1,
          'meta_query' => array(
            array(
                'key'   => 'publieditorial',
                'value' => '1',
            )
          )
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <div class="info">
                <h2>Publieditorial</h2>
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('chamada'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
              </div>
              <div class="img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>

              </div>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>



      </div>
      <div class="sidebar"></div>
    </div>

  </div>

  <section id="dicas">
    <div class="container">
      <div class="content">
        <h2>Dicas da estação</h2>


        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'p' => 191
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_field('chamada'); ?></p>

            <div class="lista-dicas">
              <div class="item">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/dicas-1.jpg" alt=""></a>
              </div>
              <div class="item">
                <a href="<?php the_permalink(); ?>"><img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/sopa3.jpg" alt=""></a>
              </div>
              <div class="item">
                <a href="<?php the_permalink(); ?>"><img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/sopa2.jpg" alt=""></a>
              </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </div>
      <div class="sidebar"></div>
    </div>
  </section>

  <!--section id="video">
  <div class="container">
    <div class="content">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/video-1.jpg" alt="">
    </div>
    <div class="sidebar"></div>
  </div>
</section-->




  <!--div id="seu-negocio">
  <div class="container">
    <div class="content">
        <div class="card">
          <div class="info">
            <h2>Seu negócio</h2>
            <h3>Lorem ipsum dolor site</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            <a href="" class="btn">Saiba mais</a>
          </div>
          <div class="img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/seu-negocio.jpg" alt="">
          </div>
        </div>
    </div>
    <div class="sidebar"></div>
  </div>        
</div-->

  <section id="novidades">
    <div class="container">
      <div class="content">
        <h2>Novidades</h2>
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'p' => 111
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_field('chamada'); ?></p>

            <div class="lista-destinos">
              <div class="item">
                <a href="<?php the_permalink(); ?>"><img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/causa-2.jpg" alt=""></a>
              </div>
              <div class="item">
                <a href="<?php the_permalink(); ?>"><img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/causa3.jpg" alt=""></a>
              </div>
              <div class="item">
                <a href="<?php the_permalink(); ?>"><img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/causa-1.jpg" alt=""></a>
              </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>



      </div>
      <div class="sidebar"></div>
    </div>
  </section>

  <section id="fala-cliente">
    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => 'do-seu-jeito'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <div class="info">
                <h2>Fala Cliente</h2>
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('chamada'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
              </div>
              <div class="img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>

              </div>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>


      </div>
    </div>
  </section>

  <section id="especiais">

    <div class="container">
      <div class="content">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'destaque',
          'posts_per_page' => 1
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <div class="info">
                <h2>Funcionária destaque</h2>
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('chamada'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
              </div>
              <div class="img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>

              </div>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <!--div class="card">
          <div class="info">
            <h2>Funcionária destaque</h2>
            <h3>Amor e carinho para crescer</h3>
            <p>Atender com excelência e tratar os colegas com respeito e atenção é o que faz de Yasmin uma funcionária de destaque</p>
            <a href="http://brasilatacadista.com.br/saboresenegocios/amor-e-carinho-para-crescer-funcionaria-destaque/" class="btn">Saiba mais</a>
          </div>
          <div class="img">
            <img src="http://brasilatacadista.com.br/saboresenegocios/wp-content/uploads/2023/04/post2-1-1024x692.jpg" alt="">
          </div> 
        </div-->
      </div>

      <div class="sidebar"></div>
    </div>

  </section>

</div><!-- main wrapper -->

<?php get_footer(); ?>