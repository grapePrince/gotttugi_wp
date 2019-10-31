<?php
/**
 * Products Single Page
 * php version 7.3.11
 *
 * @category Single Page
 * @package  WordPress
 * @author   Ember Lee <emberlee0503@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html <GNU><GPLv3>
 * @link     http://rahata1.dothome.co.kr
 */

define( 'CURRENT_PAGE', 'product_detail' );
get_header( 'sub' );

while ( have_posts() ) {
	the_post();
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
			<a class="breadscrum__item__text" href="/product_detail.html">
				제품상세
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

<section class="product_details l_product_details s_product_details container">
	<div class="l_product_details__back s_product_details_back">
		<div class="s_product_details_back__icon">로고</div>
	</div>

	<div class="l_product_details__header">
		<div class="l_product_details__header__title s_product_details__header__title">
			<?php the_title(); ?>
		</div>
		<div class="l_product_details__header__line s_product_details__header__line hidden_text">-</div>
		<div class="s_product_details__header__breadcrums">
			<?php the_field( 'sortingClassLabel' ); ?>
		</div>
	</div>
	<div class="l_product_details__main">
		<div class="l_product_details__main__left s_product_details__main__left">			
			<?php
			if ( the_title( '', '', false ) === '진라면' ) {
				?>
				<div class="l_product_details__main__left__image">
					<div class="perspective">
						<div class="cube">
							<div class="front">
								<img
									src="<?php echo( esc_url( BASE_URI . '/images/product_main_1.png' ) ); ?>"
									alt="진라면앞모습"
								>
							</div>
							<div class="back">
								<img
									src="<?php echo( esc_url( BASE_URI . '/images/product_main_3.png' ) ); ?>"
									alt="진라면옆모습"
								>
							</div>
							<div class="left side">
								<img
									src="<?php echo( esc_url( BASE_URI . '/images/product_main_2.png' ) ); ?>"
									alt="진라면왼쪽모습"
								>
							</div>
							<div class="right side">
								<img
									src="<?php echo( esc_url( BASE_URI . '/images/product_main_4.png' ) ); ?>"
									alt="진라면오른쪽모습"
								>
							</div>
						</div>
					</div>
				</div>
				<div class="l_product_details__main__left__desc">
					<div class="l_product_details__main__left__text s_product_details__main__left__text">돌리려면클릭</div>
					<div class="product_details__main__left__icon s_product_details__main__left__icon">회전아이콘</div>
				</div>
				<?php
			} else {
				?>
				<div class="l_product_details__main__left__image">
					<img
						src="<?php echo ( esc_html( the_post_thumbnail_url() ) ); ?>" 
						alt="상품이미지"
					>
				</div>
				<?php
			}
			?>
		</div>
		<div class="l_product_details__main__right">
			<div class="l__product_details__main__right__desc s__product_details__main__right__desc">
				<?php the_content(); ?>
			</div>
			<div class="l__product_details__main__right__attrs">
				<div class="l__product_details__main__right__attr">
					<div class="s__product_details__main__right__attr__icon--weight">
						중량
					</div>
					<h4 class="l__product_details__main__right__attr__text s__product_details__main__right__attr__text">
						중량: 
						<span 
							class="product_details__main__right__attr" 
							data-number="<?php the_field( 'weight' ); ?>"
						>
							0
						</span>
						g
					</h4>
				</div>
				<div class="l__product_details__main__right__attr">
					<div class="s__product_details__main__right__attr__icon--kcal">
						열량
					</div>
					<h4 class="l__product_details__main__right__attr__text s__product_details__main__right__attr__text">
						열량: 
						<span 
							class="product_details__main__right__attr" 
							data-number="<?php the_field( 'kcal' ); ?>"
						>
							0
						</span>
						kcal
					</h4>
				</div>
				<div class="l__product_details__main__right__attr">
					<div class="s__product_details__main__right__attr__icon--calendar">
						출시일
					</div>
					<h4 
						class="l__product_details__main__right__attr__text 
										s__product_details__main__right__attr__text"
					>
						출시일: 
						<span 
							class="product_details__main__right__attr" 
							data-number="<?php the_field( 'releaseYear' ); ?>"
						>
							0
						</span>
						.
						<span 
							class="product_details__main__right__attr"
							data-number="<?php the_field( 'releaseMonth' ); ?>"
						>
							0
						</span>
					</h4>
				</div>
			</div>
			<div class="l__product_details__main__right__origin">
				<div class="l__product_details__main__right__origin__header s__product_details__main__right__origin__header">
					<h4 class="s__product_details__main__right__origin__header__title">
						원산지 정보 보기
					</h4>
					<div class="s__product_details__main__right__origin__header__icon">
						아래화살표
					</div>
				</div>
				<div class="l__product_details__main__right__origin__contents s__product_details__main__right__origin__contents">
					<p class="l__product_details__main__right__origin__content s__product_details__main__right__origin__content">
						<?php the_field( 'resourceInfo' ); ?>
					</p>
				</div>
			</div>
		</div>

	</div>
	<div class="l_product_details__nutrition s_product_details__nutrition">
		<table class="l_product_details__nutrition__table s_product_details__nutrition__table">
				<tr> 
					<th scope="col">영양성분표</th>
					<th scope="col">열량</th>
					<th scope="col">나트륨</th>
					<th scope="col">탄수화물</th>
					<th scope="col">당류</th>
					<th scope="col">지방</th>
					<th scope="col">트랜스지방</th>
					<th scope="col">포화지방</th>
					<th scope="col">콜레스테롤</th>
					<th scope="col">단백질</th>
				</tr>
				<tr>
					<th scope="row">120g 당 함량</th>
					<td>500kcal</td>
					<td>1,860mg </td>
					<td>80g</td>
					<td>4.6g</td>
					<td>15g</td>
					<td>0g</td>
					<td>8g</td>
					<td>0mg</td>
					<td>11g</td>
				</tr>
				<tr>
					<th scope="row">영양성분 기준치(%)</th>
					<td>%</td>
					<td>93%</td>
					<td>24%</td>
					<td>%</td>
					<td>29%</td>
					<td>%</td>
					<td>53%</td>
					<td>0%</td>
					<td>20%</td>                       
				</tr>

		</table>
		<p class="l_product_details__nutrition__desc s_product_details__nutrition__desc">% 영양성분 기준치 : 1일 영양성분 기준치에 대한 비율</p>
	</div>
	<?php
	if ( get_field( 'videoThumbnailLink' ) ) {
		?>
		<div class="l_product_details__video">
			<div class="s_product_details__video video__container">
				<video
					data-autoplay
					muted
					loop
					poster="<?php the_field( 'videoThumbnailLink' ); ?>"
				>
					<source src="<?php the_field( 'videoLinkOGV' ); ?>" type="video/ogv" />
					<source src="<?php the_field( 'videoLinkMP4' ); ?>" type="video/mp4" />
					<source src="<?php the_field( 'videoLinkWEBM' ); ?>" type="video/webm" />
					
					<span>이 브라우저는 video요소를 지원하지 않습니다.</span>
				</video>
				<div class="video__background hidden_text">마우스오버배경</div>
				<span class="video__icon sprites search_button">크게보기아이콘</span>
			</div>
		</div>
		<?php
	}
	?>
</section>
<section class="product_others s_product_others">
	<div class="l_product_others__container container">
		<h2 class="l_product_others__title s_product_others__title">이런 제품은 어떠세요?</h2>
		<div class="l_product_others__items">
			<div class="l_product_others__image js-href" data-href="/product_detail.html">
				<img
					src="<?php echo( esc_url( BASE_URI . '/images/others_1.png' ) ); ?>"
					alt="전복죽" 
					class="product_others__item">
			</div>
			<div class="l_product_others__image js-href" data-href="/product_detail.html">
				<img 
					src="<?php echo( esc_url( BASE_URI . '/images/others_2.png' ) ); ?>"
					alt="진쫄" 
					class="product_others__item"
				>
			</div>
			<div class="l_product_others__image js-href" data-href="/product_detail.html">
				<img
					src="<?php echo( esc_url( BASE_URI . '/images/others_3.png' ) ); ?>"
					alt="컵피자" 
					class="product_others__item"
				>
			</div>
		</div>
	</div>
</section>

	<?php
}

get_footer( 'sub' );
?>
