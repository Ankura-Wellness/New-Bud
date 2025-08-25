<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
// <!-- <img src=" <?php wp_get_attachment_url($args['data']['product']->id,'thumbnail') get_post_permalink($args['data']['product']->id)  '..'" alt="">
?>

<!-- <div class="col-6 col-sm-4 col-md-3 product"> -->
<div class=" <?php echo esc_html( $args['class'] ); ?> <?php echo esc_html( $args['data']['product']->stock_status == 'outofstock' ? 'zsiDisabledProduct' : '' ); ?>  product">
	<a class="zsi_product" data-itemname="<?php echo esc_html( $args['data']['product']->name ); ?>" data-itemid="<?php echo esc_html( $args['data']['product']->id ); ?> " data-itemprice="<?php echo esc_html( $args['data']['product']->price ); ?>" data-itemcategory1="<?php echo esc_html( get_the_category_by_ID(  $args['data']['product']->category_ids[0]));?>" href=" <?php echo get_post_permalink($args['data']['product']->id) ?> ">
		<div class="w-100 ratio ratio-1x1 overflow-hidden">
			<img src="<?php echo wp_get_attachment_url($args['data']['product']->get_image_id(),'thumbnail') ?>" alt="" onload="">
		</div>
		<div>
		
		</div>
		<h4 class="primaryFont mt-3">
			<?php echo esc_html( preg_replace('/[0-9]{0,4}\s?gms?/','',$args['data']['product']->name) ); ?>
		</h4>
		<hr>
		<div class="d-flex justify-content-between">
			<h5 class="secondaryFont text-danger fw-bold zsiPrice">
				<span>
					<?php echo esc_html( $args['data']['product']->price ); ?>
				</span>
			</h5>
			<div class="text-black-50 secondaryFont">
				<?php 
					if($args['data']['product']->stock_status == 'outofstock')
						echo '<h6 class="numberFont">Out of Stock</h6>';
					else
						echo do_shortcode('[jgm-preview-badge id="'.$args['data']['product']->id.'"]');

						// echo esc_html( $args['data']['product']->stock_status == 'outofstock' ? 'Out of Stock' : ($args['data']['product']->weight * 1000).'gms'  );
				?>
				<!-- <h6 class="numberFont">
					
				</h6> -->
				<!-- <div>
				</div> -->
				<!-- <i class="fa-solid fa-basket-shopping">
				</i>
				'. $product->total_sales .' -->
			</div>
		</div>
	</a>
	<button class="btn btn-warning w-100 addToCart" ng-disabled="cartManagerCtrl.getCartItemsTotal() > 9" data-itemname="<?php echo esc_html( $args['data']['product']->name ); ?>" data-itemid="<?php echo esc_html( $args['data']['product']->id ); ?> " data-itemprice="<?php echo esc_html( $args['data']['product']->price ); ?>" data-itemcategory1="<?php echo esc_html( get_the_category_by_ID(  $args['data']['product']->category_ids[0]));?>" data-itemquantity="1" ng-click="cartManagerCtrl.addToCart(<?php echo esc_html( $args['data']['product']->id); ?>,true)">
		Add to Cart
	</button>
	<p>
</div>