<div class="img-title">
  <div class="container">
    <div class="img-title__title">
      <?php the_sub_field('title')?>
    </div>
    <div class="img-title__img">
    <?php
$images = get_sub_field('brand');
if( $images ): ?>
        <?php foreach( $images as $image ): ?>
            <div class="img-title__img__item">
                <a href="<?php echo esc_url($image['caption']); ?>">
                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
            </div>
        <?php endforeach; ?>
<?php endif; ?>
    </div>
  </div>
</div>