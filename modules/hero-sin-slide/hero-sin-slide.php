

<section class="hero-principal noticiasHero" >
  <div class="slider   ">

    <div class="slide" style="background:url(<?php the_sub_field('imagen_de_fondo')?>)">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-up" data-aos-offset="100" >
        <h1 class="title"><?php the_sub_field('title')?></h1>
        <?php if(get_sub_field('hay_texto') ): ?>
        <div class="hero-principal__text"><?php the_sub_field('texto')?></div>
        <?php endif; ?>

        <?php if(get_sub_field('hay_boton') ): ?>
        <div class="botones">
            <a href="<?php the_sub_field('url_del_boton')?>" class="btn btn-red"><?php the_sub_field('texto_del_boton')?></a>
            <?php
            $link = get_sub_field('twoLink');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

          </div>
        <?php endif; ?>

      </div>
    </div>

  </div>



</section>

