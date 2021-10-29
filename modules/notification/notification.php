<div class="notification-flotante">
    <div class="overlay"></div>
    <div class="modal">
        <div class="cancelado ">X</div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
        <p><?php the_sub_field('texto')?></p>
        <a id="descubre" class="btn btn-red">¡Descubrir!</a>
    </div>
    
</div>

<script>
$ = jQuery.noConflict();

$('.cancelado').click(function(){

$('.notification-flotante').fadeOut();

})

$('#descubre').click(function(){

$('.notification-flotante').fadeOut();

})

</script>