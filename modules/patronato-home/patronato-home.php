<div class="patronato">
  <div class="container">
    <div class="patronato__title"><?php the_sub_field('title')?></div>
    <div class="patronato__brands owl-carousel owl-theme">
    <?php if (have_rows('patronato')) {
                while (have_rows('patronato')) {
                    the_row(); ?>
      <div class="patronato__brand">
        <?php $image = get_sub_field('brandImg');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

      </div>
      <?php }} ?>
    </div>
  </div>
</div>