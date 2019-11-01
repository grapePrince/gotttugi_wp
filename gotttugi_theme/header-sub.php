<?php
/**
 * Header for Front Page
 *
 * PHP version 7.3.11
 *
 * @category Header
 * @package  WordPress
 * @author   Ember Lee <emberlee0503@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html <GNU><GPLv3>
 * @link     http://rahata1.dothome.co.kr
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php
			bloginfo( 'name' );
		?>
			| 
		<?php
			is_front_page() ? bloginfo( 'description' ) : wp_title( '' );
		?>
	</title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta
		name="keywords"
		content="오뚜기, 진라면, 카레, 케찹, 진쫄, 마요네즈, 전복죽"
	/>
	<meta
		name="description"
		content="오뚜기 식품에서는 다양한 종류의 식료품들을 취급합니다. "
	/>
	<meta name="robots" content="index,follow" />

	<!-- favicon -->
	<link
		rel="apple-touch-icon"
		sizes="57x57"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-57x57.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="60x60"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-60x60.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="72x72"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-72x72.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="76x76"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-76x76.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="114x114"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-114x114.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="120x120"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-120x120.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="144x144"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-144x144.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="152x152"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-152x152.png' ) ); ?>"
	/>
	<link
		rel="apple-touch-icon"
		sizes="180x180"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-180x180.png' ) ); ?>"
	/>
	<link
		rel="icon"
		type="image/png"
		sizes="192x192"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/apple-icon-192x192.png' ) ); ?>"
	/>
	<link
		rel="icon"
		type="image/png"
		sizes="32x32"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/favicon-32x32.png' ) ); ?>"
	/>
	<link
		rel="icon"
		type="image/png"
		sizes="96x96"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/favicon-96x96.png' ) ); ?>"
	/>
	<link
		rel="icon"
		type="image/png"
		sizes="16x16"
		href="<?php echo( esc_url( BASE_URI . '/images/favicon/favicon-16x16.png' ) ); ?>"
	/>
	
	<meta name="msapplication-TileColor" content="#ffffff" />
	<meta
		name="msapplication-TileImage"
		content="<?php echo( esc_url( BASE_URI . '/images/favicon/ms-icon-144x144.png' ) ); ?>"
	/>
	<meta name="theme-color" content="#ffffff" />

	<!-- OG TAG -->
	<meta property="og:title" content="오뚜기 홈페이지" />
	<meta property="og:type" content="website" />
	<meta
		property="og:description"
		content="오뚜기 식품에서는 다양한 종류의 식료품들을 취급합니다."
	/>
	<meta
		property="og:image"
		content="<?php echo( esc_url( BASE_URI . '/images/favicon/android-icon-192x192.png' ) ); ?>"
	/>
	<meta property="og:url" content="http://www.rahata1.dothome.co.kr" />

</head>
<body 
<?php
if ( defined( 'CURRENT_PAGE' ) && CURRENT_PAGE === 'product_list' ) {
	body_class( 'sub js-product_list' );
} elseif ( defined( 'CURRENT_PAGE' ) && CURRENT_PAGE === 'product_detail' ) {
	body_class( 'sub js-product_detail' );
} elseif ( defined( 'CURRENT_PAGE' ) && CURRENT_PAGE === 'search_result' ) {
	body_class( 'sub js-search_result' );
} else {
	body_class( 'sub' );
}
?>
>     
<div 
	id="uri_info" 
	class="hidden" 
	data-base_uri="<?php echo( esc_url( BASE_URI ) ); ?>" 
	data-root_uri="<?php echo esc_url( get_site_url() ); ?>">
</div>
<a href="#content" class="skip_navigation"><span>컨텐츠 바로가기</span></a>
<header class="container">
	<h1>
		<a href="index.html" class="sprites logo" data-locale="header.logo">로고</a>
	</h1>
	<nav>
		<ul class="clearfix">
			<li data-class="corporation">
				<a href="#" data-locale="nav.introduce">오뚜기소개</a>
				<ul>
					<li>
						<a href="#" data-locale="nav.introduce.ottugi">(주)오뚜기</a>
					</li>
					<li>
						<a href="#" data-locale="nav.introduce.ottugi">인재채용</a>
					</li>
					<li>
						<a href="#" data-locale="nav.introduce.ottugi">투자정보</a>
					</li>
					<li>
						<a href="#" data-locale="nav.introduce.ottugi">찾아오시는길</a>
					</li>
				</ul>
			</li>
			<li data-class="products">
				<a href="#" data-locale="nav.products">제품정보</a>
				<ul>
					<li>
						<a href="product_list.html" data-locale="nav.products.source">소스류</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.powder">분말/건조</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.retort">레토르트/간편식</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.freeze">냉장/냉동식품</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.enrich_marine"
							>농/축/수산</a
						>
					</li>
					<li><a href="product_list.html" data-locale="nav.products.tea">차종류</a></li>
					<li>
						<a href="product_list.html" data-locale="nav.products.oil">버터/식용유</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.spice">향신료</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.ramens">라면류</a>
					</li>
					<li>
						<a href="product_list.html" data-locale="nav.products.cereal">곡류가공</a>
					</li>
				</ul>
			</li>
			<li data-class="recipe">
				<a href="#" data-locale="nav.recipe">요리마당</a>
				<ul>
					<li>
						<a href="#" data-locale="nav.media.media_main">오뚜기레시피</a>
					</li>
				</ul>
			</li>
			<li data-class="media">
				<a href="#" data-locale="nav.media">알리미</a>
				<ul>
					<li>
						<a href="#" data-locale="nav.media.media_main"
							>미디어속오뚜기</a
						>
					</li>
					<li>
						<a href="factory.html" data-locale="nav.media.excursion">공장견학신청</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="background">
			<img
				class="corporation"
				src="<?php echo( esc_url( BASE_URI . '/images/header_corporation.png' ) ); ?>"
				alt="header_corporation"
			/>
			<img
				class="products"
				src="<?php echo( esc_url( BASE_URI . '/images/header_products.png' ) ); ?>"
				alt="header_products"
			/>
			<img
				class="recipe"
				src="<?php echo( esc_url( BASE_URI . '/images/header_recipe.png' ) ); ?>"
				alt="header_recipe"
			/>
			<img
				class="media"
				src="<?php echo( esc_url( BASE_URI . '/images/header_media.png' ) ); ?>"
				alt="header_media"
			/>
			<div class="sprites close">닫기</div>
		</div>
	</nav>
	<div class="upper_nav_dummy hidden_text">빈Div</div>
	<div class="upper_nav">
		<span class="circle_icon menu">
			<span class="sprites icon" data-locale="header.menu">메뉴</span>
		</span>
		<span class="circle_icon option">
			<span class="sprites icon" data-locale="header.option">환경설정</span>
		</span>
		<div class="option_content">
			<div class="circle_icon search option_content__item">
				<span class="sprites icon" data-locale="header.search">검색</span>
				<span class="text">검색하기</span>
			</div>
			<div class="circle_icon help option_content__item">
				<span class="sprites icon" data-locale="header.help"
					>고객센터</span
				>
				<span class="text">고객센터</span>
			</div>
			<div class="circle_icon locale dropdown_menu option_content__item">
				<span class="sprites icon" data-locale="header.locale"
					>언어변경</span
				>
				<span class="window">
					<span class="text">언어변경</span>
					<span class="arrow"><i class="fas fa-sort"></i></span>
				</span>
				<ul class="dropdown_content">
					<li>한글</li>
					<li>ENG</li>
				</ul>
			</div>
		</div>
		<div class="search_input">
			<form method="get" action="<?php bloginfo( 'url' ); ?>">
				<input 
					type="text" 
					name="s"
				/>
				<span></span>
				<input 
					class="sprites search_button" 
					type="button" 
					value="검색" 
				/>
			</form>
		</div>		
	</div>  
</header>

