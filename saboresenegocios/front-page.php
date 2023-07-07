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
            <p>EDIÇÃO DE INVERNO</p>
            <?php
                $loop = new WP_Query(array(
                  'post_type' => 'revistas',
                  'posts_per_page' => 1,        
                  'order' => 'DESC'       

                ));
                if ($loop->have_posts()) :
                  while ($loop->have_posts()) : $loop->the_post(); ?>

                <?php
                    $image = get_field('capa');
                    $size = 'revistas'; // (thumbnail, medium, large, full or custom size)            
                  ?>
                
               
                  <a href="<?php the_field('url'); ?>">
                    <?php 
                    if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                  </a>
                  
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
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
              <?php
              $has_content = get_field('possui_conteudo');
              if ($has_content) { ?>
                <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a></li>
              <?php } else { ?>
                <li><a href="<?php the_field('link_vitrine'); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a></li>
              <?php } ?>


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
              <?php
              $has_content = get_field('possui_conteudo');
              if ($has_content) { ?>
                <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo_branco'); ?>" alt=""></a></li>
              <?php } else { ?>
                <li><a href="<?php the_field('link_vitrine'); ?>"><img src="<?php the_field('logo_branco'); ?>" alt=""></a></li>
              <?php } ?>

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
          'post_type' => array('post', 'receita'),
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
            <?php
              $images = acf_photo_gallery('imagens_home', $post->ID);
              if (count($images)) :
                foreach ($images as $image) :
                  $full_image_url = $image['full_image_url'];
                  $full_image_url = acf_photo_gallery_resize_image($full_image_url, 353, 234); 
                  $url = $image['url'];
              ?>
                <div class="item">
                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
                </div>
                <?php endforeach;
                endif; ?>
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
            <?php
              $images = acf_photo_gallery('imagens_home', $post->ID);
              if (count($images)) :
                foreach ($images as $image) :
                  $full_image_url = $image['full_image_url'];
                  $full_image_url = acf_photo_gallery_resize_image($full_image_url, 353, 234); 
                  $url = $image['url'];
              ?>
                <div class="item">
                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
                </div>
                <?php endforeach;
                endif; ?>
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
          'category_name' => 'fala-cliente'
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
          'category_name' => 'funcionario-destaque',
          'posts_per_page' => 1
        ));

        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="card">
              <div class="info">
                <h2>Funcionário destaque</h2>
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

</div><!-- main wrapper -->

<?php get_footer(); ?>