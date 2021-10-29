<section class="porque-contribuir">
    <div class="fondo" data-aos="fade-up" data-aos-offset="100"></div>
    <div class="imagen" data-aos="fade-left" data-aos-offset="100" style="background:url(<?php the_sub_field('imagen')?>)"></div>
    <div class="container">
        <div class="contenido" data-aos="fade-up" data-aos-offset="100">
            <h2 class="title"><?php the_sub_field('title')?></h2>
            <div class="line"></div>
            <p><?php the_sub_field('texto')?></p>
            <a id="btn-emp" class="btn btn-red" ><?php the_sub_field('texto_del_boton')?></a>
        </div>
    </div>

</section>


<div class="formulario-empresa">
    <div class="overlay-contacto"></div>
    <div class="form">
        <div class="texto">
            <h2>Une a tu Empresa</h2>
            <div class="line"></div>
            <p>Llena los campos del formulario y pronto estaremos en contacto.</p>

        </div>
    			<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/';}"></iframe>

<form action="https://docs.google.com/forms/d/e/1FAIpQLSfZE6Bh6w0MW5Y7xVvRTbc3Px7pP_CWlFkorkd1xacnVJ-piA/formResponse" method="POST" id="ss-form" target="hidden_iframe"  onsubmit="submitted=true;">
    <div id="cerrar-emp" class="icon-close"></div>

    <div class="input-field nombres">
            <input type="text"  name="entry.185415321" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Nombre de Empresa</label>
          </div>

          <div class="input-field apellidos">
            <input type="email" name="entry.1072161419" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Correo corporativo</label>
          </div>

          <div class="input-field correo">
            <input type="number"  name="entry.27599370" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Celular</label>
            <span class="show-error"><b>!</b>Su celular debe contener 9 digitos</span>
          </div>

          <div class="input-field correo">
            <input type="text"  name="entry.110076052" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Cargo</label>
            <span class="show-error"><b>!</b>Correo inválido</span>
          </div>
          <input type="submit" value="ENVIAR" class="btn btn-primary ">

    </form>

    </div>
    
</div>