<div id="contactanos"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contacto.png" alt=""><a >Contáctanos</a></div>

<div class="formulario-flotante">
    <div class="overlay-contacto"></div>
    <div class="form">
        <div class="texto">
            <h2>Contáctanos</h2>
            <div class="line"></div>
            <p>Completa los campos del formulario y pronto estaremos en contacto contigo.</p>
            <div class="otrosdatos">
              <p><b>Encuéntranos en:</b></p>
              <p>Av. El Derby 254, Piso 25, Surco, Lima.</p>
              <p>Teléfono: (01) 710-6875</p>
            </div>
        </div>
   		<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/';}"></iframe>

<form action="https://docs.google.com/forms/d/e/1FAIpQLSerOJsi-145v_pTLbFpoecc2m1-ER4ChLFeBHcJ4ir4icgjMQ/formResponse" method="POST" id="ss-form" target="hidden_iframe"  onsubmit="submitted=true;">
    <div id="cerrar" class="icon-close"></div>
  <div class="groupform">
    <div class="input-field nombres">
            <input type="text"  name="entry.2045107730" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Nombres</label>
          </div>

          <div class="input-field apellidos">
            <input type="text"  name="entry.345554480" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Apellidos</label>
          </div>
          </div>
          <div class="groupform">

          <div class="input-field celular">
            <input type="number"  name="entry.678846725" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Celular</label>
            <span class="show-error"><b>!</b>Su celular debe contener 9 digitos</span>
          </div>

          <div class="input-field correo">
            <input type="email" name="entry.839709679" onfocus="abrirform(this)" onblur="cerrarform(this)" required="">
            <label for="">Correo</label>
            <span class="show-error"><b>!</b>Correo inválido</span>
          </div>
          </div>

          <div class="input-field mensaje">
            <textarea type="text" name="entry.309081174" onfocus="abrirform(this)" onblur="cerrarform(this)" required=""></textarea>
            <label for="">Mensaje</label>
            <span class="show-error"><b>!</b>Correo inválido</span>
          </div>
          <input type="submit" value="ENVIAR" class="btn btn-primary ">

    </form>

    </div>
    
</div>

