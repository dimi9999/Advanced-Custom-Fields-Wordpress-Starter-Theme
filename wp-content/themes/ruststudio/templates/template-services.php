<?php
   /* Template Name: Services */
   get_header();
   ?>
   
	<!-- 1. Hero -->
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
	 
	  <!-- (2) SERVICES -->
	  <?php $services = get_field('services'); ?>
	  <?php $services_header = get_field('services_header'); ?>
	  <?php if($services): ?>

      <section id="portfolio" class="section bg-white">
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

<!-- counter-section-->
<?php get_footer(); ?>