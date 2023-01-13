<?php get_header(); ?>
<!-- featured image 
<section class="section slider nopadding" style="background:#9c4e27 url('< ?php the_post_thumbnail_url();?>')!important;">
   <div class="overlay"></div>
   <div class="container">
      <h1>News &amp; Events</h1>
   </div>
</section>
-->
<!-- blog posts -->
<section class="section">
   <div class="container">
      <!-- (3) blogheader -->
      <!-- (4) blog row -->
      <div class="row">
         <!-- (5) blog main-->
         <div class="col-sm-8 blog-main">
			<?php if(have_posts()): ?>
			<?php while(have_posts()) : the_post(); ?>
			<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<p><?php __('Sorry No Posts Found, Please check again later :)'); ?></p>
			<?php endif; ?>
		</div>
		<!-- sidebar archives -->
		<?php get_sidebar(); ?>
		<!-- sidebar module -->
	   </div>
   </div>
</section>         
<!-- container -->
<?php get_footer(); ?>