<?php
/**
 * Template Name: Factory Page
 *
 * Factory Page.
 * php version 7.3.11
 *
 * @category Page
 * @package  WordPress
 * @author   Ember Lee <emberlee0503@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html <GNU><GPLv3>
 * @link     http://rahata1.dothome.co.kr
 */

define( 'CURRENT_PAGE', 'factory' );
get_header( 'sub' );
?>

<section class="s_breadscrum breadscrum">
	<h2 class="hidden">현재경로</h2>
	<div class="l_breadscrum__items container">
		<div class="l_breadscrum__item s_breadscrum__item">
			<a 
				class="s_breadscrum__item__icon--home" 
				href="<?php echo( esc_url( get_site_url() ) ); ?>"
			>
				홈으로
			</a>
		</div>
		<div class="l_breadscrum__item s_breadscrum__item">
			<a 
				class="breadscrum__item__text"  
				href="<?php echo( esc_url( get_site_url() . '/알리미' ) ); ?>"
			>
				알리미
			</a>
		</div>
		<div class="l_breadscrum__item s_breadscrum__item">
			<a 
				class="breadscrum__item__text" 
				href="<?php echo( esc_url( get_site_url() . '/공장견학페이지/' ) ); ?>" 
			>
				공장견학신청
			</a>
		</div>
	</div>
	<a href="#" class="sprites shoplink" data-locale="header.goto_mall"
	>오뚜기 몰로 가기</a>
</section>

