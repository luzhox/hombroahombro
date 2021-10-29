

<section class="hero-principal" >
  <div class=" slider-pdp owl-carousel owl-theme ">
  <?php 

if( have_rows('heroprincipal') ) {
    while( have_rows('heroprincipal') ) { the_row();  ?>
    
    <div class="slide" style="background:url(<?php the_sub_field('imagen_de_fondo')?>)">
        
        <div class="overlay"></div>
        <div class="container" data-aos="fade-up" data-aos-offset="100" >
            <h1 class="title"><?php the_sub_field('titulo')?></h1>
            <p><?php the_sub_field('descripcion')?></p>
        </div>
    </div>

    <?php }} ?>  


  </div>



</section>




<style> 


.owl-theme .owl-dots, .owl-theme .owl-nav{

position: absolute;
bottom: -20px;
left:0;
right:0;
}

@media only screen and (min-width:700px){

  .owl-theme .owl-dots, .owl-theme .owl-nav{

right: 10px;
bottom: 0px;
}
}
</style>