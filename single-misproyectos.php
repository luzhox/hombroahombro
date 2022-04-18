<?php get_header(); ?>
<style>
#menu-item-172{

	border-bottom:1px solid #e4a513!important;
    padding-bottom: 5px;
}

</style>
<div id="articulo" >
			<?php while(have_posts() ): the_post(); ?>
				<?php global $post;
				  $thumbID = get_post_thumbnail_id( $post->ID );
				  $imgDestacada = wp_get_attachment_url( $thumbID );?>
			<div class="imagen" data-aos="fade-up" data-aos-offset="100" style="background:url(<?php echo $imgDestacada;?>);" ></div>

		</div>
			<?php endwhile; ?>
			<?php
  while ( have_posts() ) { the_post();


      the_modules_loop();



  }
  ?>
<?php get_footer(); ?>
