<?php
    /**
     *  Header UI template file
     *  @2ndInning
     */
?>

	<div id="nbFooterArea" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 brand d-flex justify-content-center justify-content-md-start flex-column" id="nbFooterIntro">
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
					<a href="">
						At <b>Ankuräḫ</b>, we are committed to bringing nature’s purest offerings directly to your kitchen. Our products are rooted in the philosophy of simplicity—untouched, unaltered, and full of natural goodness.
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<h4>
						Legal
					</h4>
					<ul id="legals">
					<?php
						// $menus = zsi_get_menu('zsi_legal_menu');
						// if(sizeof($menus) > 0 ){} else {
						$menus = [
							[ 'menu' => [ 'url' => '/terms-and-conditions' , 'title' => 'Terms & Conditions' ]],
							[ 'menu' => [ 'url' => '/privacy-policy' , 'title' => 'Privacy Policy' ]],
							[ 'menu' => [ 'url' => '/faqs' , 'title' => 'FAQs' ]],
							// [ 'menu' => [ 'url' => '/csr' , 'title' => 'CSR' ]]
						];
						// }

						foreach( $menus as $menu ){
							print_r('<li><a href="'.$menu['menu']['url'].'">'.$menu['menu']['title'].'</a></li>');
						}
					?>
					</ul>
					<img class="mt-4" style="filter: invert(1) brightness(0.5); width: 35%;" src="http://ankurah.com/wp-content/uploads/2025/02/path840-1024x497.png" alt="">
					<p style="font-size: 10px;">
						RG/NO. :20625008000043
					</p>
					<!-- TO:DO: clean -->
				</div>
				<div class="col-12 col-sm-6 col-md-3 d-flex flex-column" id="nbContactUs">
					<h4>
						Contact Us
					</h4>
					<div class="d-flex flex-column">
						<a href="https://www.google.com/maps/place/65J2%2B35R+Malkarnem,+Bazaarwado,+Sanguem,+Goa+403704/@15.2295483,74.1500138,17z/data=!4m6!3m5!1s0x3bbfabcba7ecb3eb:0x6c9df562e178349a!8m2!3d15.2302419!4d74.1503965!16s%2Fg%2F11vbg0pnrt?utm_campaign=ml-le-16204184&g_ep=Eg1tbF8yMDI1MDgyN18wIOC7DCoASAJQAg%3D%3D">
							Akhil Babal Prabhu, House No 332, Bhindem, Malcornem, Quepem 403 705.
						</a>
						<a class="mt-3" href="mailto:contact@ankurah.com">
							contact@ankurah.com
						</a>
					</div>
					<h4 class="mt-3">
						Available to contact us from 9AM to 6PM
					</h4>
					<a class="btn btn-custom fw-bolder secondaryFont mb-3" href="https://wa.me/917620805302?text=Hi">
						<i class="fa-brands fa-whatsapp mr-4">
						</i>
						&nbsp;
						CONTACT US
					</a>
					<br>
					<a class="pb-5" href="tel:+917620805302">
						<i class="fa-solid fa-phone">
						</i>
						+917620805302
					</a>				
				</div>
			</div>	
		</div>
  	</div>
</div>
<div id="secondaryFooter" class="container-fluid px-0">
  	<div class="container">
    	<div class="w-100 d-flex flex-sm-column flex-md-row justify-content-between">
      		<div class="d-flex justify-content-center justify-content-md-start">
				<a href="/about_us">
					Ankuräḫ 2025 All Rights Reserved 
				</a>
      		</div>
			<div class="d-flex justify-content-center justify-content-md-end">
				<!-- TO:DO Remove once all pages are finished -->
				<?php
					// $menus = zsi_get_menu('zsi_footer_menu');

					// if(sizeof($menus) > 0 ){} else {
					// $menus = [
					// 	[ 'menu' => [ 'url' => '/our-story' , 'title' => 'Our Story' ]],
					// 	[ 'menu' => [ 'url' => '/our-process' , 'title' => 'Our Process' ]],
					// 	[ 'menu' => [ 'url' => '/faqs' , 'title' => 'FAQs' ]]
					// ]; 
					// }
				
					// foreach( $menus as $menu ){
					// 	print_r('<a href="'.$menu['menu']['url'].'">'.$menu['menu']['title'].'</a>');
					// }
				?>    
			</div>
		</div>
    </div>
</div>