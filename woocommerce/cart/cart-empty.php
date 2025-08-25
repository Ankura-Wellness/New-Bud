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

$product= wc_get_product();
// print_r($product);

get_header( null , [ 'title' => 'Cart' ] ); ?>

<div class="container">
	<div class="row">
		<div class="col-12 zsiBreadcrumb">
			<a href="/shop">
				Shop
			</a>
		</div>
	</div>
</div>

<?php
get_footer( 'shop' );
