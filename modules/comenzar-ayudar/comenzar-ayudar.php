<section class="comenzar-ayudar">
    <div class="container">
        <form action="">
        <h2 class="title"  data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('title')?></h2>
        <p  data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('texto')?></p>
        <div class="group"  data-aos="fade-up" data-aos-offset="100">
            <div class="input-field nombre">
                <input type="text"  onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
                <label for="">Nombre</label>
            </div>
            <div class="input-field correo">
                    <input type="text"  onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
                    <label for="">Correo electrónico</label>
            </div>
          
            </div>
            <div class="group"  data-aos="fade-up" data-aos-offset="100">
            <div class="input-field celular">
                    <input type="text"  onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
                    <label for="">Celular</label>
            </div>
            <div class="input-field empresa">
                    <input type="text"  onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
                    <label for="">Empresa</label>
            </div>

           
            
            </div>
            <div class="input-field mensaje">
                    <textarea type="text"  onfocus="abrirform(this)" onblur="cerrarform(this)" ></textarea>
                    <label for="">Mensaje</label>
            </div>
            <input type="submit" value="<?php the_sub_field('texto_del_boton')?>" class="btn btn-primary ">

        </form>
        <div class="imagen" style="background:url(<?php the_sub_field('imagen')?>)"></div>
    </div>
</section>