<section class="razon-desafio">
    <div class="container">
        <h3><?php the_sub_field('subtitulo_superior') ?></h3>
        <?php the_sub_field('titulo_superior') ?>
        <div class="razon-desafio__container">
            <?php if (have_rows('razones')) {
                while (have_rows('razones')) {
                    the_row();  ?>
                    <div class="razon-desafio__item">
                        <div class="img">
                            <img src="<?php the_sub_field('imagen_de_razon') ?>" alt="">
                        </div>
                        <div class="text">
                            <p><?php the_sub_field('texto_de_razon') ?></p>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>