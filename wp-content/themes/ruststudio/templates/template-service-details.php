<?php
   /* Template Name: Services Landing Page*/
   get_header();
   ?>
<!-- SECTION HEADER -->

	<!-- 1.Hero -->
	<?php $hero = get_field('hero'); ?>
	<?php $background_image = get_field('background_image'); ?>
	<?php $main_title = get_field('main_title'); ?>
	<?php $link_text = get_field('link_text'); ?>
	<?php $small_title = get_field('small_title'); ?>
	<?php if($background_image): ?>
	
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
	  
	 <?php else : ?>
	  <section class="section slider nopadding" style="background:#9c4e27 url('<?php the_post_thumbnail_url();?>')!important;">
		   <div class="overlay"></div>
		   <div class="container">
			  <?php if(have_posts()): ?>
			  <?php while(have_posts()) : the_post(); ?>
			  <h1><?php the_title(); ?></h1>
			  <?php endwhile; ?>
			  <?php else : ?>
			  <?php endif; ?>
		   </div>
	 </section>
	 <?php endif ?>
	 <!-- 2 COLS LAYOUT -->
	<main>
	   <div>
		  <div class="col-left">
			 <div>
				<?php if(have_posts()): ?>
				<?php while(have_posts()) : the_post(); ?>
				<div class="section-header align-center">
				   <h2 class="section-header"> <?php the_title(); ?></h2>
				</div>
				<div class="section-content">
				   <?php the_content(); ?>
				   <?php endwhile; ?>
				   <?php else : ?>
				   <?php endif; ?>
				</div>
			 </div>
		  </div>
		  <div class="col-right bg-light">
			 <div>
			 <!-- Images -->
				<?php $service_image_1 = get_field('service_image_1'); ?>
				<?php $service_image_2 = get_field('service_image_2'); ?>
				<?php $service_image_3 = get_field('service_image_3'); ?>
				<?php $service_image_4 = get_field('service_image_4'); ?>
				
				<?php if ($service_image_1) : ?>
				
				<img class="block story-img" src="<?php echo $service_image_1 ?>" alt="<?php echo $service_title ?>" title="<?php echo $service_title ?>" />
				<?php endif ?>
				<?php if ($service_image_2) : ?>
				<img class="block story-img" src="<?php echo $service_image_2 ?>" alt="<?php echo $service_title ?>" title="<?php echo $service_title ?>" />
				<?php endif ?>
				<?php if ($service_image_3) : ?>
				<img class="block story-img" src="<?php echo $service_image_1 ?>" alt="<?php echo $service_title ?>" title="<?php echo $service_title ?>" />
				<?php endif ?>
				<?php if ($service_image_4) : ?>
				<img class="block story-img" src="<?php echo $service_image_4 ?>" alt="<?php echo $service_title ?>" title="<?php echo $service_title ?>" />
				<?php endif ?>
			 </div>
		  </div>
		  <div class="clearfix"></div>
	   </div>
	</main>
	<!-- 2 COLS LAYOUT END -->
 
<!-- counter-section-->
<?php get_footer(); ?>