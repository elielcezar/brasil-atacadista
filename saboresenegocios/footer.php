<footer>
  <div class="footer-1">
    <div class="container">
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
  </div>

  <div class="footer-2">
    <div class="container">
      <h3>Patrocinadores</h3>
      <ul class="patrocinadores">
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
  </div>
  <div class="footer-3">
    <div class="container">
      <div class="row">
        <div class="col-1">

          <div class="row">
            <div class="col-1">
              <ul>
                <li><a href="<?php echo site_url(); ?>/conteudos/">Conteúdos</a></li>
                <li><a href="<?php echo site_url(); ?>/receitas/">Receitas</a></li>
                <li><a href="<?php echo site_url(); ?>/revista">Revista</a></li>
                <li><a href="<?php echo site_url(); ?>/vitrine-do-fornecedor/">Vitrine do Fornecedor</a></li>
                <li><a href="http://brasilatacadista.com.br/saboresenegocios/#main-wrapper">Cadastre-se</a></li>
              </ul>
            </div>
            <div class="col-2">
              <div class="newsletter">
                <h3>Newsletter</h3>
                <p>Receba novidades</p>
                <?php echo do_shortcode('[mc4wp_form id=94]'); ?>
              </div>
            </div>
          </div><!-- row -->

        </div><!-- col-1 -->

        <div class="col-2">

          <div class="row">
            <div class="col-1 social">
              <h4>Redes sociais</h4>
              <ul>
                <li><a href="https://www.instagram.com/brasil.atacadista/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/brasil.atacadista" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/c/BrasilAtacadista" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="col-2">
              <a href="<?php echo site_url(); ?>" class="logo">Sabores e Negócios</a>
            </div>
          </div><!-- row -->

        </div><!-- col-1 -->

      </div>
    </div>
  </div>


</footer>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>