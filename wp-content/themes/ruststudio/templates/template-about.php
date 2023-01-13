<?php
   /* Template Name: About - Our Story*/
   get_header();
   ?>
<!-- 2 cols layout -->
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
	 <?php endif ?>
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
<!-- 2 COLS LAYOUT END -->
 
<!-- counter-section-->
<?php get_footer(); ?>