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

$product = $args['data']['item']->get_product();
?>

<li class="list-group-item">
    <div class="d-flex">
        <img src="<?php echo wp_get_attachment_image_url($product->get_image_id()) ?>" alt="">
        <div class="d-flex flex-column ms-2">
            <h4 class="primaryFont fw-bold">
                <?php echo $args['data']['item']->get_name(); ?>
            </h4>
            <h6 class="text-muted">
                <?php echo esc_html( (float)$product->get_weight()*1000 ); ?>gms | Qty : <?php echo $args['data']['item']->get_quantity(); ?>
            </h6>
        </div>
    </div>
</li>