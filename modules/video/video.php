<section class="seccion-video">
    <div class="container">
        
        <div class="texto" data-aos="fade-up" data-aos-offset="100">
            <?php the_sub_field('frase_del_video')?>
        </div>
        <div class="video" data-aos="fade-up" data-aos-offset="100" style="background:url(<?php the_sub_field('imagen_del_video')?>)">
            <div class="overlay-video"></div>
            <a class="video-preview" href="https://www.youtube.com/embed/mVLgx2nFdAw"></a>
        </div>

        
    </div>

</section>

<script>


$ = jQuery.noConflict();



    $(".video-preview").colorbox({iframe:true, transition:"fade",width:'80%', height:'90%'});

</script>