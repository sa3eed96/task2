<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Newsbit</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="wp-content/themes/theme/plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="wp-content/themes/theme/fonts/ionicons.css" rel="stylesheet">
	<link href="wp-content/themes/theme/style.css" rel="stylesheet">
    <?php wp_head(); ?>
	
	
</head>
<body <?php body_class(); ?>>
	
	<header>
		
		<div class="container">
			<a class="logo" href="<?php echo home_url(); ?>"><img src="wp-content/themes/theme/images/logo-black.png" alt="Logo"></a>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<?php wp_nav_menu([
				'theme_location' => 'headerNav',
				"menu_class"=> "main-menu",
				"menu_id"=>"main-menu",
				"container"=> '',
				'walker' => new Walker_Nav_Primary()
			])?>
			
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
