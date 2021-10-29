<section id="zonadeperiodista" class="zonadeperiodista">
    <h2 class="zonadeperiodista__title"><?php the_sub_field('titulo_de_seccion')?></h2>
    <div id="zona-recursos" class="container">
    <?php if( have_rows('zonarecursos') ) {
            while( have_rows('zonarecursos') ) { the_row();  ?>
  <div data-aos="fade-up" data-aos-offset="100" class="recurso" style="background:url(<?php the_sub_field('imagen_de_fondo')?>)">
            <div class="overlay"></div>
                <div class="text" >
                    <span>CAMPAÑA</span>
                    <h3><?php the_sub_field('titulo_de_campana')?></h3>
                    <a href="<?php the_sub_field('recurso')?>" target="_blank" rel="noopener noreferrer">DESCARGAR KIT DE PRENSA</a>
                </div>
            </div>

            <?php }} ?>
    </div>
</section>