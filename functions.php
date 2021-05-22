<?php

  /* Подключение стилей */
  add_action( 'wp_enqueue_scripts', 'sparrow_styles' );
  function sparrow_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );
  }

  /* Подключение скриптов */
  add_action( 'wp_enqueue_scripts', 'sparrow_sctipts' );
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
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  function theme_register_nav_menu() {
    register_nav_menu( 'header-menu', 'Меню в шапке' );
    register_nav_menu( 'footer-menu', 'Меню в подвале' );
  }

  /* Регистрация Сайтбара */
  add_action( 'widgets_init', 'register_my_widgets' );
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

  /* Регистрация превьюшки для постов и портфолио */
  add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );

  /* Удаляет H2 из шаблона пагинации */
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

  /* Создание нового типа записи */
  add_action( 'init', 'register_post_types' );
  function register_post_types(){
    register_post_type( 'portfolio', [
      'label'  => null,
      'labels' => [
        'name'               => 'Портфолио', // основное название для типа записи
        'singular_name'      => 'Портфолио', // название для одной записи этого типа
        'add_new'            => 'Добавить работу', // для добавления новой записи
        'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование работы', // для редактирования типа записи
        'new_item'           => 'Новая работа', // текст новой записи
        'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
        'search_items'       => 'Искать работу в портфолио', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Портфолио', // название меню
      ],
      'description'         => '',
      'public'              => true,
      'publicly_queryable'  => true, // зависит от public
      'exclude_from_search' => true, // зависит от public
      'show_ui'             => true, // зависит от public
      'show_in_nav_menus'   => true, // зависит от public
      'show_in_menu'        => true, // показывать ли в меню адмнки
      'show_in_admin_bar'   => true, // зависит от show_in_menu
      'show_in_rest'        => true, // добавить в REST API. C WP 4.7
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => 4,
      'menu_icon'           => 'dashicons-portfolio',
      //'capability_type'   => 'post',
      //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
      //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
      'hierarchical'        => false,
      'supports'            => [ 'title', 'editor','author','thumbnail','excerpt','post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => [],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
    ] );
  }
   


?>