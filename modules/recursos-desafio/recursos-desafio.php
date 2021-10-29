<section class="recursos-desafio">
    <div class="container">
        <h2><?php the_sub_field('titulo_superior') ?></h2>
        <div class="recursos-desafio__container">
            <?php if (have_rows('recurso_descargables')) {
                while (have_rows('recurso_descargables')) {
                    the_row();  ?>

                    <a href="<?php the_sub_field('link_del_recurso') ?>" download="" class="recursos-desafio_item">
                        <div class="text">
                            <p><?php the_sub_field('nombre_del_recurso') ?></p>
                            <span class="">descargar</span>
                        </div>
                        <div class="img"><img src="" alt=""></div>
                    </a>
            <?php }
            } ?>
        </div>
    </div>
</section>