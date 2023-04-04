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

<section id="adega">
  <div class="container">
    <div class="content">
        <div class="card">
          <div class="info">
            <h2>Adega</h2>
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.  </p>
            <a href="" class="btn">Saiba mais</a>
          </div>
          <div class="img">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/vinho-1.jpg" alt="">            
          </div>
        </div>
    </div>

    <div id="sidebarWrap">
      <div id="sidebar">
        
        <div class="newsletter">
          <h3>Newsletter</h3>
          <p>Lorem ipsum</p>
        </div>

        <div class="revista">
          <h3>Revista</h3>
          <p>Lorem ipsum</p>
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/banner-revista.jpg" alt="">                      
        </div>

        <div class="banner">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/banner-rb.jpg" alt="">                      
        </div>

      </div>
    </div>    
    
  </div>
</section>

<section id="receitas">
  <div class="container">
    <div class="content">
      <div class="card">
        <div class="info">
          <h2>Receitas</h2>
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.  </p>
          <a href="" class="btn">Saiba mais</a>
        </div>
        <div class="img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/receitas-1.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="sidebar"></div>
  </div>
</section>

<section id="drinks">
  <div class="container">
    <div class="content">
      <h2>Drinks</h2>
      <h3>Lorem ipsum dolor site</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>

      <div class="lista-drinks">
        <div class="item">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/drinks-1.jpg" alt=""></a>
        </div>
        <div class="item">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/drinks-2.jpg" alt=""></a>
        </div>
        <div class="item">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/drinks-3.jpg" alt=""></a>
        </div>
      </div>

      <a href="" class="btn">Saiba mais</a>
    </div>
    <div class="sidebar"></div>
  </div>
</section>

<section id="video">
  <div class="container">
    <div class="content">
    <img src="<?php echo get_stylesheet_directory_uri()?>/img/video-1.jpg" alt="">
    </div>
    <div class="sidebar"></div>
  </div>
</section>

<section id="mais">
  <div class="container">
    <div class="content">
      
      <div id="editorial" class="card">
        <div class="info">
          <h2>Editorial</h2>
          <h3>Lorem ipsum dolor site</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
          <a href="" class="btn">Saiba mais</a>
        </div>
        <div class="img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/cafe-1.jpg" alt="">
        </div>
      </div>

      <div id="casa" class="card">
        <div class="info">
          <h2>A casa é sua</h2>
          <h3>Lorem ipsum dolor site</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
          <a href="" class="btn">Saiba mais</a>
        </div>
        <div class="img">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/salada-1.jpg" alt="">
        </div>
      </div>

    </div>
    <div class="sidebar"></div>
  </div>
</section>

<section id="destinos">
  <div class="container">
    <div class="content">      
        <h2>Destinos</h2>        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>                
        <div class="lista-destinos">
          <div class="item">
            <a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/destinos-1.jpg" alt=""></a>
          </div>
          <div class="item">
            <a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/destinos-2.jpg" alt=""></a>
          </div>
          <div class="item">
            <a href=""><img src="<?php echo get_stylesheet_directory_uri()?>/img/destinos-3.jpg" alt=""></a>
          </div>
        </div>
        <a href="" class="btn">Saiba mais</a>
    </div>
    <div class="sidebar"></div>
  </div>
</section>

<section id="cozinha">
  <div class="container">
    <div class="content">        
        
        <div class="card">          
          <div class="info">
            <h2>Cozinha afetiva</h2>
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.  </p>
            <a href="" class="btn">saiba Mais</a>
          </div>
          <div class="img">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/cozinha-1.jpg" alt="">
          </div>
        </div><!-- card -->

    </div>      
  </div>
</section>

<section id="especiais">
    
    <div class="container">
      <div class="content">
        <div class="card">
          <div class="info">
            <h2>Especiais</h2>
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.  </p>
            <a href="" class="btn">saiba Mais</a>
          </div>
          <div class="img">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/vinho-2.jpg" alt="">
          </div> 
        </div> 
      </div>

      <div class="sidebar"></div>
    </div>
  
</section>

</div><!-- main wrapper -->

<?php get_footer(); ?>