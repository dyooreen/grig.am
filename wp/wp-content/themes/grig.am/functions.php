<?php
function my_custom_theme_enqueue()
{
  wp_enqueue_style('my-custom-theme', get_stylesheet_uri());
  wp_enqueue_style('', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
  wp_enqueue_style('main', get_template_directory_uri() . "/assets/css/main.css");
  wp_enqueue_style('style4', get_template_directory_uri() . "/assets/css/style4.css");
  wp_enqueue_style('bootstrap-responsive.min', get_template_directory_uri() . "/assets/css/bootstrap-responsive.min.css");
  wp_enqueue_style('jquery', get_template_directory_uri() . "/assets/css/jquery.css");
  wp_enqueue_script('jquery1', get_template_directory_uri() . '/assets/js/jquery.js');
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.js');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue');


add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type()
{
  remove_menu_page('edit.php');
}
function get_id_by_slug($page_slug)
{
  $page = get_page_by_path($page_slug);
  if ($page) {
    return $page->ID;
  } else {
    return null;
  }
}

function register_my_menu()
{
  register_nav_menu('new-menu', __('Menu'));
}
add_action('init', 'register_my_menu');

function dump($x)
{
  echo "<pre>";
  var_dump($x);
  echo "</pre>";
}
