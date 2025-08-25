<?php
    /**
     *  home template file
     *  @2ndInning
     */
$base_url = home_url();

$post = get_post(get_the_id());

$related = get_posts( [ 'category__in' => wp_get_post_categories( $post->ID ), 'numberposts'  => 3, 'post__not_in' => array( $post->ID ) ] );

get_header(null,['title'=>$post->post_title]);
?>
<div id="zsiBlogPage">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-md-10">
                <h1>
                    <?php echo esc_html($post->post_title) ?>
                </h1>
                <h6>
                    Published On <?php echo esc_html(date_format(date_create($post->post_date),'d/m/Y')) ?>
                </h6>
                <img src="<?php echo get_the_post_thumbnail_url($post->ID,'300') ?>" alt="">
                <p>
                   <?php echo preg_replace('/\[\/et_pb.*\]/m','',preg_replace('/\[et_pb.*\]/m','',get_the_content( $post->ID ))) ?>
                </p>
            </div>
            <div class="col-12">
                <h2 class="mt-5">
                    Related Blogs
                </h2>
            </div>
            <?php 
                foreach($related as $post){
                    $categories = wp_get_post_categories($post->ID);
                    $categoryList = '';
                    foreach($categories as $category){
                        $categoryList = $categoryList.get_category( $category )->name.', ';
                    }
                    print_r('<div class="col-md-4 col-sm-6 col-12">');
                    get_template_part( 'partials/blog-card.partials',null,['categoryList' => $categoryList,'post' => $post,'content' => preg_replace('/\[et_pb.*\]/m','',substr(get_the_excerpt( $post->ID ), 0, -11)),'thumbnail' => get_the_post_thumbnail_url($post->ID,'300') ] );
                    print_r('</div>');
                }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();