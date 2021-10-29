<div class="img-title">
  <div class="container">
    <div class="img-title__title">
      <?php the_sub_field('title')?>
    </div>
    <div class="img-title__img">
      <?php $image = get_sub_field('img');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
  </div>
</div>