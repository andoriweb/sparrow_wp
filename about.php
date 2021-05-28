<?php
/*
Template Name: Команда
*/
?>

<?php get_header(); ?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?php the_title(); ?><span>.</span></h1>

            <p><?php the_content(); ?></p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

            <section>

               <h1>Meet our talented team.</h1>

               <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
               cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>

               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
               cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
               ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

               <div class="row">
                  <div id="team-wrapper" class="bgrid-halves cf">

                  <?php 
                    $posts = get_posts( array(
                      'numberposts' => 0,
                      'category'    => 0,
                      'orderby'     => 'date',
                      'order'       => 'DESC',
                      'include'     => array(),
                      'exclude'     => array(),
                      'meta_key'    => '',
                      'meta_value'  =>'',
                      'post_type'   => 'team',
                      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                      setup_postdata($post);
                      ?>
                        <div class="column member">
                        <?php the_post_thumbnail( 'thumbnails' ); ?>
                        <div class="member-name">
                           <h5><?php the_title(); ?></h5>
                           <span><?php the_field('team-position') ?></span>
                        </div>
                        <p><?php the_content(); ?></p>
                        <ul class="member-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                      </div>
                      <?php
                    } 
                    wp_reset_postdata(); // сброс
                  ?>

                      

                     <!-- <div class="column member">

                        <img src="images/team/team-img-02.jpg" alt=""/>

                        <div class"member-name">
                           <h5>Sakura Haruno</h5>
                           <span>Lead Creative</span>
                        </div>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                          nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                        <ul class="member-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>

            			</div>

                     <div class="column member">

                        <img src="images/team/team-img-03.jpg" alt=""/>

                        <div class"member-name">
                           <h5>Sasuke Uchiha</h5>
                           <span>Lead Web Designer</span>
                        </div>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                          nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                        <ul class="member-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>

            			</div>

                     <div class="column member">

                        <img src="images/team/team-img-03.jpg" alt=""/>

                        <div class"member-name">
                           <h5>Shikamaru Nara</h5>
                           <span>Web Designer</span>
                        </div>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                          nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                        <ul class="member-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>

            			</div> -->

                  </div> <!-- Team wrapper End -->

               </div> <!-- row End -->

            </section> <!-- section end -->

         </div> <!-- primary end -->

         <div id="secondary" class="four columns end">

            <aside id="sidebar">

               <?php get_sidebar('contact'); ?>

            </aside>

         </div> <!-- secondary End-->

      </div> <!-- page-content End-->

   </div> <!-- Content End-->

<?php get_footer(); ?>