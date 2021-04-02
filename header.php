<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel = "preconnect" href = "https://fonts.gstatic.com">
		<link href = "https://fonts.googleapis.com/css2? family = Montserrat: wght @ 400; 700 & family = Roboto: wght @ 400; 700 & display = swap "rel =" stylesheet ">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">


	    <title><?php bloginfo('name'); ?></title>
	    <!-- Header Wordpress -->
			<?php wp_head(); ?>
		<!-- Fecha Header Wordpress -->
	</head>
	<body>
	    <header class="header">
	    		<img src="https://i.pinimg.com/originals/c6/5b/2e/c65b2e78e7e55840c3ed80f2782184a8.jpg">
	    		<div class="navbar-fixed">
	    		<nav class="navbar_jm navbar navbar-expand-lg navbar-light">
					  	<a href="http://localhost/jm/" class="navbar-brand brand-logo">
		                    <img class="logo-navbar" src="<?php the_field('imagem_logo')?>">
		                    <span class="logo-title"><?php 	bloginfo('name') ?></span>
		                </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="navbar-toggler-icon"></span>
							  </button>
							  <div class="navbar_menu collapse navbar-collapse" id="navbarNav">
							    <ul class="navbar-nav">
							      <li class="nav-item active">
							        <a class="" href="http://localhost/jm/">Home</a>
							      </li>
							      <li class="nav-item">
							        <a class="" href="#">Contatos</a>
							      </li>
							      <li class="nav-item">
							        <a class="" href="http://localhost/jm/produto/">Produtos</a>
							      </li>
							    </ul>
							  </div>
					</nav>
	    </header>
