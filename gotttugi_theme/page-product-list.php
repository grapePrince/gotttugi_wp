<?php
/**
 * Template Name: Product List
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

define( 'CURRENT_PAGE', 'product_list' );
get_header( 'sub' );
?>

<section class="s_breadscrum breadscrum">
	<h2 class="hidden">현재경로</h2>
	<div class="l_breadscrum__items container">
		<div class="l_breadscrum__item s_breadscrum__item">
			<a class="s_breadscrum__item__icon--home" href="/index.html">
				홈으로
			</a>
		</div>
		<div class="l_breadscrum__item s_breadscrum__item">
			<a class="breadscrum__item__text"  href="/product_list.html">
				제품정보
			</a>
		</div>
		<div class="l_breadscrum__item s_breadscrum__item">
			<a class="breadscrum__item__text" href="/product_list.html">
				검색목록
			</a>
		</div>
	</div>
	<a href="#" class="sprites shoplink" data-locale="header.goto_mall"
	>오뚜기 몰로 가기</a>
</section>

<section class="l_product_banner s_product_banner">
	<div class="l_product_banner__container container">
		<img
			class="l_product_banner__main"
			src="<?php echo( esc_url( BASE_URI . '/images/product_banner.png' ) ); ?>"
			alt=""
		/>
		<div class="l_product_banner__details">
			<h2 class="l_product_banner__title s_product_banner__title">
				50년간 깊어진 맛,<br />
				오뚜기 3일 숙성카레
			</h2>
			<p class="l_product_banner__desc s_product_banner__desc">
				숙성카레는 3일간 정성껏 숙성시킨 소스와<br />
				은은항 향이 잘 조화된 숙성카레분을 이용한<br />
				고급 카레입니다.
			</p>
			<div class="l_product_banner_buttons">
				<div
					class="l_product_banner_button s_product_banner_button m_button--square--border js-href" data-href="/product_detail.html" 
				>
					상품 더보기
					<div class="m_button--square--border__icon--more">
						+
					</div>
				</div>
				<div
					class="l_product_banner_button s_product_banner_button m_button--square--border"
				>
					<div class="m_button--square--border__icon--shoplink">
						샵 바로가기
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="content" class="product_filter l_product_filter">
	<div class="l_product_filter_buttons">
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".all">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div class="s_product_filter_button__text">ALL</div>
			</div>
			<h4 class="s_product_filter_button__title">전체</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".source">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--1"
				>
					소스아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">소스</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".condiment">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--2"
				>
					분말/건조아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">분말/건조</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".retort">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--3"
				>
					레토르트아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">레토르트</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".fridge">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--4"
				>
					냉장/냉동아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">냉장/냉동</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".agriculture">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--5"
				>
					농/축/수산아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">농/축/수산</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".tea">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--6"
				>
					차종류아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">차종류</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".butter">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--7"
				>
					버터/식용유아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">버터/식용유</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".flavor">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--8"
				>
					향신료아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">향신료</h4>
		</div> 
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".ramen">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--9"
				>
					라면아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">라면</h4>
		</div>
		<div class="product_filter_button l_product_filter_button s_product_filter_button" data-filter=".wheat">
			<div
				class="l_product_filter_button__circle s_product_filter_button__circle"
			>
				<div
					class="s_product_filter_button__icon s_product_filter_button__icon--10"
				>
					곡류아이콘
				</div>
			</div>
			<h4 class="s_product_filter_button__title">곡류</h4>
		</div>
	</div>
	<div class="product_filter__search l_product_filter__search">
		<div class="m_search_input s_product_filter__search__input">
			<input class="m_search_input__input s_product_filter__search__input__input" type="text" placeholder="검색어를 입력하세요" />
			<span class="m_search_input__line s_product_filter__search__input__line"></span>
			<input class="m_search_input__button search_button" type="button" value="검색" />
		</div>
	</div>
</section>

<?php
	$query = new WP_Query(
		array(
			'post_type'      => 'products',
			'posts_per_page' => 4,
		)
	);
	?>

<section class="product_list container">
	<h2 class="hidden">상품목록</h2>
	<div class="l_product_list__header">
		<div class="s_product_list__header__desc">
			총 <em class="s_product_list__header__desc__em">
			<?php echo ( esc_html( $query->found_posts ) ); ?>
			</em>건의 제품이 있습니다.
		</div>
		<div class="l_product_list__header__sort">
			<div class="product_list__header__sort__button l_product_list__header__sort__button s_product_list__header__sort__button" data-sort-value="popular">인기상품</div>
			<div class="product_list__header__sort__button l_product_list__header__sort__button s_product_list__header__sort__button" data-sort-value="recent">최신순</div>
			<div class="product_list__header__sort__button l_product_list__header__sort__button s_product_list__header__sort__button" data-sort-value="views">조회순</div>
		</div>
	</div>
	<div class="product_list__list l_product_list__list s_product_list__list">     
	<?php
	while ( $query->have_posts() ) {
		$query->the_post();
		get_template_part( 'template-product-list' );
	}
	?>
	</div>
	<div class="l_product_list_loading">
		<img
			src="<?php echo( esc_url( BASE_URI . '/images/loading.gif' ) ); ?>"
			alt="" 
			class="s_product_list_loading__image"
		>
	</div>
</section>

<?php
get_footer( 'sub' );
?>
