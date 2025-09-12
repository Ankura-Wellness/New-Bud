<?php
  /**
   *  Header UI template file
   *  @2ndInning
   */
?>

<nav id="nbHeader" class="container-fluid">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <a id="nbLogo" href="/"  class="d-flex flex-column justify-content-center align-items-start" >
          <h1 class="heroFont text-left">
            Ankuräh
          </h1>
          <p class="taglineFont">
            ।। प्रकृति के साथ सामंजस्य ।।
          </p>
        </a>
        <img id="logo" style="height: 70px" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/logo_sans_text.svg' ); ?>" alt="">
        <a href="tel:917620805302" id="nbEnquiry">
          <div id="icon">
            <i class="fa-solid fa-phone">
            </i>
          </div>
          <div id="text">
            <p style="font-weight: 800;">
              For Enquiries
            </p>
            <span>
              Contact +91-7620805302
            </span>
          </div>
        </a>
      </div>
    </div>
  </div>
</nav>
<section id="nbLgMenu">
    <a href="/ankurah/our-story">
      Our Story
    </a>
    <!-- <a href="/our-story" style="pointer-events: none;cursor: not-allowed;">
      Our Process
    </a>
    <a href="/our-story" style="pointer-events: none;cursor: not-allowed;">
      Sustainable Consumption
    </a> -->
    <a id="nbShop" href="/shop">
      Shop Now
    </a> 
</section>