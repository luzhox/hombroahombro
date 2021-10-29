<section class="contenido-preparate">
    <div class="container slide-preparate">
    <?php if( have_rows('preparate') ) {
            while( have_rows('preparate') ) { the_row();  ?>
            <div class="contenido" data-aos="fade-up" data-aos-offset="100">
                <div class="icon"><img src="<?php the_sub_field('icono')?>" alt=""></div>
                <div class="text">
                    <h3 ><span class="count"><?php the_sub_field('titulo')?></span></h3>
                    <p><?php the_sub_field('descripcion')?></p>
                    <a href="<?php the_sub_field('url')?>" class="btn btn-primary <?php if( get_sub_field('el_link_es_video') ): ?>
	
	video-preview
	
<?php endif; ?>"><?php the_sub_field('texto-boton')?></a>
                </div>
            </div>
        <?php }} ?>  
    </div>
	
	
<script>


$ = jQuery.noConflict();



    $(".video-preview").colorbox({iframe:true, transition:"fade",width:'80%', height:'90%'});

</script>
</section>