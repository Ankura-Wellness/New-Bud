<?php
    /**
     *  Our Story template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'Our Story']);
?>
<div id="nbPageOurStory">
    <div class="w-100 d-flex justify-content-center align-items-center px-0" style="color: #fff;height: 250px;background-blend-mode: overlay;background-color: rgba(103, 76, 20, 0.96);background-size: cover;">
        <h1 class="heroFont" style="font-size: 3rem;">
            Our Story
        </h1>
    </div>
    <section class="container">
        <div class="row justify-content-center align-items-center my-5">
            <h2 class="col-12 primaryFont text-center my-5 fw-bold">
                Our Motive
            </h2>
            <div class="col-10 col-md-8">
                <p id="nbFirstParagraph" class="text-left">
                    At <b>Ankuräḫ</b> ( pronounced Ankur ) , we are committed to bringing nature's purest offerings directly to your kitchen.
                     Our products are rooted in the philosophy of simplicity-untouched, unaltered, and full of natural goodness.
                     We believe that true quality lies in keeping things as close to their original state as possible.
                     That's why each item we provide is carefully sourced and minimally handled, ensuring that you receive only the best of what nature has to offer.
                </p>
            </div>
        </div>
    </section>
    <section class="container-fluid mb-5" id="nbFoundersNote">
        <div class="container">
            <div class="row justify-content-center align-items-center my-5">
                <div class="col-12">
                    <img class="w-100" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/our-story/our_story_1.png' ); ?>" alt="">
                </div>
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4">
                            <img class="w-100" style="border: 10px solid #fff" src="https://ankurah.com/wp-content/uploads/2025/10/WhatsApp-Image-2025-09-14-at-15.31.18_71e277f1-e1759296135818.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="text-center my-5 fw-bold fst-italic">
                                "Founder's Note"
                            </h2>
                            <p>
                                <b>Dear Friends and People Who Care About the Earth,</b>
                                <br><br>
                                I started <strong>Ankuräḫ</strong> to serve as a guide for organic farming and living in harmony with nature. Growing up on our family farm, I witnessed both the beauty of sustainable farming and the damage caused by industrial practices that harm soil, water, and health.
                                At <strong>Ankuräḫ</strong>, we grow food the natural way—using heirloom seeds, composting, and agroforestry—without chemicals or additives. Our harvests go straight from the farm to your table, full of genuine taste and goodness.
                                More than just food, this is about rebuilding our connection to the land and to each other. Together, through small organic steps, we can create a fairer, healthier future.
                                <br><br>
                                With gratitude and love for nature,
                                <br>
                                <br>
                                <b>
                                    Akhil Prabhu
                                </b>
                                    <br>
                                <b>
                                    Founder, Ankuräḫ
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();