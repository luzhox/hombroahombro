<?php

    get_header(); ?>
  <body <?php body_class(); ?>>
  <?php
  while ( have_posts() ) { the_post();

    // Check if ACF is enabled and the modules field exists
    if ( function_exists('get_field') && get_field('modules') !== null ) {

      the_modules_loop();

    } else {

      the_module('post');

    }

  }
  ?>
  <style>
    @media only screen and (max-width:770px){
      body{
        margin-top:90px;
      }
    }
  </style>
	   <div class="float-modal-hide">
    Sé voluntario
  </div>
 <div class="float-modal">
	  <div class="float-modal__close">
    <img src="https://hombroahombro.org.pe/wp-content/uploads/2021/10/cancel.png" alt="">
  </div>
  <div class="float-modal__text"><p>Prepara a tus conocidos ante un desastre de gran magnitud</p>
<p><a id="urlPreparate" href="https://preparatevoluntario.hombroahombro.org.pe/login" target="_blank">Sé voluntario</a></p>
</div>
</div>
<script>
  document.addEventListener('DOMContentLoaded',function(){
    var modal = $('.float-modal');
    var close = $('.float-modal__close');
    close.click(function(){
      modal.addClass('hiddenModal');
      $('.float-modal-hide').addClass('active')
    })
    $('.float-modal-hide').click(function(){
      modal.removeClass('hiddenModal');
      $(this).removeClass('active')
    })
	  if (window.matchMedia("(min-width: 1024px)").matches) {
 	$('#urlPreparate').attr('href','https://preparatevoluntario.hombroahombro.org.pe/login')

} else {
 	$('#urlPreparate').attr('href','http://preparatevoluntario.hombroahombro.org.pe/login')
}
  })
</script>
  <?php get_footer(); ?>
  </body>
</html>