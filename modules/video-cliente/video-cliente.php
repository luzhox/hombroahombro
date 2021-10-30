<div class="video-cliente <?php the_sub_field('isBlack')?>">
    <div class="container">
        <div class="video-cliente__title"><?php the_sub_field('titulo_de_la_seccion')?></div>
        <div class="video-cliente__content">
        <?php if (!get_sub_field('isYoutube')) {?>
            <video class="video-cliente__mov" poster="<?php the_sub_field('imgVideo')?>" controls>
            <source src="<?php the_sub_field('video')?>" type="video/mp4">
            </video>
        <?php }?>

        <?php if (get_sub_field('isYoutube')) {?>
            <iframe src="https://www.youtube.com/embed/<?php the_sub_field('urlYoutube')?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php }?>
        </div>
    </div>
</div>