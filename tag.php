<?php get_header('blog'); ?>

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
               <article class="post">
                  <div class="entry-header cf">
                     <h1><a href="single.html" title=""><?php the_title(); ?></a></h1>
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

               <!-- <div class="entry-header cf">

                  <h1><a href="single.html" title="">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
                     /
                     <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <a href="single.html" title=""><img src="images/post-image/post-image-1300x500-01.jpg" alt="post-image" title="post-image"></a>
               </div>

               <div class="post-content">

                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                  nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                  cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                  ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

               </div>

            </article>  -->
            <!-- post end -->

            <!-- <article class="post">

               <div class="entry-header cf">

                  <h1><a href="single.html" title="">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24">Jan 14, 2013</time>
                     /
                     <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <a href="single.html" title=""><img src="images/post-image/post-image-1300x500-02.jpg" alt="post-image" title="post-image"></a>
               </div>

               <div class="post-content">

                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                  nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                  cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                  ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

               </div>

            </article>  -->
            <!-- post end -->

            <!-- <article class="post">

               <div class="entry-header cf">

                  <h1><a href="single.html" title="">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
                     /
                     <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <a href="single.html" title=""><img src="images/post-image/post-image-1300x500-03.jpg" alt="post-image" title="post-image"></a>
               </div>

               <div class="post-content">

                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                  nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                  cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                  ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

               </div>

            </article>  -->
            <!-- post end -->

            <!-- Pagination -->
            <!-- <nav class="col full pagination">
  			      <ul>
                  <li><span class="page-numbers prev inactive">Prev</span></li>
  				      <li><span class="page-numbers current">1</span></li>
  				      <li><a href="#" class="page-numbers">2</a></li>
                  <li><a href="#" class="page-numbers">3</a></li>
                  <li><a href="#" class="page-numbers">4</a></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="page-numbers">7</a></li>
                  <li><a href="#" class="page-numbers">8</a></li>
                  <li><a href="#" class="page-numbers">9</a></li>
  				      <li><a href="#" class="page-numbers next">Next</a></li>
  			      </ul>
  		      </nav> -->

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

            <?php get_sidebar(); ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweets Section End-->

  <?php get_footer(); ?>