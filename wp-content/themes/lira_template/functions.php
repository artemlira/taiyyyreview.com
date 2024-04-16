<?php

/*
 Подключение стилей и скриптов

 */
function lira_template_scripts()
{
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css');
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/swiper/swiper.min.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

  // wp_enqueue_style('lira_template-style', get_stylesheet_uri(), array(), _S_VERSION);
  // wp_style_add_data('lira_template-style', 'rtl', 'replace');


  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js');
  wp_enqueue_script('jquery');

  wp_enqueue_script('bootstrap.bundle', get_template_directory_uri() . '/assets/bootstrap/bootstrap.bundle.min.js', array('jquery'), null, true);
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/swiper.min.js', array('jquery'), null, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'lira_template_scripts');



if (!function_exists('my_setup')) {
  function my_setup()
  {
    add_theme_support('post-thumbnails');
    // add_theme_support( 'title-tag' );
    add_theme_support('custom-logo', [
      'height'      => 64,
      'width'       => 64,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => 'Gulf casinoyyy'
    ]);
  }
  add_action('after_setup_theme', 'my_setup');
}



//Регистрация нового типа записей - blog
add_action('init', 'my_custom_init_blog');
function my_custom_init_blog()
{
  register_post_type('blog', array(
    'labels'             => array(
      'name'               => 'Blog', // Основное название типа записи
      'singular_name'      => 'Blog', // отдельное название записи типа services
      'add_new'            => 'Add New',
      'add_new_item'       => 'Добавить новый Blog',
      'edit_item'          => 'Редактировать Blog',
      'new_item'           => 'Новый Blog',
      'view_item'          => 'Посмотреть Blog',
      'search_items'       => 'Найти вопрос',
      'not_found'          => 'Blog не найдено',
      'not_found_in_trash' => 'В корзине Blog не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Blog'

    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
  ));
}

//Регистрация нового типа записей - Casino games
add_action('init', 'my_custom_init_casinoGames');
function my_custom_init_casinoGames()
{
  register_post_type('casino games', array(
    'labels'             => array(
      'name'               => 'Casino games', // Основное название типа записи
      'singular_name'      => 'Casino games', // отдельное название записи типа services
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New Casino games',
      'edit_item'          => 'Edit Casino games',
      'new_item'           => 'New Casino games',
      'view_item'          => 'View Casino games',
      'search_items'       => 'Search question',
      'not_found'          => 'Casino games not found',
      'not_found_in_trash' => 'Not found in trash Casino games',
      'parent_item_colon'  => '',
      'menu_name'          => 'Casino games'

    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
  ));
}


//Регистрация нового блока
add_action('acf/init', 'my_acf_blocks_init');
function  my_acf_blocks_init()
{
  if (function_exists('acf_register_block_type')) {
    acf_register_block_type(array(
      'name'              => 'full-width-image',
      'title'             => 'full-width-image',
      'description'       => 'Custom block full-width-image page',
      'render_callback'   => 'render_acf_gutenberg_block',
      'category'          => 'custom-categories',
      'icon'              => 'admin-comments',
      'enqueue_style'     => get_template_directory_uri()  . '/floors/full-width-image/full-width-image.css',
    ));
  }
}

function render_acf_gutenberg_block($block)
{
  print_r($block);
  $template_name = $block['name'];
  $template_name = explode('/', $template_name);
  $template_path = 'floors/' . $template_name[1] . '/' . $template_name[1];
  while (have_rows('block')) : the_row();
    get_template_part('floors/about/about');
  endwhile;
}

//Добавление страницы Options
if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}
