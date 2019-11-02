<?php
/**
 *
 * Index Page.
 * php version 7.3.11
 *
 * @category Page
 * @package  WordPress
 * @author   Ember Lee <emberlee0503@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html <GNU><GPLv3>
 * @link     http://rahata1.dothome.co.kr
 */

get_header( 'sub' );
?>

<section class="s_breadscrum breadscrum">
	<h2 class="hidden">현재경로</h2>
	<div class="l_breadscrum__items container">
		<div class="l_breadscrum__item s_breadscrum__item">
			<a class="s_breadscrum__item__icon--home" href="<?php echo( esc_url( get_site_url() ) ); ?>">
				홈으로
			</a>
		</div>
	</div>
	<a href="#" class="sprites shoplink" data-locale="header.goto_mall"
	>오뚜기 몰로 가기</a>
</section>

<section id="content" class="sub_factory container">
현재 제품 페이지, 알리미 > 공장견학 페이지만 이용 가능합니다. 
</section>


<?php
get_footer( 'sub' );
?>
