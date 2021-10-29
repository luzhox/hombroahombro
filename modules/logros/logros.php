<section class="logros" style="background-color:<?php the_sub_field('color_de_fondo')?>">
    <h2 class="title" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('titulo_de_seccion')?></h2>
    <div class="line"></div>
    <div class="container">
    <div class="contenedor-de-logros">
    <?php if( have_rows('logros') ) {
            while( have_rows('logros') ) { the_row();  ?>
            <div class="logro" data-aos="fade-up" data-aos-offset="100">
                <div class="icon">
                <img src="<?php the_sub_field('icono')?>" alt=""></div>
                <div class="text">
                    <h3 >+<span class="count"><?php the_sub_field('cantidad')?></span></h3>
                    <p><?php the_sub_field('descripcion')?></p>
                </div>
            </div>
        <?php }} ?>  
    </div>
    </div>
    </section>


    <script type="text/javascript">

$ = jQuery.noConflict();

$('.contenedor-de-logros').one('inview', function (event, visible) {
  if (visible == true) {
    


$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});




$('.countr').each(function () {
    $(this).prop('Counter',2016).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});




  } 
});</script>