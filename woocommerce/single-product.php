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

get_header( null , [ 'title' => '' ] ); ?>


<section id="nbSingleProduct" class="container">
	<div class="row my-3">
		<div class="col-12 nbBreadcrumb">
			<a class="heroFont" href="/shop">
				Shop
			</a>
			/
			<a class="heroFont" href="/shop#cashew">
				<?php echo esc_html( get_the_category_by_ID(  $product->category_ids[0] ) ); ?>
			</a>
			/
			<span class="heroFont">
				<?php print_r($product->name) ?>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 position-sticky">
			<?php
				$gallery_image_ids[0] = get_post_thumbnail_id( $product->id );
				$gallery_image_ids = array_merge($gallery_image_ids,$product->get_gallery_image_ids());
			?>
			<ul id="lightSlider">
				<?php
					foreach ($gallery_image_ids as $image_id) {
						$gallery_image_html = wp_get_attachment_url($image_id, 'full');
						print_r('<li data-thumb="'.$gallery_image_html.'" data-src="'.$gallery_image_html.'"><img src="'.$gallery_image_html.'"/></li>');
					}
				?>
				<!-- <li data-thumb="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front.jpg" data-src="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front.jpg">
    				<img src="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front.jpg"/>
  				</li>
  				<li data-thumb="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front.jpg" data-src="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front.jpg">
    				<img src="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front.jpg" />
  				</li> -->
			</ul>
		</div>
		<div class="col-12 col-md-6" ng-controller="cart">
			<h1 class="primaryFont fw-bold">
				<?php print_r($product->name) ?>
			</h1>
			<h6>
				<?php if ( $product->is_type( 'variable' ) ) {
						$variation_ids = $product->get_children();
						echo '<p>Select '. explode('_',array_values(array_keys($product->get_variation_attributes()))[0])[1] .' : </p>';
						// echo '<div class="d-none">{{ currentVariationId = '.wc_get_product( $variation_ids[0] )->variation_id .'  }}</div>';
						foreach ( $variation_ids as $variation_id ){
							$variation = wc_get_product( $variation_id );
							// print_r($variation);
							echo '<button class="btn mb-2 me-2 " ng-class=" \''.esc_html($variation->variation_id).'\' == currentVariationId ? \'btn-secondary\' : \'btn-outline-secondary\'" ng-click="selectVariation('.esc_html($variation->variation_id).','.esc_html($variation->get_price()).','.esc_html($variation->get_regular_price()).')">'.esc_html( $variation->get_attribute( 'weight' ) ).'</button>';
						}
					} else
						echo esc_html( (float)$product->weight*1000 ).'gms';
				?>
				<span class="text-secondary">
					<?php
					if($product->stock_status == 'outofstock')
						echo 'Coming Soon';
					?>
				</span>
			</h6>
			
			<h4 class="mb-3" ng-class="currentPrice > 0 ? 'nbPrice' : ''">
				<span>
					{{ currentPrice > 0 ? currentPrice : 'Select option to get price' }}
					
				</span>
				<small class="text-decoration-line-through" ng-class="regularPrice > currentPrice ? '' : 'd-none'">
					{{ regularPrice }}
				</small>
			</h4>
			<div class="preUpdate" ng-class="cartManagerCtrl.updated() && !(cartManagerCtrl.getCartItemsTotal() > 9) ? 'ready' : ''">
				<button class="btn btn-custom w-100 addToCart" ng-class="currentPrice > 0 ? '' : 'disabled'" data-itemname="<?php echo esc_html( $product->name ); ?>" data-itemid="<?php echo esc_html( $product->id ); ?> " data-itemprice="<?php echo esc_html( $product->price ); ?>"  data-itemcategory1="<?php echo esc_html( get_the_category_by_ID(  $product->category_ids[0] ) ); ?>" data-itemquantity="1"  ng-click="addToCart(<?php  print_r($product->id) ?>,true)" <?php echo $product->stock_status == 'outofstock' ? 'disabled' : '' ?>>
					Add to Cart
				</button>
				<!-- <a class="btn btn-custom dark mt-3 w-100 checkout" data-data-itemprice="<?php  print_r($product->price) ?>" href="<?php print_r($woocommerce->cart->get_checkout_url().'?add-to-cart='.$product->id.'&quantity=1') ?>" <?php echo $product->stock_status == 'outofstock' ? 'style="pointer-events:none;opacity: 0.8;"' : '' ?>>
					Buy Now
				</a> -->
			</div>
			<!-- <div class="preHidden" ng-class="(cartManagerCtrl.updated() && cartManagerCtrl.getCartItemsTotal() > 9) ? 'ready' : ''">
				<p class="text-danger secondaryFont text-center align-middle" style="font-size: 14px;font-weight: 700;margin:10px 15px 0 0;">
					<span style="font-weight: 900">
						Cart Full
					</span>
					A maximum of 10 items may be included in a single order.
				</p>
			</div> -->
			<div class="d-flex align-items-center justify-content-center nbFeatures mt-4">
				<div>
					<img src="http://ankurah.com/wp-content/uploads/2025/04/planting.png">
                    <h5 class="heroFont mb-3 text-center">
                        Directly From Farm
                    </h5>
				</div>
				<div>
					<img src="http://ankurah.com/wp-content/uploads/2025/09/organic.png">
                    <h5 class="heroFont mb-3 text-center">
						Grown Organically
                    </h5>
				</div>
				<div>
					<img src="http://ankurah.com/wp-content/uploads/2025/09/sprout.png">
                    <h5 class="heroFont mb-3 text-center">
						Heirloom Seed Variety
                    </h5>
				</div>	
			</div>
			<hr>
			<div class="nbShortDescription mt-3 row justify-content-center">
				<div class="col-10">
					<p class="text-justify primaryFont">
						<?php print_r($product->short_description) ?>
					</p>
				</div>
			</div>
			<div class="nbSharing">
				<a href="https://www.facebook.com/sharer.php?u=<?php  echo get_permalink( $product->ID ) ?>">
					<i class="fa-brands fa-square-facebook">
					</i>
					Share
				</a>
				<a href="https://twitter.com/share?text=Ankuräḫ | Farm to Home Products&url=<?php echo $product->get_permalink() ?>">
					<i class="fa-brands fa-x-twitter">
					</i>
					Tweet
				</a>
				<a href="mailto:?subject=Ankuräḫ | Farm to Home Products&body='<?php echo $product->get_permalink() ?>">
					<i class="fa-solid fa-envelope">
					</i>
					Email
				</a>
				<a href="//wa.me/?text=Try our product?url=<?php echo $product->get_permalink() ?>">
					<i class="fa-brands fa-whatsapp">
					</i>
					Whatsapp
				</a>
			</div>
			<?php get_template_part( 'partials/cart-full-message.partials' ); ?>
		</div>
	</div>
