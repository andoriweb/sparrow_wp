<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- Intro Section
================================================== -->
<section id="intro">

  <!-- Flexslider Start-->
  <div id="intro-slider" class="flexslider">

    <ul class="slides">

      <?php 
     // параметры по умолчанию
      $posts = get_posts( array(
        'numberposts' => 0,
        'category'    => 23,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ) );

      foreach( $posts as $post ){
        setup_postdata($post);
        ?>
      <!-- Slide -->
      <li>
        <div class="row">
          <div class="twelve columns">
            <div class="slider-text">
              <h1><?php the_title(); ?><span>.</span></h1>
              <p><?php the_content(); ?></p>
            </div>
            <div class="slider-image">
              <?php the_post_thumbnail( 'thumbnails' ); ?>
            </div>
          </div>
        </div>
      </li>
      <?php
      } 
      wp_reset_postdata(); // сброс
     ?>

    </ul>

  </div> <!-- Flexslider End-->

</section> <!-- Intro Section End-->

<!-- Info Section
================================================== -->
<section id="info">

  <div class="row">

    <div class="bgrid-quarters s-bgrid-halves">

      <div class="columns">
        <h2>Clean & Modern.</h2>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>

      <div class="columns">
        <h2>Responsive.</h2>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>

      <div class="columns s-first">
        <h2>HTML5 + CSS3.</h2>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>

      <div class="columns">
        <h2>Free of Charge.</h2>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>

    </div>

  </div>

</section> <!-- Info Section End-->

<!-- Works Section
================================================== -->
<section id="works">

  <div class="row">

    <div class="twelve columns align-center">
      <h1>Some of our recent works.</h1>
    </div>

    <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

      <div class="columns portfolio-item">
        <div class="item-wrap">
          <a href="portfolio.html">
            <img alt="" src="images/portfolio/geometrics.jpg">
            <div class="overlay"></div>
            <div class="link-icon"><i class="fa fa-link"></i></div>
          </a>
          <div class="portfolio-item-meta">
            <h5><a href="portfolio.html">Geometrics</a></h5>
            <p>Illustration</p>
          </div>
        </div>
      </div>

      <div class="columns portfolio-item">
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
      </div>

      <div class="columns portfolio-item s-first">
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
      </div>

      <div class="columns portfolio-item">
        <div class="item-wrap">
          <a href="portfolio.html">
            <img alt="" src="images/portfolio/into-the-light.jpg">
            <div class="overlay"></div>
            <div class="link-icon"><i class="fa fa-link"></i></div>
          </a>
          <div class="portfolio-item-meta">
            <h5><a href="portfolio.html">Into The Light</a></h5>
            <p>Branding</p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section> <!-- Works Section End-->

<!-- Journal Section
================================================== -->
<section id="journal">

  <div class="row">
    <div class="twelve columns align-center">
      <h1>Our latest posts and rants.</h1>
    </div>
  </div>

  <div class="blog-entries">

    <?php 
     // параметры по умолчанию
      $posts = get_posts( array(
        'numberposts' => 3,
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ) );

      foreach( $posts as $post ){
        setup_postdata($post);
        ?>
    <article class="row entry">
      <div class="entry-header">
        <div class="permalink">
          <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
        </div>
        <div class="ten columns entry-title pull-right">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="two columns post-meta end">
          <p>
            <time datetime="2014-01-31" class="post-date" pubdate=""><?php echo get_the_date('F j, Y'); ?></time>
            <span class="dauthor">By <?php the_author(); ?></span>
          </p>
        </div>
      </div>
      <div class="ten columns offset-2 post-content">
        <?php the_excerpt(  ); ?>
        <a class="more-link" href="<?php the_permalink(); ?>">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
      </div>
    </article> <!-- Entry End -->
    <?php
      } 
      wp_reset_postdata(); // сброс
     ?>

  </div> <!-- Entries End -->

</section> <!-- Journal Section End-->

<!-- Call-To-Action Section
================================================== -->
<section id="call-to-action">

  <div class="row">

    <div class="eight columns offset-1">

      <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
      <p>Looking for an awesome and reliable webhosting? Try <a
          href="http://www.dreamhost.com"><span>DreamHost</span></a>.
        Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>.
        <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
      </p>

    </div>

    <div class="three columns action">

      <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

    </div>

  </div>

</section> <!-- Call-To-Action Section End-->

<?php get_footer(); ?>