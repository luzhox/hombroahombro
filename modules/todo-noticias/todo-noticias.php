<style>
.hero-principal .slider .slide div.botones .btn-red{

background-color:#669fea;;

}

.hero-principal .slider .slide div.botones .btn-red:hover{

background-color:hsl(214, 68%, 61%);;

}

</style>
<div id="noticias-filtrables" style="float:left;height:70px"></div>
<section  class="noticias-filtrables">
    <h2 class="noticias-filtrables__title"><?php the_sub_field('titulo_de_seccion')?></h2>


    <div  class="container" class="noticias-filtrables">
 <div id="noticias"  >

    <?php
        $numerodenoticias = get_sub_field('numero_de_noticias');

    $args = array(
     'post_type'=>'noticias',
    'orderby'=> 'date',
    'posts_per_page'=> $numerodenoticias,
     'order'=>'DESC'); ?>

  <?php $family = new WP_Query($args);?>
  <?php while($family->have_posts()): $family->the_post();?>


  <div data-aos="fade-up" data-aos-offset="100" class="noticia mix <?php
        $category_array = wp_get_post_categories($post->ID);
        $category_list = array();
        foreach ( $category_array as $categories ) {
            $category_list[] = strtolower(str_replace(' ','-',get_cat_name( $categories )));
        }

        $lister = implode(' ' , $category_list);

        $list_categories = $lister;
        echo $lister ;
    ?>">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

                <div class="img"  style="background-image:url(<?php echo $url; ?>); background-size:cover; background-position:center;"></div>
                <div class="text" >
                    <span> <?php the_date()?></span></span>
                    <h4><?php the_title() ?></h4>
                    <p><?php text('10')?></p>
                    <a href="<?php the_permalink()?>" target="_blank" rel="noopener noreferrer">Leer más</a>
                </div>
            </div>
  <?php endwhile; wp_reset_postdata(); ?>

  </div>
  <div class="controls-pagination">
            <div class="mixitup-page-list"></div>
        </div>




    </div>
</section>

<script src="<?php echo get_stylesheet_directory_uri();?>/scripts/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/scripts/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/scripts/mixitup-multifilter.min.js"></script>
    <script>

    var containerEl = document.querySelector('.noticias-filtrables');
    var currentLimit = 6;
    var incrementAmount = 6;


    if (window.matchMedia("(min-width: 450px)").matches) {
        var currentLimit = 6;
} else {
    var currentLimit = 6;
}



var mixer = mixitup(containerEl, {
    multifilter: {
        enable: true
    },
    animation: {
        effects: 'fade translateZ(-100px)'
    },
    pagination: {
                    limit: currentLimit
                },

});





</script>

