<section class="story">
   <div class="container">
    <div class="line-middle"></div>
    <?php if( have_rows('historia') ) {
            while( have_rows('historia') ) { the_row();  ?>

<div class="story" data-aos="fade-up" >
       <div class="img" style="background:url('<?php the_sub_field('imagen')?>">
            <span><?php the_sub_field('fecha')?></span>
           <h3><?php the_sub_field('titulo')?></h3>
       </div>
       <div class="text">
           <p><?php the_sub_field('texto')?></p>
       </div>
   </div>


<?php }} ?>  
 


   </div>
</section>