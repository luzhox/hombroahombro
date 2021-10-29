<section class="porque-me-importa" style="background-color:<?php the_sub_field('color')?>">
   
    <div class="container">
        <div class="contenido" data-aos="fade-up" data-aos-offset="100">
            <h2 class="title"><?php the_sub_field('title')?></h2>
            <div class="line"></div>
            <p><?php the_sub_field('texto')?></p>
            <?php if(get_sub_field('hay_boton') ): ?>
                <a id="unete" class="btn btn-red" ><?php the_sub_field('texto_del_boton')?></a>
            <?php endif; ?>
        </div><div class="img" data-aos="fade-up" data-aos-offset="100" style="background:url(<?php the_sub_field('imagen')?>)"></div>
    </div>

</section>