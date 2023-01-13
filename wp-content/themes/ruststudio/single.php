<?php get_header(); ?>
<?php
   /* Blog Post Content */
   ?>
<section class="section">
   <div class="container">
   <!-- (3) blogheader -->
   <!-- (4) blog row -->
   <div class="row">
      <!-- (5) blog main-->
      <div class="col-sm-8 blog-main">
         <!-- blog post-->
         <div class="blog-post">
            <!-- blog post-->
            <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('Sorry No Posts Found, Please check again later :)'); ?></p>
            <?php endif; ?>
         </div>
      </div>
      <?php get_sidebar(); ?>
   </div>
</section>
<!-- (2) blog -->
<!-- (7) blog footer -->
<?php get_footer(); ?>