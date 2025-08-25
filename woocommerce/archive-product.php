<?php
/**
 *  Archive File - /shop
 *  @2ndInning
 */

defined( 'ABSPATH' ) || exit;

get_header(null,[ 'title' => 'Shop' ] );
?>

<section class="container-fluid px-0">
	<img class="w-100" src="https://zantyes.com/wp-content/uploads/2022/07/Shop-Landing-Page-Banner-scaled.jpg" alt="">
</section>
<section class="container zsiCatalogue my-5" ng-controller="cart">
	<?php
		$categories = [[ 'name' => ['Plain Cashews','Salted Cashews'] , 'title' => 'Classic Cashews' , 'subtitle' => '' ],[ 'name' => ['Flavoured Cashews'] , 'title' => 'Flavoured Cashews' , 'subtitle' => '' ],[ 'name' => ['Almonds'] , 'title' => 'Almonds' , 'subtitle' => '' ],[ 'name' => ['Pista'] , 'title' => 'Pista' , 'subtitle' => '' ],[ 'name' => ['Cashew Products'] , 'title' => 'Cashew Products' , 'subtitle' => '' ]];

		foreach($categories as $category){
			// if(sizeof($products) > 0){
			print_r('<div class="row" id="'. str_replace(' ','',$category['title']) .'" style="margin-bottom:50px;"><h2 class="primaryFont">'.$category['title'].'</h2>');
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
	<?php get_template_part( 'partials/cart-full-message.partials' ); ?>
</section>

<?php get_template_part( 'partials/store-locator.partials',null,null);?>
<?php
// do_action( 'woocommerce_sidebar' );

// $taxonomy = 'product_cat';
// $orderby = 'name';
// $args = array(
//     'taxonomy' => $taxonomy,
//     'orderby' => $orderby,
//     'hide_empty' => 0,
// );

// $all_categories = get_categories($args);

// foreach ($all_categories as $cat) {
//     if ($cat->category_parent == 0) {
//         $category_id = $cat->term_id;
// 		print_r($cat->name);
//         // echo '<br /><a href="' . get_term_link($category_id, 'product_cat') . '">' . $cat->name . '</a>';
// 	}
// }

get_footer();
 
?>