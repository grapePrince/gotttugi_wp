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
	wp_enqueue_script( 'moment', BASE_URI . '/js/moment.2.24.0.min.js', array( 'moment' ), '2.24.0', true );

	wp_enqueue_script( 'main', BASE_URI . '/js/main.js', array( 'jquery' ), '1.0.0', true );

	// main js 스크립트에 글로벌 변수를 넣어준다.
	$config_array = array(
		'baseURL'   => BASE_URI,
		'rootURL'   => get_site_url(),
		'ajaxURL'   => admin_url( 'admin-ajax.php' ),
		'ajaxFactoryNonce' => wp_create_nonce( 'factory_form' ),
	);
	wp_localize_script( 'main', 'appConf', $config_array );

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
 * REST API 를 준비할 때 custom field 정보를 넘겨준다.
 *
 * @param Response $data 응답 데이터.
 * @param Post     $post 포스트 데이터.
 * @param Request  $request 리퀘스트 데이터.
 *
 * @return data
 */
function rest_prepare_products( $data, $post, $request ) {
	$_data = $data->data;

	$_data['sortingClass']      = get_post_meta( $post->ID, 'sortingClass', true );
	$_data['popular']           = get_post_meta( $post->ID, 'popular', true );
	$_data['recent']            = get_post_meta( $post->ID, 'recent', true );
	$_data['views']             = get_post_meta( $post->ID, 'views', true );
	$_data['sortingClassLabel'] = get_post_meta( $post->ID, 'sortingClassLabel', true );
	$_data['weight']            = get_post_meta( $post->ID, 'weight', true );
	$_data['kcal']              = get_post_meta( $post->ID, 'kcal', true );
	$_data['releaseYear']       = get_post_meta( $post->ID, 'releaseYear', true );
	$_data['releaseMonth']      = get_post_meta( $post->ID, 'releaseMonth', true );
	$_data['resourceInfo']      = get_post_meta( $post->ID, 'resourceInfo', true );
	$_data['videoLinkOGV']      = get_post_meta( $post->ID, 'videoLinkOGV', true );
	$_data['videoLinkMP4']      = get_post_meta( $post->ID, 'videoLinkMP4', true );
	$_data['videoLinkWEBM']     = get_post_meta( $post->ID, 'videoLinkWEBM', true );

	$data->data = $_data;
	return $data;
}
add_filter( 'rest_prepare_products', 'rest_prepare_products', 10, 3 );

/**
 * Post를 Rest API 로 가져올 때 meta_key, meta_value 함께 가져와준다.
 *
 * @param   array $args       Contains by default pre written params.
 * @param   array $request    Contains params values passed through URL request.
 * @return  array $args       New array with added custom params and its values.
 */
function post_meta_request_params( $args, $request ) {
	$args += array(
		'meta_key'   => $request['meta_key'],
		'meta_value' => $request['meta_value'],
	);
		return $args;
}
add_filter( 'rest_products_query', 'post_meta_request_params', 99, 2 );


/**
 * Factory Form Function
 *
 * @return  void
 */
function process_factory_form() {
	check_admin_referer( 'factory_form' );

	$name     = isset( $_POST['name'] ) ?: '';
	$phone1   = isset( $_POST['phone1'] ) ?: '';
	$phone2   = isset( $_POST['phone2'] ) ?: '';
	$phone3   = isset( $_POST['phone3'] ) ?: '';
	$email    = isset( $_POST['email'] ) ?: '';
	$category = isset( $_POST['category'] ) ?: '';
	$date     = isset( $_POST['date'] ) ?: '';
	$textarea = isset( $_POST['textarea'] ) ?: '';

	$response           = array();
	$response['name']   = $name;
	$response['phone1'] = $phone1;

	echo( wp_json_encode( $response ) );
	wp_die();
}

add_action( 'wp_ajax_factory_form', 'process_factory_form' );
add_action( 'wp_ajax_nopriv_factory_form', 'process_factory_form' );
