<?php
/**
 * Product List Template
 *
 * Product List Template.
 * php version 7.3.11
 *
 * @category Template
 * @package  WordPress
 * @author   Ember Lee <emberlee0503@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html <GNU><GPLv3>
 * @link     http://rahata1.dothome.co.kr
 */

$current_id = get_the_ID();
?>
<div
	data-href="/product_detail.html" 
	class="js-href product_list__item l_product_list__item s_product_list__item 
				<?php echo ( esc_html( get_post_meta( $current_id, 'sortingClass', true ) ) ); ?>
				"
	data-popular="<?php echo ( esc_html( get_post_meta( $current_id, 'popular', true ) ) ); ?>" 
	data-recent="<?php echo ( esc_html( get_post_meta( $current_id, 'recent', true ) ) ); ?>" 
	data-views="<?php echo ( esc_html( get_post_meta( $current_id, 'views', true ) ) ); ?>"
>
	<img
		src="<?php echo ( esc_html( the_post_thumbnail_url() ) ); ?>" 
		alt="<?php the_title(); ?>" 
		class="l_product_list__item__contents__image s_product_list__item__contents__image"
	>
	<h4 class=" s_product_list__item__contents__title">
		<?php the_title(); ?>
	</h4>
</div>
