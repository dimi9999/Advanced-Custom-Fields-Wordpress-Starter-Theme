<?php get_header(); ?>
<!-- section header -->
<?php if(have_posts()): ?>
<?php while(have_posts()) : the_post(); ?>


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
		  <h1><?php the_title(); ?></h1>
	   </div>
	</section>
	
	<?php endif; ?>
	
<!-- section content --> 
<section  class="section">
   <div class="container">
      <div class="section-header align-center">
         <h2 class="section-header"><?php the_title(); ?></h2>
      </div>
      <div class="section-content">
         <?php the_content(); ?>
      </div>
   </div>
</section>
<?php endwhile; ?>
<?php else : ?>
<section  class="section">
   <div class="container">
      <div class="section-header align-center">
         <h2 class="section-header"><?php the_title(); ?></h2>
      </div>
      <div class="section-content">
         <p><?php __('Sorry No Page found, Please check again later :)'); ?></p>
      </div>
   </div>
</section>
<?php endif; ?>
<!-- footer -->
<?php get_footer(); ?>