<?php
    /**
     *  home template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'Home']);
?>

<div id="banner" class="w-100 d-flex justify-content-center align-items-center">
    <h2 class="mb-0">
        Get ₹150 off orders over Rs. 2000 with code “Z150OFF”
    </h2>
</div>
<div id="zsiFrontPageCarousel" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
    </button>
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="1">
    </button>
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="2">
    </button>
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="3">
    </button>
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="4">
    </button>
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="5">
    </button>
    <button type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide-to="6">
    </button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_8.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton06012025" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/product/goan-cashew-chiwda/">
            TRY THEM NOW
        </a>
    </div>
    <div class="carousel-item">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_7.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton20112024" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/shop">
            TRY THEM NOW
        </a>
    </div>
    <div class="carousel-item">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_2.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton1" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/shop">
            SHOP ONLINE
        </a>
    </div>
    <div class="carousel-item">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_3.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton2" class="btn btn-danger d-none d-sm-block" href="<?php echo $base_url ?>/shop">
            SHOP ONLINE
        </a>
    </div>
    <div class="carousel-item">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_4.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton3" class="btn btn-danger d-none d-sm-block" href="<?php echo $base_url ?>/shop">
            SHOP ONLINE
        </a>
    </div>
    <div class="carousel-item">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_5.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton4" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/shop">
            SHOP ONLINE
        </a>
    </div>
    <div class="carousel-item">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_6.webp' ); ?>" class="d-block w-100" alt="...">
        <a id="carouselInnerButton5" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/shop">
            SHOP ONLINE
        </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#zsiFrontPageCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--<div id="zsiFrontPageCarousel" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_2.webp' ); ?>" class="d-block w-100" alt="...">
            <a id="carouselInnerButton1" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/shop">
                SHOP ONLINE
            </a>
        </div>
        <div class="carousel-item">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/front-page/slide_3.webp' ); ?>" class="d-block w-100" alt="...">
            <a id="carouselInnerButton1" class="btn btn-warning d-none d-sm-block" href="<?php echo $base_url ?>/shop">
                SHOP ONLINE
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>-->
<div class="d-flex d-sm-none" id="zsiFrontPageCarouselFooter">
    <a class="btn btn-danger" href="<?php echo $base_url ?>/shop">
        SHOP ONLINE
    </a>
</div>
<div id="categories" class="container">
    <div class="row zsiHeader align-items-center">
        <h1 class="primaryFont text-center" style="font-size: 32px">
            We specialize in premium quality Cashews, Pistachios and Almonds
        </h1>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-10">
            <a href="<?php echo $base_url ?>/shop#FlavouredCashews">
                <img src="https://zantyes.com/wp-content/uploads/2019/06/Zantye-Chilly-Garlic-Cashew-250gms-Front-300x300.jpg" alt="Flavoured Cashew">
                <div>
                    <h6>
                        Flavoured Cashew
                    </h6>
                </div>
            </a>
            <a href="<?php echo $base_url ?>/shop#ClassicCashews">
                <img src="https://zantyes.com/wp-content/uploads/2019/05/Zantye-Cashew-W210-500gms-Front-300x300.jpg" alt="Classic Cashew">
                <div>
                    <h6>
                        Classic Cashew
                    </h6>
                </div>
            </a>
            <a href="<?php echo $base_url ?>/shop#Almonds">
                <img src="https://zantyes.com/wp-content/uploads/2019/02/Zantye-Almonds-250GM-Front-300x300.png" alt="Alomonds">
                <div>
                    <h6>
                        Almonds
                    </h6>
                </div>
            </a>
            <a href="<?php echo $base_url ?>/shop#Pista">
                <img src="https://zantyes.com/wp-content/uploads/2019/02/Zantye-Salted-Pista-250-gms-Front-300x300.jpg" alt="Pista">
                <div>
                    <h6>
                        Pista
                    </h6>
                </div>
            </a>
            <a href="<?php echo $base_url ?>/shop#CashewProducts">
                <img src="https://zantyes.com/wp-content/uploads/2022/08/kaju_katli-300x300.jpg" alt="Cashew Products">
                <div>
                    <h6>
                        Cashew Products
                    </h6>
                </div>
            </a>
        </div>
    </div>
</div>
<div id="aboutUs" class="container-fluid">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-12 col-md-5">
                <div class="row justify-content-left zsiHeader">
                    <h2 class="primaryFont text-white">
                        About Us
                    </h2>
                    <div>
                    </div>
                </div>
                <img class="w-100 mb-3" src="https://zantyes.com/wp-content/uploads/2019/05/DSC_0888-3-1.jpg" alt="">
                <p class="secondaryFont">
                    Founded in 1928, Zantye's is currently leading the cashew processing industry in Goa. ​​Completing nearly a century of business, the Zantye’s brand has grown to become a major cashew processing enterprise, while being the first to employ the organic method of cultivation in Goa. We aim to provide our customers with the means to buy cashew nuts online and across numerous outlets.
                    <br><br>Our product line includes different quality grades of plain whole cashew nuts, traditional drum roasted cashew nuts and a variety of flavored cashew nuts. We also specialize in premium quality pistachios and almonds.
                </p>
                <a class="btn btn-warning" href="<?php echo $base_url ?>/our-story">
                    LEARN MORE
                </a>
            </div>
            <div class="col-12 col-md-5 zsiFeatures pt-5">
                <div>
                    <img src="https://zantyes.com/wp-content/uploads/2021/08/Organic.png" alt="">
                    <h5 class="primaryFont text-white mb-3">
                        100% Organic
                    </h5>
                    <p class="secondaryFont">
                        Our growing techniques are certified by USDA standards. We use only organic methods in growing our cashew trees with love.
                    </p>
                </div>
                <div>
                    <img src="https://zantyes.com/wp-content/uploads/2021/08/Authentic.png" alt="">
                    <h5 class="primaryFont text-white mb-3">
                        Authentic
                    </h5>
                    <p class="secondaryFont">
                    Our cashews are traditionally grown and processed right in Goa, preserving an integral component of local culture and heritage.
                    </p>
                </div>
                <div>
                    <img src="https://zantyes.com/wp-content/uploads/2021/08/LocallyFarmed.png" alt="">
                    <h5 class="primaryFont text-white mb-3">
                        Locally Farmed
                    </h5>
                    <p class="secondaryFont">
                        We aim to provide our local farmers with the best support to finance and grow our cashews each year during season.
                    </p>
                </div>
                <div>
                    <img src="https://zantyes.com/wp-content/uploads/2021/08/PremiumQuality.png" alt="">
                    <h5 class="primaryFont text-white mb-3">
                        Premium Quality
                    </h5>
                    <p class="secondaryFont">
                        We maintain high quality standards in every product, ranging from cashews to pistachios and almonds.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ourProcess" class="container">
    <div class="row justify-content-center pb-5">
        <div class="col-12 col-md-5">
            <div class="row justify-content-left zsiHeader">
                <h2 class="primaryFont">
                    Our Farming and Harvesting Process
                </h2>
                <div>
                </div>
            </div>
            <p class="secondaryFont">
                From tree to table, the process of harvesting and sourcing the cashews that Zantye's is known for is quite an intensive one. Right from flower to fruit to the processing and packaging, we employ fair trade practices and high quality standards to ensure that our customers enjoy only the best tasting cashews, while still being able to offer the best cashew nut wholesale price for our suppliers.
                Take an in-depth look into how we work with farmers to source our cashews as well as get a glimpse into the traditional urrak and feni making process that takes place during cashew apples harvesting season in Goa.
                Disclaimer: Zantye's is not affiliated in any way with the production and distribution of urrak and feni products. 
            </p>
            <a class="btn btn-warning" href="<?php echo $base_url ?>/our-process">
                LEARN MORE
            </a>
        </div>
        <div class="col-12 col-md-5 pt-3 d-flex align-items-center justify-content-center zsiFeatures" >
            <iframe class="w-100" width="574" height="323" src="https://www.youtube.com/embed/yBqgUFAZhvg" title="Tree to Table: The Cashew Harvesting and Sourcing Process" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php get_template_part( 'partials/review-carousel.partials',null,null);
get_template_part( 'partials/store-locator.partials',null,null);
get_footer(); ?>