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
          This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
          Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
          <a href="#">http://t.co/CGIrdxIlI3</a>
        </span>
        <b><a href="#">2 Days Ago</a></b>
      </li>
    </ul>

    <p class="align-center"><a href="#" class="button">Follow us</a></p>

  </div>

  <!-- footer
   ================================================== -->
  <footer>
    <div class="row">

      <div class="twelve columns">

        <ul class="footer-nav">

          <?php wp_nav_menu( array(
              'theme_location'  => 'footer-menu',
              'container'       => null
            ) ); ?>

        </ul>

        <ul class="footer-social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-skype"></i></a></li>
          <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>

        <ul class="copyright">
          <li>Copyright &copy; 2014 Sparrow</li>
          <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
        </ul>

      </div> <!-- /.twelve columns -->

      <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

    </div> <!-- /.row -->
  </footer> <!-- Footer End-->

  <?php wp_footer(); ?>

  </body>

  </html>