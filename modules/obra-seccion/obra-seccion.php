<div class="obra-seccion">
  <div class="container">
    <div class="obra-seccion__text">
      <h3><?php the_sub_field('textTitle')?></h3>
      <a href="<?php the_sub_field('btnUrl')?>" class="btn-red"><?php the_sub_field('btnText')?></a>
    </div>
    <div class="obra-seccion__img" style="background:url(<?php the_sub_field('imgOne')?>)">
      <div class="obra-seccion__img__item" ></div>
    </div>
    <div class="obra-seccion__imgTwo">
      <div class="obra-seccion__imgTwo__item" style="background:url(<?php the_sub_field('imgTwo')?>)"></div>
      <div class="obra-seccion__imgTwo__item" style="background:url(<?php the_sub_field('imgThree')?>)"></div>
    </div>
  </div>
</div>