<div class="our-directory">
  <div class="container">
    <div class="our-directory__title"><?php the_sub_field('title')?></div>
    <div class="our-directory__content">
    <?php if (have_rows('directory')) {
              while (have_rows('directory')) {
                  the_row(); ?>
      <div class="our-directory__item">
                <div class="our-directory__item__img <?php if(get_sub_field('urlProfile') ): ?> not-hover<?php endif; ?>" style="background:url(<?php the_sub_field('img')?>)">
                <?php if(get_sub_field('urlProfile') ): ?>
                    <a ><?php the_sub_field('urlProfile')?></a>
                  <?php endif; ?>
                </div>
                <div class="our-directory__item__text">
                  <div class="our-directory__item__text__title"><?php the_sub_field('name')?></div>
                  <div class="our-directory__item__text__desc"><?php the_sub_field('job')?></div>
                </div>
      </div>
      <?php }} ?>
    </div>
  </div>
</div>