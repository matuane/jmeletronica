<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">


	    <title><?php bloginfo('name'); ?></title>
	    <!-- Header Wordpress -->
			<?php wp_head(); ?>
		<!-- Fecha Header Wordpress -->
	</head>
	<body>
	    <header>
	    		<div class="navbar navbar-light">

	    			<div class="container-fluid">
	    				<a class="navbar-brand" href="#">
					      	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHoVcTZpSTFA2e3vFVPNXlLrRQFGD0TvbzTw&usqp=CAU" alt="" width="100" height="100" class="d-inline-block align-top">
					      	<?php bloginfo('name'); ?>
					    </a>
	    			</div>
	    		
		    		<div class="navbar_menu">
		    			<nav>
		    				<li>Menu</li>
		    				<li>Menu</li>
		    				<li>Menu</li>
		    			</nav>
		    		</div>
	    		</div>
	    </header>
