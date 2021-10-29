<section class="empresas">
    <div class="container">
        <h2 class="title">
        <?php the_sub_field('titulo_de_la_seccion')?>
        </h2>
        <div class="line"></div>

        <div class="contenedor-directorio" style="display:none;">
            <h4 class="title">DIRECTORIO</h4>
            <?php $galeria2 = get_sub_field('galeria_directorio');

            if( $galeria2 ): ?>
            <div class="slide-directorio owl-carousel owl-theme">
            <?php foreach( $galeria2 as $galeria2directorio ): ?>
                <div class="slide">
                    <img src="<?php echo  $galeria2directorio['url'] ?>" alt="">
                </div>
            <?php endforeach; ?>

            </div>
            <?php endif; ?>

        </div>

        <div class="contenedor-patronato">
            <h4 class="title">PATRONATO</h4>
            <?php $galeria3 = get_sub_field('galeria_patronato');
            if( $galeria3 ): ?>

            <div class="slide-patronato owl-carousel owl-theme">
            <?php foreach( $galeria3 as $galeria3patronato ): ?>
                <div class="slide">
                    <img src="<?php echo  $galeria3patronato['url'] ?>" alt=""> 
                </div>
            <?php endforeach; ?>

                </div>
                <?php endif; ?>

        </div>
    </div>
</section>