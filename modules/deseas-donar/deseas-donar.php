<section class="suscribir-donar">
<div class="container">

<h2 class="title"><?php the_sub_field('title')?></h2>
<div class="line"></div>
<p><?php the_sub_field('text')?></p>

<form action="">
<div class="input-field correo">
            <input type="text"  onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Correo electrónico</label>
          </div>
          <input type="submit" value="<?php the_sub_field('texto_boton')?>" class="btn btn-primary ">


</form>

</div>

</section>