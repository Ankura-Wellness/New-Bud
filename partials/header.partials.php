<?php
  /**
   *  Header UI template file
   *  @2ndInning
   */
?>

<nav id="nbHeader" class="container-fluid navbar position-relative">
  <div class="container h-100">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <a id="nbLogo" href="/"  class="d-flex justify-content-center align-items-start" >
          <div class="d-flex flex-column justify-content-center">
            <img style="width: 60%;" src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/name.svg' ); ?>" alt="Ankuräḫ">
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
        <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <i class="fa-solid fa-chevron-left">
          </i>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/src/img/name.svg' ); ?>" alt="Ankuräḫ">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="/shop">
                  Shop Now
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/our-story">
                  Our Story
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Legal
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">
                      Terms & Conditions
                    </a>
                  </li>
                  <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <button class="btn-custom position-absolute dark d-none d-md-block" style="right: 20px;top: 50%;transform: translateY(-70%);padding: 5px 13px !important;" ng-click="cartManagerCtrl.toggleCart()">
        <i class="bi bi-basket"></i>
      </button>
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
