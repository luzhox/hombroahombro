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
			<div class="container">
			<div class="post body-noticias">
				<div class="textos ">
					<h2 data-aos="fade-up" data-aos-offset="100"><?php the_title();?></h2>
					<?php $autor = get_field('autor'); if( $autor ): ?>
						<div class="profile" data-aos="fade-up" data-aos-offset="100">
							<div class="img" style="background:url(<?php echo $autor['foto_del_autor']?>); background-size:cover;"></div>
							<p>Escrito por: <?php echo $autor['nombre_del_autor']?> </p>
						</div>
					<?php endif; ?>
					<div class="texto-articulo" data-aos="fade-up" data-aos-offset="100"><?php the_content();?></div>
				</div>
			</div>

			
			</div></div>
			<?php endwhile; ?>
<?php get_footer(); ?>
