<?php get_header(); ?>


<div id="masthead">
    <img src="<?php the_field('banner_top'); ?>" alt="" class="desktop">
    <img src="<?php the_field('banner_top_mobile'); ?>" alt="" class="mobile">
</div>



<div id="principal">


  <div class="container">

    <div class="conteudo">
        <img src="<?php the_field('imagem_destaque'); ?>" alt="" class="img-destaque">
        <img src="<?php the_field('logo'); ?>" alt="" class="logo">
        <h3 class="chamada"><?php the_field('chamada'); ?></h3>
        <?php the_content(); ?>             
    </div>

    <div class="video">
        <?php the_field('video'); ?>
    </div>

    <div class="produtos">        
        <div class="itens">
            <?php
                $images = acf_photo_gallery('imagens_produtos', $post->ID);
                if (count($images)) :
            ?>            
                <?php
                foreach ($images as $image) :                                        
                ?>
                    <div class="item">
                        <img src="<?php echo $image['full_image_url']; ?>">
                    </div>
                <?php endforeach; ?>            
            <?php endif; ?>
        </div>
    </div>

  </div>

</div>





<?php get_footer(); ?>