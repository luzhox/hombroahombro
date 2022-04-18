<div class="galeria-project <?php the_sub_field('margin')?>" >
  <div class="container">
    <div class="galeria-project__cont">
    <?php
$images = get_sub_field('brand');
if( $images ): ?>
        <?php foreach( $images as $image ): ?>
            <div class="galeria-project__item" style="background:url(<?php echo esc_url($image['url']); ?>)">
                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>">
                </a>
            </div>
        <?php endforeach; ?>
<?php endif; ?>
    </div>
  </div>
</div>