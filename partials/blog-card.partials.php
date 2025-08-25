<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// print_r($args['post']);
?>
<div class="zsiBlog card">
	<div class="thumbnailArea" style="background-image:url('<?php echo esc_html( $args['thumbnail'] ); ?>')">
	</div>
	<a href="<?php echo esc_html(get_permalink( $args['post']->ID, false )) ?>" class="card-body">
		<h3>
			<?php echo esc_html( $args['post']->post_title ); ?>
		</h3>
		<h6>
            Published On <?php echo esc_html(date_format(date_create($args['post']->post_date),'d/m/Y')) ?>
        </h6>
		<h5>
			<?php echo esc_html( $args['categoryList'] ); ?>
		</h5>
		<p>
			<?php echo esc_html( $args['content'] ); ?>
		</p>
		<div class="footer">
			<div class="read_more">
				READ MORE
			</div>
		</div>
	</a>
</div>