<div class="our-story" style="background:url(<?php the_sub_field('imgBg')?>)">
<div class="overlay"></div>
  <div class="container our-story__content">
    <div class="text">
      <div class="our-story__title" data-aos="fade-up"><?php the_sub_field('title')?></div>
      <?php if (have_rows('story')) {
              while (have_rows('story')) {
                  the_row(); ?>
            <div  id="<?php the_sub_field('age')?>" data-aos="fade-up" class="our-story__text <?php if (get_sub_field('isActive')) : ?>  active <?php endif; ?>">
            <?php the_sub_field('text')?>
                  </div>
         <?php }} ?>
    </div>
    <div class="imgStory" data-aos="fade-up"  style="background:url('<?php the_sub_field('imgDefault')?>')"></div>
  </div>
  <div class="container our-story__ages">
  <?php if (have_rows('timeline')) {
              while (have_rows('timeline')) {
                  the_row(); ?>
                  <div class="our-story__age <?php if (get_sub_field('isActive')) : ?>active <?php endif; ?>" data-id="<?php the_sub_field('number')?>" data-img="<?php the_sub_field('imgStory')?>">
                  <?php the_sub_field('number')?>
                  </div>
                  <?php }} ?>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $('.our-story__age ').click(function(){
      $(this).addClass('active')
      $(this).siblings().removeClass('active')
      var imagen = $(this).data('img')
      var idItem= $(this).data('id')
      $('#'+idItem).addClass('active')
      $('#'+idItem).siblings().removeClass('active')
      $('.imgStory').css('background','url(' +imagen +')')
      $('.imgStory').addClass('active')
      setTimeout(function(){
        $('.imgStory').removeClass('active')

      },500)
    })

  })
</script>