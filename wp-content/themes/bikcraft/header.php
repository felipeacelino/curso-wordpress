<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="Bikcraft - Bicicletas Personalizadas"/>
		<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
		<meta property="og:url" content="http://bikcraft.com"/>
		<meta property="og:image" content="http://bikcraft.com/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.custom.45655.js"></script>
        
        <!-- Início WordPress Header -->
        <?php wp_head(); ?>
        <!-- Fim WordPress Header -->
	</head>
	<body>

		<header class="header">
			<div class="container">
				<a href="/curso-wordpress/" class="grid-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bikcraft.png" alt="Bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<ul>
						<li><a href="/curso-wordpress/sobre">Sobre</a></li>
						<li><a href="/curso-wordpress/produtos">Produtos</a></li>
						<li><a href="/curso-wordpress/portfolio">Portfólio</a></li>
						<li><a href="/curso-wordpress/contato">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>