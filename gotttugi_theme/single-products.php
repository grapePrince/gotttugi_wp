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

<section class="product_details l_product_details s_product_details container">
	<div class="l_product_details__back s_product_details_back">
		<div class="s_product_details_back__icon">로고</div>
	</div>
	<div class="l_product_details__header">
		<div class="l_product_details__header__title s_product_details__header__title">진라면 매운맛</div>
		<div class="l_product_details__header__line s_product_details__header__line hidden_text">-</div>
		<div class="s_product_details__header__breadcrums">라면류 &gt; 진라면 매운맛</div>
	</div>
	<div class="l_product_details__main">
		<div class="l_product_details__main__left s_product_details__main__left">
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
							<img src="images/product_main_3.png" alt="진라면옆모습">
						</div>
						<div class="left side">
							<img src="images/product_main_2.png" alt="진라면왼쪽모습">
						</div>
						<div class="right side">
							<img src="images/product_main_4.png" alt="진라면오른쪽모습">
						</div>
					</div>
				</div>
			</div>
			<div class="l_product_details__main__left__desc">
				<div class="l_product_details__main__left__text s_product_details__main__left__text">돌리려면클릭</div>
				<div class="product_details__main__left__icon s_product_details__main__left__icon">회전아이콘</div>
			</div>
		</div>
		<div class="l_product_details__main__right">
			<p class="l__product_details__main__right__desc s__product_details__main__right__desc">
					1988년 3월, 오래 우려낸 깊고 진한 국물을 좋아하는 한국인의 입맛을 고려하여 출시된, 국물이 <em>'진'</em>한 라면 오뚜기 진라면.<br>
					깊고 진한 국물맛은 기본, 쫄깃한 면발과 함께 순한맛과 매운 맛을 선택할 수 있는 장점으로 출시부터 지금까지 <em>남녀노소 모두가 사랑하는 대한민국 대표 라면</em>입니다.<br> 
					풍부한 야채 건더기와 얼큰하고 구수한 맛을 온가족이 함께 즐겨보시기 바랍니다. 
			</p>
			<div class="l__product_details__main__right__attrs">
				<div class="l__product_details__main__right__attr">
					<div class="s__product_details__main__right__attr__icon--weight">
						중량
					</div>
					<h4 class="l__product_details__main__right__attr__text s__product_details__main__right__attr__text">
						중량: <span class="product_details__main__right__attr" data-number="120">0</span> g
					</h4>
				</div>
				<div class="l__product_details__main__right__attr">
					<div class="s__product_details__main__right__attr__icon--kcal">
						열량
					</div>
					<h4 class="l__product_details__main__right__attr__text s__product_details__main__right__attr__text">
						열량: <span class="product_details__main__right__attr" data-number="500">0</span> kcal
					</h4>
				</div>
				<div class="l__product_details__main__right__attr">
					<div class="s__product_details__main__right__attr__icon--calendar">
						출시일
					</div>
					<h4 class="l__product_details__main__right__attr__text s__product_details__main__right__attr__text">
						출시일: <span class="product_details__main__right__attr" data-number="1988">0</span>.<span class="product_details__main__right__attr" data-number="3">3</span>
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
						면:소맥분(밀:호주산,미국산),변성전분,팜유(말레이시아산),감자전분(외국산:덴마크,프랑스,독일 등),글루텐,정제소금,유화유지,난각분말,육수추출농축액,마늘시즈닝,이스트엑기스,면류첨가알칼리제(산도조절제),구아검,비타민B2,녹차풍미유<br><br>
						스프류:정제소금,백설탕,포도당,복합양념분말,숙성마늘맛분,간장분말,볶음양념분말,육수맛분말,마늘농축조미분,고추맛베이스,로스팅맛분말,쇠고기육수분말,조미육수분말,참맛양념분말,발효복합분,진한감칠맛분,후추분말,칠리맛분말,고춧가루,감칠맛분말,참맛버섯양념분말,버섯야채조미분말,오뚜기참치간장분말,감칠맛베이스,로스팅조미분말,맛베이스,향미증진제,볶음마늘분,육수맛조미분,육수추출농축분말,참맛효모조미분말,숙성양념분말,칠리추출물,구아검,칠리혼합추출물,산도조절제,고추농축소스,조미쇠고기맛후레이크,건당근,건청경채,건파,건표고버섯,건고추입자<br>
						<br>
						<em>[밀,대두,계란,돼지고기 함유]</em><br>
						<br>
						이 제품은 <em>돼지고기,메밀,오징어,새우,게,고등어,땅콩, 조개류(굴,홍합포함)</em> 성분을 사용한 제품과 같은 제조시설에서 제조하고 있습니다.
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
	<div class="l_product_details__video">
		<div class="s_product_details__video video__container">
			<video
				data-autoplay
				muted
				loop
				poster="images/corporation_thumnail_2.jpg"
			>
				<source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031413/corporation_2_tngco7.ogv" type="video/ogv" />
				<source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031419/corporation_2_b7uhyr.mp4" type="video/mp4" />
				<source src="https://res.cloudinary.com/dsgbmcrq7/video/upload/v1564031485/corporation_2_mkwplr.webm" type="video/webm" />
				
				<span>이 브라우저는 video요소를 지원하지 않습니다.</span>
			</video>
			<div class="video__background hidden_text">마우스오버배경</div>
			<span class="video__icon sprites search_button">크게보기아이콘</span>
		</div>
	</div>
</section>
<section class="product_others s_product_others">
	<div class="l_product_others__container container">
		<h2 class="l_product_others__title s_product_others__title">이런 제품은 어떠세요?</h2>
		<div class="l_product_others__items">
			<div class="l_product_others__image js-href" data-href="/product_detail.html">
				<img src="images/others_1.png" alt="전복죽" class="product_others__item">
			</div>
			<div class="l_product_others__image js-href" data-href="/product_detail.html">
				<img src="images/others_2.png" alt="진쫄" class="product_others__item">
			</div>
			<div class="l_product_others__image js-href" data-href="/product_detail.html">
				<img src="images/others_3.png" alt="컵피자" class="product_others__item">
			</div>
		</div>
	</div>
</section>

<?php
get_footer( 'sub' );
?>
