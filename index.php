<?php
    
    get_header(); ?>
  <body <?php body_class(); ?>>
  <?php the_field('my_blog_pe') ?>

				 <?php $args = array(
				    'posts_per_page'=> 1,
            'orderby'=> 'date',
				    'order'=>'DESC'); ?>

				  <?php $family = new WP_Query($args);?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

				  <?php while($family->have_posts()): $family->the_post();?>
  <div class="articulo-principal"  style="background-image:url(<?php echo $url; ?>);">
 <div class="overlay"></div> 
  <div class="container">
	  <div class="texto" data-aos="fade-right" >
		<h1  ><?php the_title(); ?></h1>
		<p class="hide-on-small-only"><?php excerpt('25');?></p>
	    <a href="<?php the_permalink()?>">Leer artículo</a>
	  </div>
	  </div>
  </div>

  <?php endwhile; wp_reset_postdata(); ?>

  <section id="articulos" >
  <div class="container">
  <h2 data-aos="fade-up" data-aos-offset="100">Articulos recientes</h2>
  
					
			<?php while(have_posts() ): the_post(); ?>
				<?php
				  global $post;
				  $thumbID = get_post_thumbnail_id( $post->ID );
				  $imgDestacada = wp_get_attachment_url( $thumbID );

				  ?>
			<div class="articles row" data-aos="fade-up" data-aos-offset="100">
				<div class="imagen-article" style="background:url(<?php echo $imgDestacada;?>);"></div>
				<div class="textos">
					<div class="detalles">
						<div class="date"><span><?php the_category()?> </span><?php echo get_the_date(); ?></div>
						<span class="icon-profile"></span>
					</div>
					<h2><?php the_title();?></h2>
					<?php excerpt('15');?>
					<a href="<?php the_permalink()?>"> Leer Más </a>
				</div>
			</div>
			<?php endwhile; ?>
			</div>
			</div></section>

  <?php get_footer(); ?>
  </body>
</html>