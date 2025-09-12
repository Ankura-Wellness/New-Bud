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
<div class="nbSampleProduct <?php echo esc_html( $args['class'] ); ?> <?php echo esc_html( $args['data']['product']->stock_status == 'outofstock' ? 'zsiDisabledProduct' : '' ); ?>  product">
	<a data-itemname="<?php echo esc_html( $args['data']['product']->name ); ?>" data-itemid="<?php echo esc_html( $args['data']['product']->id ); ?> " data-itemprice="<?php echo esc_html( $args['data']['product']->price ); ?>" data-itemcategory1="<?php echo esc_html( get_the_category_by_ID(  $args['data']['product']->category_ids[0]));?>" href=" <?php echo get_post_permalink($args['data']['product']->id) ?> ">
		<div class="w-100 ratio ratio-1x1 overflow-hidden">
			<img src="<?php echo wp_get_attachment_url($args['data']['product']->get_image_id(),'thumbnail') ?>" alt="" onload="">
		</div>
		<div>
		
		</div>
		<h4 class="mt-3">
			<?php echo esc_html( preg_replace('/[0-9]{0,4}\s?gms?/','',$args['data']['product']->name) ); ?>
		</h4>
		<!-- <hr> -->
		<div class="d-flex justify-content-between flex-wrap">
			<h5 class="secondaryFont text-danger fw-bold nbPrice text-nowrap">
				<span>
					<?php echo esc_html( $args['data']['product']->price ); ?>
				</span>
			</h5>
				<?php 
					if($args['data']['product']->stock_status == 'outofstock')
						echo '<h6 class="numberFont mb-0">Coming Soon</h6>';
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
	</a>
	<button class="btn btn-custom w-100 addToCart text-nowrap" data-itemname="<?php echo esc_html( $args['data']['product']->name ); ?>" data-itemid="<?php echo esc_html( $args['data']['product']->id ); ?> " data-itemprice="<?php echo esc_html( $args['data']['product']->price ); ?>" data-itemcategory1="<?php echo esc_html( get_the_category_by_ID(  $args['data']['product']->category_ids[0]));?>" data-itemquantity="1" ng-click="cartManagerCtrl.addToCart(<?php echo esc_html( $args['data']['product']->id); ?>,true)" <?php echo $args['data']['product']->stock_status == 'outofstock' ? 'disabled' : '' ?>>
		<span class="d-block d-sm-none">
			<i class="fa-solid fa-cart-plus">
			</i>
			Add
		</span> 
		<span class="d-none d-sm-block">
			Add to Cart
		</span>
	</button>
	<p>
</div>