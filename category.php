<?php get_header('blog'); ?>

<!-- Content
   ================================================== -->
<div class="content-outer">
   <div id="page-content" class="row">
      <div id="primary" class="eight columns">

         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

         <article class="post">
            <div class="entry-header cf">
               <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
               <p class="post-meta">
                  <time class="date" datetime="2014-01-14T11:24"><?php echo get_the_date('F j, Y'); ?></time>
                  <?php the_tags( ' / ', ' / ') ?>
               </p>
            </div>
            <div class="post-thumb">
               <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'thumbnails' ) ?></a>
            </div>
            <div class="post-content">
               <?php the_excerpt(  ); ?>
            </div>
         </article> <!-- post end -->

         <?php endwhile; ?>
         <nav class="col full pagination">
            <?php 
                  the_posts_pagination( array(
                     'show_all'  => false,
                     'mid_size'  => 5,
                     'end_size'  => 5,
                     'prev_next' => true,
                     'prev_text' => 'Prev',
                     'next_text' => 'Next',
                   ) ); 
                  ?>
         </nav>
         <?php endif; ?>

      </div> <!-- Primary End-->

      <div id="secondary" class="four columns end">

         <?php get_sidebar(); ?>

      </div> <!-- Secondary End-->

   </div>

</div> <!-- Content End-->


<?php get_footer(); ?>