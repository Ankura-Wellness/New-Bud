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
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <p id="nbAboutUs" class="text-left">
                    At <b>Ankuräḫ</b>, we are committed to bringing nature’s purest offerings directly to your kitchen. Our products are rooted in the philosophy of simplicity-untouched, unaltered, and full of natural goodness. 
                </p>
                <p>
                    We believe that true quality lies in keeping things as close to their original state as possible. That’s why each item we provide is carefully sourced and minimally handled, ensuring that you receive only the best of what nature has to offer.
                </p>
            </div>
        </div>
    </section>
    <section id="nbProductsIntro" class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center mb-4">
                <h2 class=" text-center mb-4">
                    Our Products
                </h2>
            </div>
            <div class="col-12 col-md-5 mb-4">
                <img src="http://localhost/ankurah/wp-content/uploads/2025/04/c43b74b8-5ee8-4418-9476-e24a5cd9eba5.jpeg" style="width: 100%" alt="">
            </div>
            <div class="col-12 col-md-5 mb-4">
                <h3 class="text-center primaryFont" style="font-weight: 800; font-size: 2.5rem; margin-top: 1rem;">
                    Dried Banana Munchies
                </h3>
                <h5 class="text-center heroFont">
                    Fuel your day with nature's sweetness, one bite at a time
                </h5>
                <p>
                    Indulge in the pure goodness of nature with <b>Dried Banana Munchies</b> 100% natural, sun-dried, and free from added sugars, preservatives, or chemicals. Handpicked from lush organic farms, our bananas are grown without fertilizers or pesticides, ensuring the highest quality and rich nutritional benefits in every bite
                </p>
                <div id="nbFeatures" class="d-flex justify-content-center">
                    <h6 class="heroFont">
                        Why have Munchies?
                    </h6>
                    <ul>
                        <li>
                            Rich in Potassium – Supports heart health & muscle function
                        <li>
                            Packed with Fiber – Aids digestion & gut health
                        </li>
                        <li>
                            High in Natural Energy – Perfect for quick snacks & workouts
                        </li>
                        <li>
                            Loaded with Antioxidants – Helps boost immunity & fight free radicals
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer(null,['title'=>'Home']);?>