<section class="sub_factory container">
	<h2 class="sub_factory__title typo_content_title_bold">오뚜기 공장체험</h2>
	<ul class="sub_factory__process__container">
		<li class="sub_factory__process__item typo_content_title_small_bold js-factory-process--category">
			견학 분류 선택
		</li>
		<li class="sub_factory__process__item sprites sprites--right_arrow ">
			오른쪽화살표
		</li>
		<li class="sub_factory__process__item typo_content_title_small_bold js-factory-process--date">
			날짜선택
		</li>
		<li class="sub_factory__process__item sprites sprites--right_arrow">
			오른쪽화살표
		</li>
		<li class="sub_factory__process__item typo_content_title_small_bold js-factory-process--form">
			정보입력
		</li>
		<li class="sub_factory__process__item sprites sprites--right_arrow">
			오른쪽화살표
		</li>
		<li class="sub_factory__process__item typo_content_title_small_bold js-factory-process--complete">
			신청완료
		</li>
	</ul>
	<div class="sub_factory__content--category">
		<div class="sub_factory_category__form">
			<h3 class="sub_factory_category__form__title typo_content_title_small_bold">견학분류</h3>
			<input id="sub_factory_category__form__input--groups"  class="sub_factory_category__form__radio m_input_radio" type="radio" name="factory_form_category">
			<label for="sub_factory_category__form__input--groups" class="sub_factory_category__form__label m_input_label">
				<span class="sub_factory_category__form__label__icon m_input_radio_icon ">아이콘</span>
				<span class="sub_factory_category__form__label__text m_input_radio_text typo_content">단체견학</span>
			</label>
			<input id="sub_factory_category__form__input--individuals" class="sub_factory_category__form__radio m_input_radio" type="radio" name="factory_form_category">
			<label for="sub_factory_category__form__input--individuals" class="sub_factory_category__form__label m_input_label">
				<span class="sub_factory_category__form__label__icon m_input_radio_icon ">아이콘</span>
				<span class="sub_factory_category__form__label__text m_input_radio_text typo_content">개인견학</span>
			</label>
		</div>
		<div class="sub_factory_category__desc__container">
			<div class="sub_factory_category__desc sub_factory_category__desc__groups">
				<h3 class="sub_factory_category__desc__title typo_content_title_small_bold">단체견학</h3>
				<p class="sub_factory_category__desc__paragraph typo_content">미니버스 또는 버스를 이용하는 10명 이상의 단체 견학자</p>
			</div>
			<div class="sub_factory_category__desc sub_factory_category__desc__individuals">
				<h3 class="sub_factory_category__desc__title typo_content_title_small_bold">개인견학</h3>
				<p class="sub_factory_category__desc__paragraph typo_content">견학을 희망하는 소수의 견학자</p>
			</div>
		</div>  
	</div>
	<div class="sub_factory__content--date">
		<div class="sub_factory__date__controls">
			<div class="sub_factory__date__controls__arrow">
				<span class="sprites sprites--left_arrow">왼쪽화살표</span>
			</div>     
			<div class="sub_factory__date__controls__dates">
				<span class="sub_factory__date__controls__text_month typo_content">Sep</span>
				<span class="sub_factory__date__controls__text_date typo_content_title_bold">2019.9</span>
			</div>
			<div class="sub_factory__date__controls__arrow">
				<span class="sprites sprites--right_arrow">오른쪽화살표</span>
			</div>   
		</div>
		<div class="sub_factory__date__dates">
			<ul class="sub_factory__date__dates__header__container">
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold color_red">
					SUN
				</li>
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold">
					MON
				</li>
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold">
					TUE
				</li>
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold">
					WED
				</li>
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold">
					THU
				</li>
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold">
					FRI
				</li>
				<li class="sub_factory__date__dates__header__day typo_content_title_small_sans_bold color_blue">
					SAT
				</li>
			</ul>
			<div class="sub_factory__date__dates__content">
				<ul class="sub_factory__date__dates__content__week">
					<li class="sub_factory__date__dates__content__day" data-day="1">
						<span class="sub_factory__date__dates__content__day__value color_red">1</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="2">
						<span class="sub_factory__date__dates__content__day__value">2</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="3">
						<span class="sub_factory__date__dates__content__day__value">3</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="4">
						<span class="sub_factory__date__dates__content__day__value">4</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="5">
						<span class="sub_factory__date__dates__content__day__value">5</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="6">
						<span class="sub_factory__date__dates__content__day__value">6</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="7">
						<span class="sub_factory__date__dates__content__day__value color_blue">7</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
				</ul>
				<ul class="sub_factory__date__dates__content__week">
					<li class="sub_factory__date__dates__content__day" data-day="8">
						<span class="sub_factory__date__dates__content__day__value color_red">8</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="9">
						<span class="sub_factory__date__dates__content__day__value">9</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="10">
						<span class="sub_factory__date__dates__content__day__value">10</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="11">
						<span class="sub_factory__date__dates__content__day__value">11</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="12">
						<span class="sub_factory__date__dates__content__day__value">12</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="13">
						<span class="sub_factory__date__dates__content__day__value">13</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="14">
						<span class="sub_factory__date__dates__content__day__value color_blue">14</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
				</ul>
				<ul class="sub_factory__date__dates__content__week">
					<li class="sub_factory__date__dates__content__day" data-day="15">
						<span class="sub_factory__date__dates__content__day__value color_red">15</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="16">
						<span class="sub_factory__date__dates__content__day__value">16</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="17">
						<span class="sub_factory__date__dates__content__day__value">17</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="18">
						<span class="sub_factory__date__dates__content__day__value">18</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="19">
						<span class="sub_factory__date__dates__content__day__value">19</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="20">
						<span class="sub_factory__date__dates__content__day__value">20</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="21">
						<span class="sub_factory__date__dates__content__day__value color_blue">21</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
				</ul>
				<ul class="sub_factory__date__dates__content__week">
					<li class="sub_factory__date__dates__content__day" data-day="22">
						<span class="sub_factory__date__dates__content__day__value color_red">22</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="23">
						<span class="sub_factory__date__dates__content__day__value">23</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="24">
						<span class="sub_factory__date__dates__content__day__value">24</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="25">
						<span class="sub_factory__date__dates__content__day__value">25</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="26">
						<span class="sub_factory__date__dates__content__day__value">26</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="27">
						<span class="sub_factory__date__dates__content__day__value">27</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="28">
						<span class="sub_factory__date__dates__content__day__value color_blue">28</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
				</ul>
				<ul class="sub_factory__date__dates__content__week">
					<li class="sub_factory__date__dates__content__day" data-day="29">
						<span class="sub_factory__date__dates__content__day__value color_red">29</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>
					<li class="sub_factory__date__dates__content__day" data-day="30">
						<span class="sub_factory__date__dates__content__day__value">30</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>         
					<li class="sub_factory__date__dates__content__day js-blank">
						<span class="sub_factory__date__dates__content__day__value">30</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>         
					<li class="sub_factory__date__dates__content__day js-blank">
						<span class="sub_factory__date__dates__content__day__value">30</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>         
					<li class="sub_factory__date__dates__content__day js-blank">
						<span class="sub_factory__date__dates__content__day__value">30</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>         
					<li class="sub_factory__date__dates__content__day js-blank">
						<span class="sub_factory__date__dates__content__day__value">30</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>         
					<li class="sub_factory__date__dates__content__day js-blank">
						<span class="sub_factory__date__dates__content__day__value">30</span>
						<span class="sub_factory__date__dates__content__day__weather__text"></span>
						<span class="sub_factory__date__dates__content__day__weather__icon">아이콘</span>
					</li>         
				</ul>
			</div>
		</div>
		<div class="sub_factory__date__form">
			<h3 class="sub_factory__date__form__title typo_content_title_small_bold">날짜선택</h3>
			<div>
				<select id="sub_factory__date__form__month" class="sub_factory__date__form__month"> 
					<option>9</option>
				</select>
				<span class="sub_factory__date__form__text">월</span>
				<select id="sub_factory__date__form__day" class="sub_factory__date__form__day">
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<span class="sub_factory__date__form__text">일</span>
			</div>
		</div>
	</div>
	<div class="sub_factory__content--form">
		<div class="sub_factory__form__container sub_factory__form__applicant">
			<h3 class="sub_factory__form__bigtitle sub_factory__form__applicant__title ">신청자정보</h3>
			<div class="sub_factory__form__item__container sub_factory__form__applicant__name">
				<h4 class="sub_factory__form__title sub_factory__form__applicant__name__title">이름<span class="color_red">*</span></h4>
				<input id="sub_factory__form__applicant__name__input" class="sub_factory__form__applicant__name__input m_input_text" type="text">
			</div>
			<div class="sub_factory__form__item__container sub_factory__form__applicant__phone">
				<h4 class="sub_factory__form__title sub_factory__form__applicant__phone__title">휴대폰번호<span class="color_red">*</span></h4>
				<div>
					<input id="sub_factory__form__applicant__phone__input1" class="m_input_text sub_factory__form__applicant__phone__input1" type="text">
					<span class="sub_factory__form__applicant__phone__hyphen">-</span>
					<input id="sub_factory__form__applicant__phone__input2" class="m_input_text sub_factory__form__applicant__phone__input2 " type="text">
					<span class="sub_factory__form__applicant__phone__hyphen">-</span>
					<input id="sub_factory__form__applicant__phone__input3" class="m_input_text sub_factory__form__applicant__phone__input3 " type="text">
				</div>
			</div>
			<div class="sub_factory__form__item__container sub_factory__form__applicant__email">
				<h4 class="sub_factory__form__title sub_factory__form__applicant__email__title">이메일<span class="color_red">*</span></h4>
				<input id="sub_factory__form__applicant__email__input" class="m_input_text sub_factory__form__applicant__email__input" type="text">
			</div>
			<p class="sub_factory__form__item__container sub_factory__form__applicant__validate typo_content_small color_red">
				필수항목을 입력해주세요.
			</p>
		</div>
		<div class="sub_factory__form__container sub_factory__form__category">
			<h3 class="sub_factory__form__bigtitle sub_factory__form__category__title">견학분류</h3>
			<p class="sub_factory__form__category__text">개인견학</p>
		</div>
		<div class="sub_factory__form__container sub_factory__form__date">
			<h3 class=" sub_factory__form__bigtitle sub_factory__form__date__title">방문일자</h3>
			<p class="sub_factory__form__date__text">2019년 9월 2일</p>
		</div>
		<div class="sub_factory__form__container sub_factory__form__require">
			<h3 class="sub_factory__form__bigtitle sub_factory__form__require__title">요청사항</h3>
			<textarea class="m_input_textarea sub_factory__form__require__textarea"></textarea>
		</div>
	</div>
	<div class="sub_factory__content--complete">
		<h2 class="typo_title_small_bold sub_factory_complete__title color_red">신청이 완료되었습니다.</h2>
		<p class="sub_factory_complete__desc color_black75">
			수 일 내에 입력하신 연락처로 연락 드리겠습니다.<br>
			감사합니다.
		</p>
	</div>

	<div class="sub_factory_buttons">
		<span class="sub_factory_button--prev m_button--round--grey typo_content_title_small">이전</span>
		<span class="sub_factory_button--next m_button--round--red typo_content_title_small color_white">다음</span>
		<span class="sub_factory_button--cancel m_button--round--grey typo_content_title_small">취소</span>
	</div>
	<div class="sub_factory_admin">
		<div class="sub_factory_admin__logo__container">
			<span class="sub_factory_admin__logo sprites sprites--logo--89">로고</span>
		</div>    
		<div class="sub_factory_admin__titles">
			<ul class="sub_factory_admin__title_container">
				<li class="sub_factory_admin__title typo_content_serif_bold">
					주소
				</li>
				<li class="sub_factory_admin__title typo_content_serif_bold">
					문의처
				</li>
				<li class="sub_factory_admin__title typo_content_serif_bold">
					담당자 이메일
				</li>
			</ul>
		</div>
		<div class="sub_factory_admin__contents">
			<ul class="sub_factory_admin__content__container">
				<li class="sub_factory_admin__content color_black75">
					(14060) 경기도 안양시 동안구 흥안대로 405 (평촌동 160)
				</li>
				<li class="sub_factory_admin__content color_black75">
					000-000-0000
				</li>
				<li class="sub_factory_admin__content color_black75">
					damdangja&commat;gotttugi.email
				</li>
			</ul>
		</div>
	</div>
</section>

<?php
get_footer( 'sub' );
?>
