<?php get_header('blog'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Content
================================================== -->
<div class="content-outer">
  <div id="page-content" class="row">
    <div id="primary" class="eight columns">

      <article class="post">
        <div class="entry-header cf">
          <h1><?php the_title(); ?></h1>

          <p class="post-meta">
            <time class="date" datetime="2014-01-14T11:24"><?php echo get_the_date('F j, Y'); ?></time>
            <?php the_tags( ' / ', ' / ') ?>
          </p>

        </div> <!-- /.entry-header c -->

        <div class="post-thumb">
          <?php the_post_thumbnail( 'thumbnails' ) ?>
        </div>

        <div class="post-content">

          <?php the_content(); ?>

          <p class="tags">
            <span>Tagged in </span>:
            <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
          </p>

          <div class="bio cf">

            <div class="gravatar">
              <img src="images/author-img.png" alt="">
            </div>
            <div class="about">
              <h5><a title="Posts by John Doe" href="#" rel="author">John Doe</a></h5>
              <p>Jon Doe is lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis
                sed odio sit amet nibh vulputate
                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                <a href="#">cursus</a> a sit <a href="#">amet mauris</a>. Morbi elit consequat ipsum.</p>
            </div>

          </div>

          <ul class="post-nav cf">
            <li class="prev"><?php previous_post_link( $format = '%link', $link = '<strong>Previous Article</strong> %title' ); ?></li>
            <li class="next"><?php next_post_link( $format = '%link', $link = '<strong>Next Article</strong> %title' ); ?></li>
          </ul>

        </div>

      </article> <!-- post end -->

        <!-- Comments -->

      <div id="comments">

      

        <?php if (comments_open() || get_comments_number()) {
          comments_template();
        } ?>

      </div> <!-- Comments End -->

    </div>

    <div id="secondary" class="four columns end">

      <?php get_sidebar(); ?>

    </div> <!-- Comments End -->

  </div>

</div> <!-- Content End-->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>