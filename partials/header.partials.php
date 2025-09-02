<?php
    /**
     *  Header UI template file
     *  @2ndInning
     */
?>

<nav id="nbHeader" class="container-fluid">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <a href="/" id="nbLogo">
          <img id="logo" height="100px" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/logo_sans_text.svg' ); ?>" alt="">
          <div id="name">
            <h1 class="heroFont">
              Ankuräh
            </h1>
          </div>
          <div id="tagline">
            <p>
              ।। प्रकृति के साथ सामंजस्य ।।
            </p>
          </div>
        </a>
      </div>
      <div class="col-6 d-flex justify-content-end align-items-center ">
        <a href="tel:917620805302" id="nbEnquiry">
          <div id="icon">
            <i class="fa-solid fa-phone">
            </i>
          </div>
          <div id="text">
            <p style="font-weight: 800;">
              For Enquiries
            </p>
            <p style="font-size: 14px;color: grey">
              <span class="d-none d-sm-block">
                Contact
              </span>
               +91-7620805302
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div id="nbLgMenu">
    <a href="/our-story" style="pointer-events: none;cursor: not-allowed;">
      Our Story
    </a>
    <a href="/our-story" style="pointer-events: none;cursor: not-allowed;">
      Our Process
    </a>
    <a href="/our-story" style="pointer-events: none;cursor: not-allowed;">
      Sustainable Consumption
    </a>
    <a id="nbShop" href="/shop" style="pointer-events: none;cursor: not-allowed;">
      Shop Now
    </a>
  </div>
</nav>