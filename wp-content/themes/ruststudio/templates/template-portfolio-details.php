<?php
   /* Template Name: Portfolio Landing Page */
   get_header();
   ?>
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
	 <!-- 2 COLS LAYOUT (CLIENT DETAILS) -->
      <main>
         <!-- dynamic background image -->
         
		   <?php $client_background = get_field('client_background'); ?>
		   <?php $client_image_1 = get_field('client_image_1'); ?>
		   <?php $client_image_2 = get_field('client_image_2'); ?>
		   <?php $client_image_3 = get_field('client_image_3'); ?>
		   <?php $client_image_4 = get_field('client_image_4'); ?>
 
		   <?php $client_image_desc_1 = get_field('client_image_desc_1'); ?>
		   <?php $client_image_desc_2 = get_field('client_image_desc_2'); ?>
		   <?php $client_image_desc_3 = get_field('client_image_desc_3'); ?>
		   <?php $client_image_desc_4 = get_field('client_image_desc_4'); ?>
 
		   <?php $client_link = get_field('client_link'); ?>
		 
		 <div id="clientDetails" class="fullwidth section" style="background:url('<?php echo $client_background ?>') no-repeat; background-size:cover; background-attachment:fixed">
            <div class="container">
               <div class="col-right float-left">
                  <div class="nopadding">
                       <?php if ($client_image_1) : ?>
					   <img class="block fullwidth" src="<?php echo $client_image_1 ?>" alt="<?php echo $client_image_desc_1 ?>" />
					   <?php endif; ?>
					   <?php if ($client_image_2) : ?>
					   <img class="block fullwidth" src="<?php echo $client_image_2 ?>" alt="<?php echo $client_image_desc_2 ?>" />
					   <?php endif; ?>
					   <?php if ($client_image_3) : ?>
					   <img class="block fullwidth" src="<?php echo $client_image_3 ?>" alt="<?php echo $client_image_desc_3 ?>" />
					   <?php endif; ?>
					   <?php if ($client_image_4) : ?>
					   <img class="block fullwidth" src="<?php echo $client_image_4 ?>" alt="<?php echo $client_image_desc_4 ?>" />
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
                           <a href="mailto:info@ruststudio.co.uk">Email Us: info@ruststudio.co.uk</a>
                        </p>
                        <p>
                           <a href="https://www.facebook.com/RustCreativeStudio/?ref=py_c" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/ruststudio_/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        </p>
                        <p>
							<a class="btn btn-tertiary" href="mailto:<?php echo $client_link ?>">Grab a coffee with us</a>
						</p>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </main>
       
<!-- counter-section-->
<?php get_footer(); ?>