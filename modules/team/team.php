<div class="team">
  <div class="container">
    <div class="team__title"><?php the_sub_field('title')?></div>
    <div class="team-carousel ">
      <div class="team-carousel__content owl-carousel owl-theme">


      <?php if (have_rows('team')) {
              while (have_rows('team')) {
                  the_row(); ?>
      <div class="team-carousel__item">
        <div class="team-carousel__item__img" style="background:url(<?php the_sub_field('img')?>)" title="<?php the_sub_field('job')?> - Hombro a Hombro">
        </div>
        <div class="team-carousel__item__text">
          <div class="team-carousel__item__text__title"><?php the_sub_field('title')?></div>
          <div class="team-carousel__item__text__job"><?php the_sub_field('job')?></div>
          <div class="team-carousel__item__text__bio"><?php the_sub_field('desc')?></div>
        </div>
      </div>
      <?php }} ?>
    </div>
    </div>
  </div>
</div>