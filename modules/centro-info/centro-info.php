<div class="centro-info">
  <div class="container">
    <div class="centro-info__text"><?php the_sub_field('text')?></div>
    <div class="centro-info__content">
    <?php if (have_rows('center')) {
                while (have_rows('center')) {
                    the_row();  ?>
      <div class="centro-info__item" >
                  <div class="centro-info__item__content" style="background:url(<?php the_sub_field('urlImage')?>)">
                      <a class="centro-info__button" href="<?php the_sub_field('url')?>">IR A WEB</a>
                  </div>
                  <div class="centro-info__item__title"><?php the_sub_field('name')?></div>
      </div>
    <?php }} ?>
    </div>
  </div>
</div>