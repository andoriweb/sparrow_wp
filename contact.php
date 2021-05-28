<?php
  /*
    Template Name: Контакты
  */
?>

<?php get_header(); ?>

<!-- Page Title
   ================================================== -->
<div id="page-title">
  <div class="row">

    <div class="ten columns centered text-center">
      <h1>Get In Touch<span>.</span></h1>
      <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
    </div>

  </div>
</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">
  <div id="page-content" class="row page">
    <div id="primary" class="eight columns">

      <section>

        <h1>Hello. Let's talk.</h1>

        <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
          nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
          cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>

        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
          nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
          cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
          ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

        <div id="contact-form">

          <?php echo do_shortcode('[contact-form-7 id="144" title="Контактная форма 1"]'); ?>

        </div> <!-- /.contact-form -->

      </section> <!-- section end -->

    </div> <!-- /.eight columns -->

    <div id="secondary" class="four columns end">

      <?php get_sidebar('contact'); ?>

    </div> <!-- /.four columns end -->

  </div> <!-- /.row page -->
</div> <!-- Content End-->

<?php get_footer(); ?>