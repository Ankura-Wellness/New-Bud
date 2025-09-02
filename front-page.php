<?php
    /**
     *  home template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'Home']);
?>
<img class="w-100 d-none d-md-block" src="http://ankurah.com/wp-content/uploads/2025/04/banner_2.png" alt="">
<img class="w-100 d-block d-md-none" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/banner_2_m.png' ); ?>" alt="">


<?php get_footer(null,['title'=>'Home']);?>