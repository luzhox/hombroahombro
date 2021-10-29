<section class="equipo">
    <h2 class="title"><?php the_sub_field('titulo_de_la_seccion')?></h2>
    <div class="line"></div>
    <div class="container">
        <div class="equipo-group owl-carousel owl-theme">
        <?php if( have_rows('equipo') ) {
            while( have_rows('equipo') ) { the_row();  ?>
            <div class="usuario">
                <div class="img" style="background:url(<?php the_sub_field('imagen')?>)"></div>
                <div class="text">
                    <h3 class="title"><?php the_sub_field('nombre')?></h3>
                    <span><?php the_sub_field('cargo')?></span>
                    <p class="hide-on-small-only "><?php the_sub_field('descripcion')?></p>
                </div>
            </div>
            <?php }} ?> 
        </div>
    </div>
</section>
