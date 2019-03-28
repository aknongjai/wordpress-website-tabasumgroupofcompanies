<?php
function loadCss (){

  wp_enqueue_script('First_js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,microtime(),true);
  wp_enqueue_style('google_custom_fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('To_The_Level','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('Main_Style', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'loadCss');

function loadTitle() {
  // register_nav_menu('headerMenuLocation','Header Menus');
  // register_nav_menu('footerMenuOne','Footer Menu One');
  // register_nav_menu('footerMenuTwo','Footer Menu Two');
  
  add_theme_support('title-tag');
}
add_action('after_setup_theme','loadTitle');
