<?php
/**
 * functions.php - 기능 구현을 담당하는 파일 입니다.
 */

// functions.php 에서 스크립트 로드하기 
function load_scripts() {
  wp_enqueue_script( 'bxslider', BASE_URI . '/js/jquery.bxslider.js', array('jquery'), false, true );
  wp_enqueue_script( 'swiper', BASE_URI . '/js/swiper.min.js', array( 'jquery'), false, true );
  wp_enqueue_script( 'waypoint', BASE_URI . '/js/jquery.waypoints.min.js', array( 'jquery'), false, true );
  wp_enqueue_script( 'retina', BASE_URI . '/js/retina.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'main', BASE_URI . '/js/main.js', array( 'jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// functions.php 에서 스타일 로드하기 
function load_styles() {
  wp_enqueue_style( 'reset', BASE_URI . '/css/reset.css'  ); 
  wp_enqueue_style( 'swiper', BASE_URI . '/css/swiper.min.css' );
  wp_enqueue_style( 'app', BASE_URI . '/css/app.css', '1.0.0' );  
  wp_enqueue_style( 'app', BASE_URI . '/css/font.css', array(), '1.0.0', true );  // 푸터 쪽에 로드됨
}
add_action('wp_enqueue_scripts', 'load_styles');

// jquery 버전 바꾸기
function modify_jquery_version() {
  if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', false);
      wp_enqueue_script('jquery');
  }
}
add_action('init', 'modify_jquery_version');

