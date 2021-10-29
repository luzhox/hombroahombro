<div class="our-proyects">
  <div class="container">
    <div class="our-proyects__text"><?php the_sub_field('text')?></div>
    <div class="our-proyects__content">
    <?php if (have_rows('projects')) {
                while (have_rows('projects')) {
                    the_row();  ?>
      <div class="our-proyects__item" >
      <div class="our-proyects__item__content" style="background:url(<?php the_sub_field('urlImage')?>)">
                      <a class="our-proyects__button" href="<?php the_sub_field('url')?>">
                      <i class="our-proyects__button__icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0496 0.220703C5.31364 0.220703 0.647095 5.01768 0.647095 10.9139C0.647095 16.8102 5.31364 21.6072 11.0496 21.6072C16.7855 21.6072 21.452 16.8102 21.452 10.9139C21.452 5.01768 16.7855 0.220703 11.0496 0.220703ZM11.0496 19.7366C6.31689 19.7366 2.46681 15.7788 2.46681 10.9139C2.46681 6.04903 6.31689 2.09124 11.0496 2.09124C15.782 2.09124 19.6323 6.04903 19.6323 10.9139C19.6323 15.7788 15.7822 19.7366 11.0496 19.7366Z" fill="white"/>
<path d="M25.0857 23.8243L18.4578 16.7095C18.1015 16.327 17.5244 16.327 17.1681 16.7095C16.8118 17.0917 16.8118 17.7117 17.1681 18.0939L23.796 25.2088C23.9742 25.4 24.2073 25.4957 24.4408 25.4957C24.6743 25.4957 24.9076 25.4 25.0857 25.2088C25.442 24.8266 25.442 24.2065 25.0857 23.8243Z" fill="white"/>
</svg></i>
                    </a>
                  </div>
         <div class="our-proyects__item__title"><?php the_sub_field('name')?></div>
      </div>
    <?php }} ?>
    </div>
  </div>
</div>