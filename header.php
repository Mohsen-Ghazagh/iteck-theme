<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="css/bootstrap-mega-menu.min.css" />
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.cdnpkg.com/jquery/3.2.1/jquery.min.js"></script>


	
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo time(); ?>">
	
</head>
<body <?php body_class(); ?>>

	<header>
			

		<div class="navbar navbar-expand-lg navbar-dark container mt-3">
                <div class="col-2 text-start">
                    <a href="C:/Users/Webtinus/Desktop/iteck/index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_home.png" width="60" height="auto" alt="A+ Esthetic">
                    </a>
                 </div>

            <!-- bergur menu-->
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>

            <!-- Main Menu -->
                <div class="collapse navbar-collapse navbar-nav ms-auto" id="navbarNav">
           
                      <?php wp_nav_menu(array('theme_location' => 'header_page', 'menu_class' => 'navbar-nav ms-auto')); ?>

                 <!-- Contact Button (Visible in Mobile) -->
                        <div class="d-lg-none mt-3 text-center">
                             <a href="#" class="contact-btn">JETZT KONTAKTIEREN</a>
                        </div>
                </div>


             <!-- the black btn only for desktop-->
                 <div class="col-3 text-end d-none d-lg-block">
                     <a href="#" class="contact-btn">JETZT KONTAKTIEREN</a>
                 </div>
        </div>


			
			
	</header>

