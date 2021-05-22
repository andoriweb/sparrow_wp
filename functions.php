<?php

  
  add_action( 'wp_enqueue_scripts', 'sparrow_styles' ); // Подключение стилей
  add_action( 'wp_enqueue_scripts', 'sparrow_sctipts' ); // Подключение скриптов
  add_action( 'after_setup_theme', 'theme_register_nav_menu' ); // Регистрация меню
  add_action( 'widgets_init', 'register_my_widgets' ); // Регистрация сайтбара

  /* Подключение стилей */
  function sparrow_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );
  }

  /* Подключение скриптов */
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

  /* Регистрация меню */
  function theme_register_nav_menu() {
    register_nav_menu( 'header-menu', 'Меню в шапке' );
    register_nav_menu( 'footer-menu', 'Меню в подвале' );
  }

  /* Регистрация Сайтбара */
  function register_my_widgets(){

    register_sidebar( array(
      'name'          => 'Правый сайтбар',
      'id'            => "right-sidebar",
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => "</div>\n",
      'before_title'  => '<h5 class="widgettitle">',
      'after_title'   => "</h5>\n",
    ) );

    register_sidebar( array(
      'name'          => 'Сайтбар Контакты',
      'id'            => "contact-sidebar",
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => "</div>\n",
      'before_title'  => '<h5 class="widgettitle">',
      'after_title'   => "</h5>\n",
    ) );
  }

  /* Регистрация превьюшки для постов */
  add_theme_support( 'post-thumbnails', array( 'post' ) );

  // удаляет H2 из шаблона пагинации
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
  function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
      <h2 class="screen-reader-text">%2$s</h2>
      <div class="nav-links">%3$s</div>
    </nav>
    */
    return '
    <nav class="navigation %1$s" role="navigation">
      <div class="nav-links">%3$s</div>
    </nav>    
    ';
  }
   


?>