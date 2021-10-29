<section class="proyectos-izquierda">
    <div class="fondo" data-aos="fade-up" data-aos-offset="100"></div>
    <div class="imagen-mapa" data-aos="fade-left" data-aos-offset="100" style="background:url(<?php the_sub_field('mapa')?>)"></div>
    <div class="container">
        <div class="contenido" data-aos="fade-up" data-aos-offset="100">
            <h2 class="title"><?php the_sub_field('title')?></h2>
            <div class="line"></div>
            <p><?php the_sub_field('texto')?></p>

            <?php if( get_sub_field('hay_boton') ): ?>
	
            <a href="<?php the_sub_field('url')?>" class="btn btn-red">VER MÁS</a>
	
<?php endif; ?>

        </div>
    </div>

</section>