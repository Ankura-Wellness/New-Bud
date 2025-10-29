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
};
// <!-- <img src=" <?php wp_get_attachment_url($args['data']['product']->id,'thumbnail') get_post_permalink($args['data']['product']->id)  '..'" alt="">
?>

<!-- <div class="col-6 col-sm-4 col-md-3 product"> -->
<div class="card mb-2">
    <div class="card-body">
        <div class="card-title d-flex justify-content-between align-items-center">
            <h2 class="heroFont">
                #<?php echo $args['data']['order']->id?>&nbsp;
                <small>
                    <?php
                        echo $args['data']['order']->get_status()
                    ?>
                </small>
            </h2>
            <h6>
                <?php
                    echo $args['data']['order']->get_date_created()->date('Y-m-d H:i:s')
                ?>
            </h6>
        </div>
        <ul class="list-group">
            <?php foreach( $args['data']['order']->get_items() as $items_id => $item )
                get_template_part( 'woocommerce/myaccount/order_item',null,['class' => 'col-6 col-sm-4 col-md-3','data' => [ 'item' => $item ] ] );
            ?>
        </ul>
    </div>
</div>