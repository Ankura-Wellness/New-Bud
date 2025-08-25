<?php
    /**
     *  Header UI template file
     *  @2ndInning
     */
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" ng-controller="cart">
    <a class="navbar-brand" href="/">
		  <img src="https://zantyes.com/wp-content/uploads/2019/02/Zantye_5-3.png" alt="Zantye's">
	  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars">
      </i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
          $menus = [];
          // $menus = zsi_get_menu('zsi_header_menu');
          if(sizeof($menus) > 0 ){} else {
            $menus = [[ 'menu' => (object)[ 'url' => '/' , 'title' => 'Home' ], 'subMenu' => [] ],
              [ 'menu' => (object)[ 'url' => '/shop' , 'title' => 'Shop' ], 'subMenu' => [] ],
              [ 'menu' => (object)[ 'url' => '' , 'title' => 'About' ], 'subMenu' => [ (object)[ 'url' => '/our-story' , 'title' => 'Our Story' ],(object)[ 'url' => '/our-process' , 'title' => 'Our Process' ], (object)[ 'url' => '/csr' , 'title' => 'CSR' ] ] ],
              [ 'menu' => (object)[ 'url' => '/blog' , 'title' => 'Blog' ], 'subMenu' => [] ],
              [ 'menu' => (object)[ 'url' => '/zantye-franchise-outlet-application' , 'title' => 'Franchise' ], 'subMenu' => [] ],
              // [ 'menu' => [ 'url' => '/privacy-policy' , 'title' => 'Privacy Policy' ]],
              // [ 'menu' => [ 'url' => '/faqs' , 'title' => 'FAQs' ]],
              // [ 'menu' => [ 'url' => '/csr' , 'title' => 'FAQs' ]]
            ];
          }

          foreach( $menus as $menu ){
            if(sizeof($menu['subMenu']) == 0)
              print_r('<li class="nav-item"><a class="nav-link active" aria-current="page" href="'.$menu['menu']->url.'">'.$menu['menu']->title.'</a></li>');
            else {
              $subMenuHtml = '';
              foreach( $menu['subMenu'] as $subMenu ){
                $subMenuHtml = $subMenuHtml.'<li><a class="dropdown-item" href="'.$subMenu->url.'">'.$subMenu->title.'</a></li>';
              }
              
              print_r('<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            '.$menu['menu']->title.'
                          </a>
                          <ul class="dropdown-menu">
                            '.$subMenuHtml.'
                          </ul>
                        </li>');
            }
          }
        ?>
        <li >
          <button class="btn btn-clear d-none d-lg-block" ng-click="cartManagerCtrl.toggleCart()">
            <i class="fa-solid fa-basket-shopping">
            </i>
          </button>
        </li>
      </ul>      
    </div>
  </div>
  <!-- <div id="zsiMobileCartButton" onclick="zsi.toggleCart()" class="btn btn-outline-danger btn-lg d-block d-lg-none">
	  <i class="fa-solid fa-basket-shopping">
	  </i>
  </div> -->
</nav>