</section>
<section id="nbProductDescription" class="container-fluid my-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-4 d-flex align-item-center justify-content-center">
				<?php print_r('<img class="mt-5 my-0 my-md-5 mt-lg-0" style="aspect-ratio: 1/1; border-radius: 0 0 10px 10px" src="'.wp_get_attachment_url($gallery_image_ids[0], 'full').'"/>'); ?>
			</div>
			<div class="col-12 col-md-6 d-flex align-items-center flex-column justify-content-center">
				<h2 class="heroFont primaryText primaryText mt-5 mb-0" style="font-size: 45px;">
					What's So Special Here?
				</h2>
				<p class="text-center text-md-start">
					<?php print_r($product->description) ?>
				</p>
			</div>
		</div>
	</div>
</section>
<?php get_template_part( 'partials/our-motive.partials' ); ?>
<hr>
<section class="container zsiCatalogue my-5">
	<h2 class="heroFont mb-3">
		Related Products
	</h2>
	<div class="row">
		<?php
			$products = wc_get_related_products($product->get_id(), 4);
			foreach($products as $product){
				$product = wc_get_product( $product );
				get_template_part( 'woocommerce/sample-product',null,['class' => 'col-6 col-sm-4 col-md-3','data' => [ 'product' => $product ] ] );
			}
		?>
	</div>
</section>
<script>
  	jQuery(document).ready(function() {
		jQuery("#lightSlider").lightSlider({
			gallery:true,
			item:1,
			loop:true,
			thumbItem:9,
			slideMargin:0,
			enableDrag: false,
			currentPagerPosition:'left',
			onSliderLoad: function(el) {
				el.lightGallery({
					selector: '#lightSlider .lslide'
				});
			}   
		});
  	});
</script>
<?php
get_footer( 'shop' );
