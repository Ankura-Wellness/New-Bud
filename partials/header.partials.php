<?php
  /**
   *  Header UI template file
   *  @2ndInning
   */
?>

<nav id="nbHeader" class="container-fluid navbar navbar-expand-lg">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <a id="nbLogo" href="/"  class="d-flex justify-content-center align-items-start" >
          <div class="d-flex flex-column justify-content-center">
            <h1 class="heroFont text-left">
              Ankuräh
            </h1>
            <p class="taglineFont">
              ।। प्रकृति के साथ सामंजस्य ।।
            </p>
          </div>
          <img class="d-block d-md-none" style="height: 70px" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/logo_sans_text.svg' ); ?>" alt="">
        </a>
        <img id="logo" class="d-none d-md-block" style="height: 70px" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/logo_sans_text.svg' ); ?>" alt="">
        <a href="tel:917620805302" class="d-none d-sm-flex" id="nbEnquiry">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" >
          <i class="bi bi-chevron-compact-down">
          </i>
        </button>
      </div>
    </div>
  </div>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/our-story">
          Our Story
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/shop">
          Shop Now
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Legal
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="/terms-and-conditions">
              Terms & Conditions
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="/privacy-policy">
              Privacy Policy
            </a>
          </li>
        </ul>
      </li>
    </ul>
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
