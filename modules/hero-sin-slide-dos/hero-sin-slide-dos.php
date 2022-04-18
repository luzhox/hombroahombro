<section class="hero-principal hero-principal__two" >
  <div class="slider">

    <div class="slide" style="background:url(<?php the_sub_field('imagen_de_fondo')?>)">
    <div class="overlay"></div>
    <div class="container" data-aos="fade-up" data-aos-offset="100" >
        <h1 class="title"><?php the_sub_field('title')?></h1>
        <?php if(get_sub_field('hay_texto') ): ?>
          <div class="hero-principal__text"><?php the_sub_field('texto')?></div>
        <?php endif; ?>

        <div class="botones">
            <a href="<?php the_sub_field('url_del_boton_video')?>" class="btn btn-red video-preview"><?php the_sub_field('texto_del_boton_video')?></a>
            <a id="btnPrep" href="<?php the_sub_field('url_del_boton')?>" class="btn btn-white"><?php the_sub_field('texto_del_boton')?></a>

        </div>


      </div>
    </div>

  </div>



</section>

<script>


$ = jQuery.noConflict();


	document.addEventListener('DOMContentLoaded',function(){
			  if (window.matchMedia('(max-width: 768px)').matches) {
		  $('#btnPrep').attr('href','http://preparatevoluntario.hombroahombro.org.pe/login')
	  }
	})
    $(".video-preview").colorbox({iframe:true, transition:"fade",width:'80%', height:'90%'});

</script>