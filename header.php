<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta name="google-site-verification" content="cmXC_4jm86FLs_UKqxxlFXcWcxIWMlis5wD5YB64YYw" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
	<title><?php wp_title(''); ?> <?php if (wp_title('', false)) {
																	echo ':';
																} ?> <?php bloginfo('name') ?></title>
	<meta name="theme-color" content="#d4035e" />
	<meta name="msapplication-navbutton-color" content="#d4035e" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175441723-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-175441723-1');
	</script>

</head>

<body <?php body_class(); ?>>
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

	<script>
		// Your web app's Firebase configuration
		var firebaseConfig = {
			apiKey: "AIzaSyCOy8W2wzPJ75ewqdWnJ6YMTcXIm3cPs0E",
			authDomain: "reto-hombro-a-hombro.firebaseapp.com",
			databaseURL: "https://reto-hombro-a-hombro.firebaseio.com",
			projectId: "reto-hombro-a-hombro",
			storageBucket: "reto-hombro-a-hombro.appspot.com",
			messagingSenderId: "951698561696",
			appId: "1:951698561696:web:36a2eeaecac2eef22f07c5"
		};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);
	</script>

	<div id="page">
		<header id="masthead" class="site-header" role="banner">
			<div class="overlay"></div>
			<div class="container">
				<div class="container-logo">
					<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
						<img id="logito" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
					</a>
				</div>
				<div class="sandwich">

					<a class="icon-menu" href="#"></a>
				</div>
				<div class="container-nav">
					<nav id="site-navegation" class="main-navegation" role="navegation">
						<?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
					</nav>
				</div>


			</div>
		</header>

		<div id="contenido">