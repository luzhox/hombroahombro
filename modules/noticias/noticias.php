<section class="noticias">
    <h2 class="noticias__title"><?php the_sub_field('titulo_de_seccion')?></h2>
    <div  class="container">
 <div id="noticias-slider" class="owl-carousel owl-theme">

    <?php
        $numerodenoticias = get_sub_field('numero_de_noticias');

    $args = array(
     'post_type'=>'noticias',
    'orderby'=> 'date',
    'posts_per_page'=> $numerodenoticias,
     'order'=>'DESC'); ?>

  <?php $family = new WP_Query($args);?>
  <?php while($family->have_posts()): $family->the_post();?>


  <div data-aos="fade-up" data-aos-offset="100" class="noticia">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

                <div class="img"  style="background-image:url(<?php echo $url; ?>); background-size:cover; background-position:center;"></div>
                <div class="text" >
                    <span>    Publicado el <?php the_date()?></span> |<span class="lugar"> <?php the_field('lugar')?></span>
                    <p><?php title("22") ?></p>
                    <a href="<?php the_permalink()?>" target="_blank" rel="noopener noreferrer">Leer más</a>
                </div>
            </div>
  <?php endwhile; wp_reset_postdata(); ?>

  </div>

  <a href="/prensa/" class="btn btn-red">Ver más noticias</a>


    </div>
</section>

<style>


#noticias-slider.owl-theme .owl-dots, #noticias-slider.owl-theme .owl-nav{

position: absolute;
bottom: -40px;
left:0;
right:0;
}


</style>