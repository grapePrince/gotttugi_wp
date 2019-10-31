<?php
/**
 * Function.php Doc comment
 *
 * Product List Page.
 * php version 7.3.11
 *
 * @category Page
 * @package  WordPress
 * @author   Ember Lee <emberlee0503@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html <GNU><GPLv3>
 * @link     http://rahata1.dothome.co.kr
 */

?>
<?php
/**
 * 스크립트를 로드한다.
 *
 * @return void
 */
function load_scripts() {
	wp_enqueue_script( 'bxslider', BASE_URI . '/js/jquery.bxslider.js', array( 'jquery' ), '4.2.12', true );
	wp_enqueue_script( 'swiper', BASE_URI . '/js/swiper.min.js', array( 'jquery' ), '4.5.0', true );
	wp_enqueue_script( 'waypoint', BASE_URI . '/js/jquery.waypoints.min.js', array( 'jquery' ), '4.0.1', true );
	wp_enqueue_script( 'isotope', BASE_URI . '/js/isotope.pkgd.min.js', array( 'jquery' ), '3.0.6', true );
	wp_enqueue_script( 'smoothscroll', BASE_URI . '/js/jquery.smooth-scroll.min.js', array( 'jquery' ), '1.4.12', true );
	wp_enqueue_script( 'animatenumber', BASE_URI . '/js/jquery.animateNumber.min.js', array( 'jquery' ), '0.0.14', true );
	wp_enqueue_script( 'jqueryui', BASE_URI . '/js/jquery-ui-1.12.1.min.js', array( 'jquery' ), '1.12.1', true );

	wp_enqueue_script( 'main', BASE_URI . '/js/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

/**
 * 스타일을 로드한다.
 *
 * @return void
 */
function load_styles() {
	wp_enqueue_style( 'reset', BASE_URI . '/css/reset.css', array(), '1.0.0', false );
	wp_enqueue_style( 'swiper', BASE_URI . '/css/swiper.min.css', array(), '1.0.0', false );
	wp_enqueue_style( 'app', BASE_URI . '/css/app.css', array(), '1.0.0', false );
	wp_enqueue_style( 'app', BASE_URI . '/css/font.css', array(), '1.0.0', true );  // 푸터 쪽에 로드됨.
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

/**
 * 이미 로드되어있는 jquery 버전을 최신 버전으로 업데이트 해준다.
 *
 * @return void
 */
function modify_jquery_version() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'init', 'modify_jquery_version' );

/**
 * Post type을 등록한다.
 *
 * @return void
 */
function product_post_type() {
	register_post_type(
		'products',
		array(
			'label'        => 'Products',
			'labels'       =>
				array(
					'name'          => __( 'Products' ),
					'singular_name' => __( 'Product' ),
				),
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => true,
			'supports'     =>
				array(
					'title',
					'editor',
					'thumbnail',
					'excerpt',
					'custom-fields',
				),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'product_post_type' );

/**
 * Post type 카테고리를 등록한다.
 *
 * @return void
 */
function create_products_category() {
	register_taxonomy(
		'product_category',
		'products',
		array(
			'label'        => 'Product_Categories',
			'labels'       =>
				array(
					'name'          => __( 'Product_Categories' ),
					'singular_name' => __( 'Product_Category' ),
				),
			'rewrite'      => true,
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'create_products_category' );

// post type 과 post type category 를 연결해준다.
register_taxonomy_for_object_type( 'product_category', 'products' );


// 사이트 전체에서 썸네일(특성이미지)를 이용 가능하게 설정.
add_theme_support( 'post-thumbnails' );



/**
 * Post를 Rest API 로 가져갈 때 Custom field 것도 가져가게 한다.
 *
 * @param Response $data Response object.
 * @param Post     $post post object.
 * @param Request  $request request object.
 *
 * @return data
 */
