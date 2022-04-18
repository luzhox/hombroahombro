<div id="<?php the_sub_field('id_de_modal')?>" class="modal-location">
  <div class="overlay overlayLocation"></div>
  <div class="modal-location__content">
    <div class="close closeModalLocation">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15 0C6.72914 0 0 6.72914 0 15C0 23.2709 6.72914 30 15 30C23.2709 30 30 23.2709 30 15C30 6.72914 23.2709 0 15 0ZM15 28.75C7.4182 28.75 1.24998 22.5818 1.24998 15C1.24998 7.4182 7.4182 1.24998 15 1.24998C22.5818 1.24998 28.75 7.4182 28.75 15C28.75 22.5818 22.5818 28.75 15 28.75Z" fill="black"/>
      <path d="M21.0669 8.93312C20.8227 8.68896 20.4272 8.68896 20.1831 8.93312L15 14.1163L9.81689 8.93318C9.57273 8.68902 9.17722 8.68902 8.93312 8.93318C8.68896 9.17734 8.68896 9.57285 8.93312 9.81695L14.1162 15L8.93312 20.1831C8.68896 20.4273 8.68896 20.8228 8.93312 21.0669C9.05517 21.1889 9.21513 21.25 9.37503 21.25C9.53494 21.25 9.69484 21.1889 9.81695 21.0669L15 15.8838L20.1831 21.0669C20.3051 21.1889 20.4651 21.25 20.625 21.25C20.7849 21.25 20.9448 21.1889 21.0669 21.0669C21.311 20.8227 21.311 20.4272 21.0669 20.1831L15.8837 15L21.0668 9.81695C21.311 9.57279 21.311 9.17728 21.0669 8.93312Z" fill="black"/>
      </svg>
    </div>
    <div class="modal-location__container">
      <h3><?php the_sub_field('titulo')?></h3>
      <div class="modal-location__items">
    <?php if (have_rows('locations')) {while (have_rows('locations')) {the_row(); ?>
     <div class="modal-location__item">
     <?php
        $link = get_sub_field('imagen');
        if ($link) :
        ?>
      <div class="img"  style="background:url('<?php the_sub_field('imagen')?>')"></div>
      <?php endif; ?>

      <?php
        $link = get_sub_field('imagen');
        if (!$link) :
        ?>
      <div class="img"  ></div>
      <?php endif; ?>
       <div class="text"><?php the_sub_field('nombre_del_lugar')?></div>
     </div>
      <?php }} ?>
      </div>
    </div>
  </div>
</div>