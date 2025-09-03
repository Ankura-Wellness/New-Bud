<?php
    /**
     *  home template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'Home']);
?>
<div id="nbFrontPage">
    <img class="w-100 d-none d-md-block" src="http://ankurah.com/wp-content/uploads/2025/04/banner_2.png" alt="">
    <img class="w-100 d-block d-md-none" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/banner_2_m.png' ); ?>" alt="">
    <div id="container">
    <div id="box">
        <div>
        <img src="http://ankurah.com/wp-content/uploads/2025/04/planting.png">
        <div>
            <h3>
            Directly from Farm
            </h3>
            <p>
            We farm & procure directly from farmers.
            </p>
        </div>
        </div>
        <div>
        <img src="http://ankurah.com/wp-content/uploads/2025/04/organic.png">
        <div>
            <h3>
            Grown Organically
            </h3>
            <p>
            Our products are grown using organic methods.
            </p>
        </div>
        </div>
    </div>
    </div>
</div>


<?php get_footer(null,['title'=>'Home']);?>