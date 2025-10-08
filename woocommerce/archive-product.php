<?php
/**
 *  Archive File - /shop
 *  @2ndInning
 */

defined( 'ABSPATH' ) || exit;

get_header(null,[ 'title' => '' ] );
?>

<!-- <section class="container-fluid px-0">
	<img class="w-100" src="https://zantyes.com/wp-content/uploads/2022/07/Shop-Landing-Page-Banner-scaled.jpg" alt="">
</section> -->
<section class="container zsiCatalogue my-5" ng-controller="cart">
	<?php
		$categories = [[ 'name' => ['Dried'] , 'title' => 'Our Products' , 'subtitle' => '' ]];

		foreach($categories as $category){
			// if(sizeof($products) > 0){
			print_r('<div class="row" id="'. str_replace(' ','',$category['title']) .'" style="margin-bottom:50px;"><h2 class="heroFont">'.$category['title'].'</h2>');
			// }

			foreach($category['name'] as $name){
				$args = array(
					'category' => $name,
					'orderby' => 'name',
				);

				$products = wc_get_products($args);

				// print_r( $products[1]->stock_status );
				foreach($products as $product){
					get_template_part( 'woocommerce/sample-product',null,['class' => 'col-6 col-sm-4 col-md-3','data' => [ 'product' => $product ] ] );
				}
			}
			print_r('</div>');
		}
	?>
</section>
<?php get_footer(); ?>