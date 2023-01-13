<?php
   /* Template Name: Portfolio */
   get_header();
   ?>
	<!-- 1.Hero -->
	<?php $hero = get_field('hero'); ?>
	<?php $background_image = get_field('background_image'); ?>
	<?php $main_title = get_field('main_title'); ?>
	<?php $link_text = get_field('link_text'); ?>
	<?php $small_title = get_field('small_title'); ?>
	<section class="section slider nopadding">
		 <!-- Featured Image -->
		 <div id="carousel-example-generic" style="background:url('<?php echo $background_image ?>'); background-size:cover;" class="carousel slide aos-init aos-animate" data-ride="carousel" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
			<!-- Indicators -->
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			   <div class="item active">
				  <div class="carousel-caption">
					 <div>
						<div>
						   <h1><span class="block"><?php echo $main_title ?></span>
						   <?php echo $link_text ?>
						   </h1>
						   <p><?php echo $small_title ?></p>
						</div>
					 </div>
				  </div>
				  <div class="overlay"></div>
			   </div>
			</div>
		 </div>
	  </section>
	 <!-- 2. CASE STUDIES (OUR CLIENTS) -->
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
							<p>
								<?php echo $client_description ?>
							</p>
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

<!-- counter-section-->
<?php get_footer(); ?>