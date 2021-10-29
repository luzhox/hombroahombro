<div class="que-hacemos">
    <div class="container">
      <div class="que-hacemos__title"><?php the_sub_field('title')?></div>
      <div class="que-hacemos__slider">
      <?php if (have_rows('slider')) {
                while (have_rows('slider')) {
                    the_row();  ?>
                      <div class="que-hacemos__slider__item" style="background:url(<?php the_sub_field('urlImage')?>)">
                        <div class="que-hacemos__slider__item__title"><?php the_sub_field('title')?></div>
                        <div class="que-hacemos__slider__item__text"><?php the_sub_field('text')?></div>
                        <a class="que-hacemos__slider__item__button" href="<?php the_sub_field('url')?>">
                          <?php the_sub_field('btnText')?>
                        </a>
                      </div>
            <?php }
            } ?>
      </div>
    </div>

</div>