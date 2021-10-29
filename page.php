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
 <div class="float-modal">
  <div class="float-modal__text"><p>Prepara a tus conocidos ante un desastre de gran magnitud</p>
<p><a href="https://preparatevoluntario.hombroahombro.org.pe/login">Sé voluntario</a></p>
</div>
</div>
  <?php get_footer(); ?>
  </body>
</html>