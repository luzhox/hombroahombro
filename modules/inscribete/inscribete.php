<section class="incripcion-hombro">
  <div class="incripcion-hombro__header">
    <div class="container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-promo.svg" alt="">
      <p>Formulario de inscripción </p>
    </div>
  </div>
  <div class="incripcion-hombro__content">
    <div class="container">
      <div class="incripcion-hombro__img">
        <div class="img" style="background:url(<?php the_sub_field('imagen') ?>)">
        </div>
        <div class="text">
          <a href="https://hombroahombro.org.pe/reto/" class="return">
            <span class="ico-return"></span>Regresar
          </a>
          <h3>Propón un proyecto para mejorar el estado de crisis y podrás ganar <strong>$5,000</strong></h3>
        </div>
      </div>
      <div class="incripcion-hombro__form">
        <h4>Inscribe a tu equipo y participa</h4>
        <?php the_sub_field('formulario') ?>
      </div>
    </div>
  </div>
</section>