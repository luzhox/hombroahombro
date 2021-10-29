<div class="partner">
  <div class="container">
    <div class="partner__title"><?php the_sub_field('title')?></div>
    <div class="partner__brands owl-carousel owl-theme">
    <?php if (have_rows('partner')) {
                while (have_rows('partner')) {
                    the_row(); ?>
      <div class="partner__brand">
        <?php $image = get_sub_field('brandImg');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

      </div>
      <?php }} ?>
    </div>
  </div>
</div>