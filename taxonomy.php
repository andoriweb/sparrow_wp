
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
        <p class="lead"><?php the_field('paragraph-1', 112); ?></p>
        <p><?php the_field('paragraph-2', 112); ?></p>
      </div> <!-- Secondary End-->

      <div id="primary" class="eight columns portfolio-list">
        <div id="portfolio-wrapper" class="bgrid-halves cf">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

          <?php endwhile; else : ?>
          <p>Записей нет.</p>
          <?php endif; ?>


        </div> <!-- portfolio-wrapper -->
      </div> <!-- primary end-->

    </section> <!-- end section -->
  </div> <!-- #page-content end-->
</div> <!-- content End-->

<?php get_footer(); ?>