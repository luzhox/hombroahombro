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
			<div class="post">
				<div class="textos">
					<h1 data-aos="fade-up" data-aos-offset="100"><?php the_title();?></h1>
					<div class="texto-articulo" data-aos="fade-up" data-aos-offset="100"><?php the_content();?></div>
				</div>
			</div>

			<div class="aside">
			<h3 class="title">Artículos Recientes</h3>
			<?php $noticia = get_field('articulo_destacados');
			    if( $noticia ): ?>
					<a href="<?php echo $noticia['url']?>">
					<div class="noticia-referida" data-aos="fade-up" data-aos-offset="100" style="background:url(<?php echo $noticia['imagen']?>)">
					<p><?php echo $noticia['titulo']?></p>
					<div class="overlay"></div>
					<p class="btn-white" href="<?php echo $noticia['url']?>">Ver más</p>
					</div>
				</a>
				<?php endif; ?>
			<div class="ultimasnoticias">
				<?php $args = array(
					'posts_per_page'=> 3,
            		'orderby'=> 'date',
				    'order'=>'DESC'); ?>
				<?php $family = new WP_Query($args);?>
          		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
				  <?php while($family->have_posts()): $family->the_post();?>
					<div class="noticia" data-aos="fade-up" data-aos-offset="100">
						<div class="texto-noticia">
							<p><?php excerpt('10');?></p>
							<a href="<?php the_permalink()?>">Ver más</a>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
