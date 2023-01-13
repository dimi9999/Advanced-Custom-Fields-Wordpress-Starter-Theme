<?php
   // 1. Header
   ?>
<!DOCTYPE html>
<html lang="en" class="pen">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Rust Studio</title>
      <!-- FONT AWESOME AND ION ICONS -->
      <link href="https://unpkg.com/ionicons@4.2.6/dist/css/ionicons.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Catamaran:400,500,700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;700;900&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
      <?php wp_head();?>
   </head>
   <body>
      <!-- Header -->
      <header id="nav">
         <div class="container">
            <button class="navbar-toggler hidden-lg collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <div class="logo">
				 <a href="<?php echo get_option("siteurl"); ?>">
					<img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Logo">
					<span>Rust | Studio</span>
				 </a>
            </div>
            <!-- Seacrh form start -->
            <div class="searchbox">
               <form method="post" action="#">
                  <input type="text" placeholder="Search">
                  <button class="fa fa-search"></button>
               </form>
            </div>
            <!-- Search form end -->
            <!-- social icons -->
            <div class="social-icons float-right">
               <a href="https://www.facebook.com/RustCreativeStudio/?ref=py_c" target="_blank"><i class="fab fa-facebook"></i></a>
               <a href="https://www.instagram.com/ruststudio_/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
			
			<!-- 2. Main Menu -->
            <!-- navbar (use bootstrap) start  -->
            <div class="navbar-collapse collapse" role="navigation" id="navbarNavDropdown" aria-expanded="false" style="height: 1px;">
			
			 <?php wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					'menu_id' =>  'topmenu',
					'container' => 'ul',
					'menu_class' => 'navbar-nav',
					'addmenu_class' => 'navbar-nav',
					
					//	'theme_location'  => 'top-menu',
					//'menu'            => 'topnav',
					//'container'       => 'div', 
					//'container_class' => 'collapse navbar-collapse', 
					//'container_id'    => 'navbarCollapse',
					//'menu_class'      => 'menu', 
					//'echo'            => true,
					//'fallback_cb'     => 'wp_page_menu',
					//'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
					//'depth'           => 0
				)
			 );?>
			 
			<!--
            <ul id="topmenu" class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="story.html">Our Story</a></li>
                  <li class="nav-item"><a class="nav-link" href="about.html">Meet the team</a></li>
                  <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                  
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="portfolio.html">portfolio.html</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </li>
                     
                  <li class="nav-item"><a class="nav-link" href="terms.html">Terms</a></li>
                  <li class="nav-item"><a class="nav-link" href="contact.html">Contact us</a></li>
               </ul>
			-->
                
            </div>
            <!-- navbar (use bootstrap) end  -->
            <div class="clearfix"></div>
         </div>
      </header>
      <!-- end of header -->