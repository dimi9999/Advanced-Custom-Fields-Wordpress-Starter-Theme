<?php
// Footer
?>

<!-- Owl Carousel - Brands -->
<?php $instagramheader = get_field('instagram_header'); ?>
<?php $instagramcarousel = get_field('instagramcarousel','option'); ?>
<?php if($instagramcarousel): ?>
<section id="partners" class="section bg-shell">
 <div class="container align-center">
	<!-- SECTION HEADER -->
	<div class="section-header">
	   <h2 class="section-header">Us on Instagram</h2>
	</div>
	<!-- SECTION CONTENT -->
	<div class="section-content">
	   <!-- owl carousel -->
	   <div class="owl-carousel">
		 <?php while( have_rows('instagramcarousel','option') ): the_row(); 
			$instagramtitle	= get_sub_field('instagramtitle','option');
			$instagramlink	= get_sub_field('instagramlink','option');
			$instagramimage	= get_sub_field('instagramimage','option');
		 ?>
		  <div class="item">
			  <a href="<?php echo $instagramlink ?>">
				<img src="<?php echo $instagramimage ?>" alt="<?php echo $instagramtitle ?>" />
			  </a>
		  </div>
			  
		  <?php endwhile ?>	
		  <!--
			 <div class="item"><img alt="logos" src="<?php bloginfo('template_directory');?>/img/brands/Bridgestone-1.png"></div>
			 <div class="item"><img alt="logos" src="<?php bloginfo('template_directory');?>/img/brands/Nestle-black.png"></div>
			 <div class="item"><img alt="logos" src="<?php bloginfo('template_directory');?>/img/brands/Robinsons-Land-Corp-1.png"></div>
			 <div class="item"><img alt="logos" src="<?php bloginfo('template_directory');?>/img/brands/Manila-Ocean-Park-1.png"></div>
			 <div class="item"><img alt="logos" src="<?php bloginfo('template_directory');?>/img/brands/Robinsons-Land-Corp-1.png"></div>
			 -->
			 <!--
			 <div class="item"><a href="https://www.instagram.com/ruststudio_/?hl=en"><img src="<?php bloginfo('template_directory');?>/img/gallery/img1.jpg" alt="img1" /></a></div>-->
		  
		  <div class="clear"></div>
	   </div>
	</div>
 </div>
</section>
<?php endif ?>

 
<?php $footersocials = get_field('footersocials','option'); ?>
<?php $footer_socials = get_field('footer_socials','option'); ?>
<?php $footer_address = get_field('footer_address','option'); ?>
<?php $footer_phone = get_field('footer_phone','option'); ?>
<?php $footer_email = get_field('footer_email','option'); ?>
    
<footer id="footer">
   <div class="footer-container MainSiteContainer">
      <div class="row">
         <div class="col-md-5 footer-col">
            <div class="logo">
               <span>
               Rust | Studio
               </span>
            </div>
			<?php if ($footer_socials) : ?>
				<div>
					<?php echo $footer_socials ?>
				</div>
			<?php endif ?>
             
         </div>
         <div class="col-md-4 footer-col">
		 
            <p> 
			   <?php if ($footer_phone) : ?>
               <?php echo $footer_phone ?> 
			   <?php endif ?>
			   <br>
                <?php if ($footer_email) : ?>
                <a href="mailto:<?php echo $footer_email ?>"><?php echo $footer_email ?></a>
			    <?php endif ?>
            </p>
         </div>
         <div class="col-md-3 footer-col">
			<?php if ($footer_address) : ?>
            <address> 
               <?php echo $footer_address ?>
            </address>
			<?php endif ?>
         </div>
      </div>
	  <!-- Footer Menu -->
      <div class="container align-center">
         <div class="row">
            <?php wp_nav_menu(
               array(
               	'theme_location' => 'footer-menu',
               	'menu_id' =>  'footermenu',
               	'container' => 'ul',
               	'menu_class' => 'footer-nav',
               )
               );?>
			<!--
            <ul>
               <li><a class="nav-link" href="index.html">Home</a></li>
               <li><a class="nav-link" href="story.html">About</a></li>
               <li><a class="nav-link" href="services.html">Services</a></li>
               <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
               <li><a class="nav-link" href="terms.html">Terms</a></li>
               <li><a class="nav-link" href="contact.html">Contact us</a></li>
            </ul>
			-->
         </div>
      </div>
   </div>
</footer>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
   AOS.init({
   easing: 'ease-in-out-sine'
   });
</script>
<a class="scrollToTop" href="#" style="display: inline;"><i class="icon ion-md-arrow-round-up"></i></a>
<?php wp_footer();?>
</body>
</html>