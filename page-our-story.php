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
                    <h2 class="text-center my-5 fw-bold fst-italic">
                        "Founder's Note"
                    </h2>
                    <p>
                        <b>Dear Friends and People Who Care About the Earth,</b>
                        <br><br>From the time I planted my first seed in the warm soil on our family farm, I knew nature was the best way to feed our bodies, minds, and the planet we live on.
                            That's why I started <b>Ankuräḫ</b>.
                             It's a guide for organic farming and living in a way that helps the environment, in a world that often forgets its connection to nature.
                             I grew up around big fields and old fruit trees.
                             I saw the wonders of farming that helps the land heal plants that cover the soil to make it better, a mix of living things that make everything stronger and harvests that show balance instead of harm. But I also saw the problems—like big factory farming that hurts the soil, dirties our water, and makes us sick. It made me sad and determined to do something.At <b>Ankuräḫ</b>, we don't just grow food; we create a better future. We stick to organic ways: no fake chemicals to kill pests, no changed seeds, and real care for the natural systems that keep us going. We work with small farmers who think like us. We use old-style seeds, new ways to make compost, and trees mixed with crops to improve the soil and trap carbon from the air. Our products—like boxes of old vegetables and herbal drinks—go straight from the farm to your table, full of natural taste and goodness.But this is more than what we make; it's about the group we form. We want to help you connect back to the land—with tips for your own garden, recipes using fresh food, or pushing for rules that protect nature. Together, we can make things better and fairer for everyone.Thanks for being part of this. Let's start changes with small organic steps.With thanks and a love for gardening,
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
    </section>
</div>
<?php
get_footer();