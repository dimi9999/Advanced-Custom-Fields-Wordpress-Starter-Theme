<?php
   get_header();
?>
   <!-- (0).Hero -->
   <?php $hero = get_field('hero'); ?>
   <!-- (1). MAIN HERO CAROUSEL WITH VIDEO -->
	 <?php $carousel = get_field('homepage_slider'); ?>
	 <?php if($carousel): ?>
      <section class="section slider nopadding">
         <!-- (3) START SLIDER -->
         <div id="carousel-example-generic" style="background-size:cover" class="carousel home slide aos-init aos-animate" data-ride="carousel" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
            <!-- Bullets -->
			<ol class="carousel-indicators">
				<?php $i = 0 ?>
				<?php while( have_rows('homepage_slider') ): the_row(); ?>
				<?php 
				if ($i == 0) {
				echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
				} else {
				echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
				}
				$i++ 
				?>
				<?php endwhile ?>
			</ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
			<?php $z = 0; ?>
			<?php while( have_rows('homepage_slider') ): the_row(); 
				$homepage_hero	= get_sub_field('homepage_hero');
				$homepage_video	= get_sub_field('homepage_video'); 
				$homepage_bgimage	= get_sub_field('homepage_bgimage'); 
				$homepage_smalltitle = get_sub_field('homepage_smalltitle');
				$homepage_maintitle	= get_sub_field('homepage_maintitle'); 
				$homepage_caption	= get_sub_field('homepage_caption'); 
				$homepage_link	= get_sub_field('homepage_link'); 
				$homepage_linktext	= get_sub_field('homepage_linktext');
			?>

               <div class="item <?php if ($z==0) { echo 'active';} ?>" style="background:url('<?php echo $homepage_bgimage;?>')">
                  <!-- Video -->
				 <?php if( $homepage_video): ?>
				  <div class='Flexible-container'>
                     <video class="home-video__desktop" preload="auto" autoplay="" muted="" loop="" playsinline="" poster="<?php bloginfo('template_directory');?>/img/sea-bg.jpg">
							<source src="<?php echo $homepage_video ?>" type="video/mp4">
					</video>
                  </div>
				  <?php endif ?>
                   
                  <div class="carousel-caption">
					<div>
						<div>
							<h1><span class="block"><?php echo $homepage_maintitle;?></span>
								<?php echo $homepage_smalltitle;?>
							 </h1>
							 <p><?php echo $homepage_caption;?></p>
							 <?php if ($homepage_link): ?>
							 <div class="button-container align-center">
								<a href="<?php echo $homepage_link?>" class="btn-primary"><?php echo $homepage_linktext;?><i class="fa fa-arrow-down"></i></a>
							 </div>
							 <?php endif ?>
						</div>
					</div>
                  </div>
                  <div class="overlay"></div>
               </div>
			   <?php $z++; 
			   endwhile ?>
			  
            </div>
			<!-- Arrow Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
         </div>
      </section>
     <?php endif ?>

      <!-- (2) HOME GALLERY -->
	  <?php $homegallery = get_field('homepage_work'); ?>
	  <?php $homegallerytitle = get_field('homepage_work_title'); ?>
	  <?php if($homegallery): ?>
      <section id="photogallery" class="section">
         <div class="container"> 
            <div class="section-header align-center">
               <h2 class="section-header"><?php echo $homegallerytitle ?></h2>
            </div>
            <div class="section-content">
               <ul>
					 <?php while( have_rows('homepage_work') ): the_row(); 
						$homepage_workimage	= get_sub_field('homepage_workimage');
						$homepage_workimage_description	= get_sub_field('homepage_workimage_description');
					 ?>
					  <li>
					  <a href="<?php echo $homepage_workimage ?>">
					  <img src="<?php echo $homepage_workimage ?>" alt="<?php echo $homepage_workimage_description ?>" />
					  </a>
					  </li>
					   	  
					  <?php endwhile ?>	
					  <li class="clearfix"></li>
               </ul>
            </div>
         </div>
      </section>
	  <?php endif ?>
	  
	  <!-- (3) ABOUT US -->
	    <main>
			   <!-- dynamic background image -->
			   
			   <?php $about_background = get_field('about_background'); ?>
			   <?php $about_image = get_field('about_image'); ?>
			   <?php $about_link = get_field('about_link'); ?>
				
			   <div id="about" class="fullwidth section" style="background:url('<?php echo $about_background ?>') no-repeat; background-size:cover; background-attachment:fixed">
				  <div class="container">
					 <div class="col-right float-left">
						<div class="nopadding">
						   <?php if ($about_image) : ?>
						   <img class="block fullwidth" src="<?php echo $about_image ?>" alt="About Rust Studio" />
						   <?php endif; ?>
						</div>
					 </div>
					 <div class="col-left float-right bg-white align-center">
						<div>
						   <div class="section-header align-center">
							  <h1 class="section-header"><?php the_title(); ?></h1>
						   </div>
						   <div class="section-content">
							  <?php if(have_posts()): ?>
							  <?php while(have_posts()) : the_post(); ?>
							  <?php the_content(); ?>
							  <?php endwhile; ?>
							  <?php else : ?>
							  <?php endif; ?>
							  <p>
								 <a class="btn btn-tertiary" href="mailto:<?php echo $about_link ?>">Get in touch</a>
							  </p>
						   </div>
						</div>
					 </div>
					 <div class="clearfix"></div>
				  </div>
			   </div>
			</main>
      <!-- (5) SERVICES -->
	  <?php $services = get_field('services'); ?>
	  <?php $services_header = get_field('services_header'); ?>
	  <?php if($services): ?>

      <section id="portfolio" class="section bg-shell">
         <div class="container align-center">
            <!-- SECTION HEADER -->
            <div class="section-header">
               <h2 class="section-header"><?php echo $services_header ?></h2>
            </div>
            <!-- SECTION CONTENT -->
            <div class="section-content">
               <div class="row">
                  
					<?php while( have_rows('services') ): the_row(); 
						$services_icon = get_sub_field('services_icon');
						$services_number = get_sub_field('services_number');
						$services_name = get_sub_field('services_name');
						$services_description = get_sub_field('services_description');
						$services_url = get_sub_field('services_url');
					?>
				  
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 column">
                     <div class="circle">
                        <div class="circle-inner">
                           <span class="icon"><img src="<?php echo $services_icon ?>" alt="<?php echo $services_name ?>" /></span>
                           <span class="number"><?php echo $services_number ?></span>
                        </div>
                     </div>
                     <div class="title">
                        <h2><?php echo $services_name ?></h2>
                     </div>
                     <div class="content">
						<?php echo $services_description ?>
                     </div>
                     <div>
                        <a href="<?php echo $services_url ?>" class="btn btn-readmore block">Read more<i class="icon ion-md-arrow-round-forward"></i></a>
                     </div>
                  </div>
				  <?php endwhile ?>
 
               </div>
            </div>
         </div>
      </section>
	  <?php endif ?>
	  
      <!-- 6. CASE STUDIES (OUR CLIENTS) -->
	  <?php $latest_clients = get_field('latest_clients'); ?>
	  <?php $latestclients_header = get_field('latestclients_header'); ?>
	  <?php if($latest_clients): ?>
		
	  <section id="case-studies" class="section">
         <div class="container align-center">
            <!-- SECTION HEADER -->
            <div class="section-header align-center">
               <h2 class="section-header"><?php echo $latestclients_header ?></h2>
            </div>
            <!-- SECTION CONTENT -->
            <div class="section-content">
               <div class="row">
			   
					<?php while( have_rows('latest_clients') ): the_row(); 
						$client_name = get_sub_field('client_name');
						$client_image = get_sub_field('client_image');
						$client_image_description = get_sub_field('client_image_description');
						$client_instagram_url = get_sub_field('client_instagram_url');
						$client_instagram_text = get_sub_field('client_instagram_text');
						$client_description = get_sub_field('client_description');
						$client_url = get_sub_field('client_url');
					 ?>
					 <div class="col-xs-12 col-sm-6 col-md-6 column">
						 <div class="image">
							<?php if ($client_image) : ?>
							<a href="<?php echo $client_url ?>">
								<img class="block img-responsive fullwidth" src="<?php echo $client_image ?>" alt="<?php echo $client_image_description ?>" />
							</a>
							<?php endif ?>
						 </div>  
						 <div class="category">
							<h5><a href="<?php echo $client_instagram_url ?>" target="_blank"><i class="fab fa-instagram"></i><?php echo $client_instagram_text ?></a></h5>
						 </div>
						 <div class="title">
							<h2><?php echo $client_name ?></h2>
						 </div>
						 <div class="content">
							 
								<?php echo $client_description ?>
							 
							<a href="<?php echo $client_url ?>" class="btn btn-readmore">Read more<i class="icon ion-md-arrow-round-forward"></i></a>
						 </div>
					 </div>
					 <?php endwhile ?>	
               </div>
            </div>
			<!--
            <div class="button-container align-center">
               <a href="portfolio.html" class="btn-primary">Download Portfolio<i class="fa fa-arrow-down"></i></a>
            </div>
			-->
         </div>
      </section>
	  <?php endif ?>

	<!-- (5) PARTNERS (MOVED TO FOOTER) -->
 
<!-- Footer -->
<?php get_footer(); ?>