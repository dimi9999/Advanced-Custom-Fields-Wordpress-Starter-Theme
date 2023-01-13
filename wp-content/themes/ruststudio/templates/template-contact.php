<?php
   /* Template Name: Contact */
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
	  <?php else: ?>
     <!-- SECTION HEADER -->
      <section class="section slider nopadding" style="background:#9c4e27">
         <section class="section">
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
      </section>
	  <?php endif ?>
      <!-- HOME GALLERY -->
      <!-- MAIN CONTENT -->
      <section id="contact" class="section align-center">
         <div class="container">
            <div class="formContainer">
               <div class="titleContainer">
                  <i class="far fa-user-circle" style="font-size:50px;"></i>
                  <h2>Contact form</h2>
                  <?php if(have_posts()): ?>
                  <?php while(have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>
     
<?php get_footer(); ?>