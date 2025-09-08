<?php
    /**
     *  home template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'Store Locator']);
?>
<div id="zsiStoreLocatorPage">
    <div class="zsiPageTitle">
        <h1>
            Store Locator
        </h1>
    </div> 
    <div class="container">
        <div class="zsiBlogPageArea py-5">
            <?php 
                $posts = get_posts(['numberposts' => '-1']);
                foreach($posts as $post){
                    $categories = wp_get_post_categories($post->ID);
                    $categoryList = '';
                    foreach($categories as $category){
                        $categoryList = $categoryList.get_category( $category )->name.', ';
                    }
                    get_template_part( 'partials/blog-card.partials',null,['categoryList' => $categoryList,'post' => $post,'content' => preg_replace('/\[et_pb.*\]/m','',substr(get_the_excerpt( $post->ID ), 0, -11)),'thumbnail' => get_the_post_thumbnail_url($post->ID,'300') ] );
                }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();