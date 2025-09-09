<?php
    /**
     *  Our Story template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'Our Story']);
?>
<div id="nbOurStoryPage">
    <div class="w-100 d-flex justify-content-center align-items-center px-0" style="color: #fff;height: 250px;background-blend-mode: overlay;background-color: rgba(103, 76, 20, 0.96);background-size: cover;">
        <h1 class="heroFont" style="font-size: 3rem;">
            Our Story
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="col-12 primaryFont text-center my-5 fw-bold">
                Our Motive
            </h2>
            <div class="col-12">
                <p id="nbFirstParagraph" class="text-left">
                    At <b>Ankuräḫ</b>, we are committed to bringing nature’s purest offerings directly to your kitchen. Our products are rooted in the philosophy of simplicity-untouched, unaltered, and full of natural goodness. We believe that true quality lies in keeping things as close to their original state as possible. That’s why each item we provide is carefully sourced and minimally handled, ensuring that you receive only the best of what nature has to offer.
                </p>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();