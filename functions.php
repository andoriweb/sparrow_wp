<?php

  
  add_action( 'wp_enqueue_scripts', 'sparrow_styles' );
  add_action( 'wp_enqueue_scripts', 'sparrow_sctipts' );

  function sparrow_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );
  }

  function sparrow_sctipts() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jqueryCDN', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js' );
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js' );
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true );
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array('jquery'), null, true );
    wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), null, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, false );
  }




?>