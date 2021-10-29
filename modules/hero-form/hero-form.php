

<section class="hero-principal" >
  <div class="slider   ">

    <div class="slide" style="background:url(<?php the_sub_field('imagen_de_fondo')?>)">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-up" data-aos-offset="100" >
        <h1 class="title"><?php the_sub_field('title')?></h1>

        <?php the_sub_field('texto')?>


        <div class="botones">
        <?php $btn = get_sub_field('texto_del_boton');
                    if( !empty( $btn ) ): ?>
            <a id="btn-hero-atencion" style="cursor: pointer;;" class="btn btn-red"><?php the_sub_field('texto_del_boton')?></a>
            <?php endif; ?>
        </div>

      </div>
    </div>

  </div>



</section>

