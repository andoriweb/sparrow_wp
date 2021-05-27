<?php
  /*
    Template Name: Портфолио
  */
?>

<?php get_header(); ?>

<!-- Page Title
   ================================================== -->
<div id="page-title">

  <div class="row">

    <div class="ten columns centered text-center">
      <h1>Our Amazing Works<span>.</span></h1>

      <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
    </div>

  </div>

</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">

      <div id="secondary" class="four columns entry-details">
        <h1>Our Portfolio.</h1>
        <p class="lead"><?php the_field('paragraph-1'); ?></p>
        <p><?php the_field('paragraph-2'); ?></p>
      </div> <!-- Secondary End-->

      <div id="primary" class="eight columns portfolio-list">
        <div id="portfolio-wrapper" class="bgrid-halves cf">

          <?php
            // параметры по умолчанию
            $posts = get_posts( array(
              'numberposts' => 6,
              'category'    => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'include'     => array(),
              'exclude'     => array(),
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'portfolio',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
              ?>
          <div class="columns portfolio-item">
            <div class="item-wrap">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'thumbnails' ) ?>
                <div class="overlay"></div>
                <div class="link-icon"><i class="fa fa-link"></i></div>
              </a>
              <div class="portfolio-item-meta">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_excerpt(  ); ?></p>
              </div>
            </div> <!-- /.item-wrap -->
          </div> <!-- columns portfolio-item first -->
          <?php
            }

            wp_reset_postdata(); // сброс
          ?>

          <!-- <div class="columns portfolio-item first">
            <div class="item-wrap">
              <a href="portfolio.html">
                <img alt="" src="images/portfolio/geometrics.jpg">
                <div class="overlay"></div>
                <div class="link-icon"><i class="fa fa-link"></i></div>
              </a>
              <div class="portfolio-item-meta">
                <h5><a href="portfolio.html">Geometrics</a></h5>
                <p>Illustrration</p>
              </div>
            </div> 
          </div>  -->


          <!-- <div class="columns portfolio-item">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/console.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Console</a></h5>
                           <p>Web Development</p>
          					</div>
                     </div>
          			</div> -->

          <!-- <div class="columns portfolio-item first">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/camera-man.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Camera Man</a></h5>
                           <p>Photography</p>
          					</div>
                     </div>
          			</div> -->

          <!-- <div class="columns portfolio-item">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/into-the-light.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Into The Light</a></h5>
                           <p>Photography</p>
          					</div>
                     </div>
          			</div> -->

          <!-- <div class="columns portfolio-item first">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/farmerboy.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Farmer Boy</a></h5>
                           <p>Branding</p>
          					</div>
                     </div>
          			</div> -->

          <!-- <div class="columns portfolio-item">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/coffee-cup.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Coffee Cup</a></h5>
                           <p>Web Design</p>
          					</div>
                     </div>
          			</div> -->

        </div> <!-- portfolio-wrapper -->
      </div> <!-- primary end-->

    </section> <!-- end section -->
  </div> <!-- #page-content end-->
</div> <!-- content End-->

<?php get_footer(); ?>