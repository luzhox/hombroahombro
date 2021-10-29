<div class="values-hah <?php the_sub_field('customclass')?>">
  <div class="container">
      <div class="values-hah__container">
        <?php if (have_rows('values')) {
              while (have_rows('values')) {
                  the_row(); ?>
              <div class="values-hah__item">
                <div class="values-hah__item__img">
                <?php $image = get_sub_field('img');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
                <div class="values-hah__item__content">
                  <div class="values-hah__item__value">
                    <p class="number"><span><?php the_sub_field('textComp')?></span><span class="count"><?php the_sub_field('value')?></span></p>
                  </div>
                  <div class="values-hah__item__text">
                  <p><?php the_sub_field('textValue')?></p>
                  </div>
                </div>
              </div>
        <?php }} ?>
      </div>
  </div>
</div>