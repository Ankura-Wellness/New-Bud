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

<div class="container">
	<div class="row">
		<div class="col-12 zsiBreadcrumb">
			<a href="/shop">
				Shop
			</a>
			/
			<a href="/shop#cashew">
				<?php echo esc_html( get_the_category_by_ID(  $product->category_ids[0] ) ); ?>
			</a>
			/
			<?php print_r($product->name) ?>
		</div>
	</div>
</div>

<div class="container">
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
			<h1 class="primaryFont">
				<?php print_r($product->name) ?>
			</h1>
			<?php
				if($product->stock_status == 'outofstock')
					echo '<h6 class="numberFont">Out of Stock</h6>';
				else
					echo do_shortcode('[jgm-preview-badge id="'.$product->id.'"]');
			?>
			<h4 class="zsiPrice mb-3">
				<span>
					<?php  print_r($product->price) ?>
				</span>
				<!-- <span class="badge bg-warning">
					Sale
				</span> -->
			</h4>
			<div class="preUpdate" ng-class="cartManagerCtrl.updated() && !(cartManagerCtrl.getCartItemsTotal() > 9) ? 'ready' : ''">
				<button class="btn btn-warning w-100 addToCart" data-itemname="<?php echo esc_html( $product->name ); ?>" data-itemid="<?php echo esc_html( $product->id ); ?> " data-itemprice="<?php echo esc_html( $product->price ); ?>"  data-itemcategory1="<?php echo esc_html( get_the_category_by_ID(  $product->category_ids[0] ) ); ?>" data-itemquantity="1"  ng-click="cartManagerCtrl.addToCart(<?php  print_r($product->id) ?>,true)">
					Add to Cart
				</button>
				<a class="btn btn-outline-warning mt-3 w-100 checkout" data-data-itemprice="<?php  print_r($product->price) ?>" href="<?php print_r($woocommerce->cart->get_checkout_url().'?add-to-cart='.$product->id.'&quantity=1') ?>">
					Buy Now
				</a>
			</div>
			<div class="preHidden" ng-class="(cartManagerCtrl.updated() && cartManagerCtrl.getCartItemsTotal() > 9) ? 'ready' : ''">
				<p class="text-danger secondaryFont text-center align-middle" style="font-size: 14px;font-weight: 700;margin:10px 15px 0 0;">
					<span style="font-weight: 900">
						Cart Full
					</span>
					A maximum of 10 items may be included in a single order.
				</p>
			</div>
			<div class="d-flex align-items-center justify-content-center zsiFeatures mt-4">
				<div>
					<img src="https://zantyes.com/wp-content/uploads/2021/08/Organic.png" alt="">
                    <h5 class="primaryFont mb-3 text-center">
                        100% Organic
                    </h5>
				</div>
				<div>
					<img src="https://zantyes.com/wp-content/uploads/2021/08/LocallyFarmed.png" alt="">
                    <h5 class="primaryFont mb-3 text-center">
						Locally Farmed
                    </h5>
				</div>
				<div>
					<img src="https://zantyes.com/wp-content/uploads/2021/08/PremiumQuality.png" alt="">
                    <h5 class="primaryFont mb-3 text-center">
						Premium Quality
                    </h5>
				</div>
				<div>
					<img src="https://zantyes.com/wp-content/uploads/2021/08/LocallyFarmed.png" alt="">
                    <h5 class="primaryFont mb-3 text-center">
                        Authentic
                    </h5>
				</div>	
			</div>
			<hr>
			<div class="zsiShortDescription mt-3 row justify-content-center">
				<div class="col-10">
					<?php print_r($product->short_description) ?>
				</div>
			</div>
			<div class="zsiSharing">
				<a href="https://www.facebook.com/sharer.php?u=<?php  echo get_permalink( $product->ID ) ?>">
					<i class="fa-brands fa-square-facebook">
					</i>
					Share
				</a>
				<a href="https://twitter.com/share?text=Zantye's Authentic Cashew&url=<?php echo $product->get_permalink() ?>">
					<i class="fa-brands fa-x-twitter">
					</i>
					Tweet
				</a>
				<a href="mailto:?subject=Zantye's Authentic Cashew&body='<?php echo $product->get_permalink() ?>">
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
</div>

<?php get_template_part( 'partials/about-us.partials' ); ?>
<hr>
<section class="container zsiCatalogue my-5">
	<h2 class="primaryFont">
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
