<section class="hero-desafio">
    <img src="<?php the_sub_field('imagen_de_fondo_mob') ?>" class="hide-tablet-on-up" alt="">
    <img src="<?php the_sub_field('imagen_de_fondo') ?>" class="hide-on-small-only" alt="">

    <div class="overlay"></div>
    <div class="container">
        <h3><?php the_sub_field('subtitulo_superior') ?></h3>
        <?php the_sub_field('copy_principal') ?>
        <a href="#<?php the_sub_field('nombre_de_ancla_del_boton') ?>" class="btn btn-red"><?php the_sub_field('texto_del_boton') ?></a>
    </div>
</section>