<div class="fullvideo">
  <div class="fullvideo__overlay">
    <button class="fullvideo__overlay__button" >
      <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M21.7604 10.9305L6.04971 1.2462C4.91308 0.546443 3.53887 0.51735 2.37361 1.16838C1.20835 1.8193 0.512695 3.00492 0.512695 4.33965V23.6201C0.512695 25.6383 2.13883 27.289 4.13747 27.2999C4.14293 27.2999 4.14838 27.3 4.15373 27.3C4.77832 27.2999 5.42918 27.1042 6.03709 26.7332C6.52612 26.4348 6.68069 25.7965 6.38232 25.3076C6.08395 24.8185 5.44555 24.664 4.95667 24.9623C4.67233 25.1357 4.39464 25.2255 4.14864 25.2254C3.39454 25.2213 2.58714 24.5753 2.58714 23.6202V4.3397C2.58714 3.76713 2.88556 3.25866 3.38534 2.97941C3.88519 2.70016 4.4746 2.71263 4.96155 3.01246L20.6723 12.6968C21.1445 12.9875 21.4147 13.4723 21.4135 14.0268C21.4124 14.5813 21.1402 15.065 20.6654 15.3548L9.30651 22.3096C8.81794 22.6088 8.66436 23.2474 8.96351 23.7359C9.26261 24.2244 9.90116 24.378 10.3897 24.0789L21.7473 17.1248C22.8347 16.4614 23.4855 15.305 23.4881 14.031C23.4907 12.7572 22.8446 11.598 21.7604 10.9305Z" fill="white"/>
      </svg>
    </button>
  </div>
  <div class="fullvideo__video">
        <video class="fullvideo__video-player" data-url="<?php the_sub_field('videoPoster') ?>" poster="<?php the_sub_field('videoPoster') ?>" pause loop playsinline>
              <source src="<?php the_sub_field('videoUrl') ?>" type="video/mp4">
        </video>
  </div>
</div>

<script >
document.addEventListener('DOMContentLoaded',function(){
  const video = $(this).parent().siblings().find('.fullvideo__video-player');
  const videoCont= $('.fullvideo__video')
  const videoButton = $('.fullvideo__overlay__button');
  const videoButtonOverlay = $(this).parent();

  videoButton.click(function(){
    $(this).parent().siblings().find('.fullvideo__video-player').trigger('play');
     $(this).parent().fadeOut();
  })
  videoCont.click(function(){
    $(this).find('.fullvideo__video-player').trigger('pause');
    $(this).siblings().fadeIn();
  })




  })
</script>