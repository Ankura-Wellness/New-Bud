<?php
    /**
     *  Shipping Policy template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'']);
?>
<div id="sdPolicies">
    <div class="w-100 d-flex justify-content-center align-items-center px-0" style="color: #fff;height: 250px;background-blend-mode: overlay;background-color: rgba(103, 76, 20, 0.96);background-size: cover;">
        <h1 class="heroFont" style="font-size: 3rem;">
            Shipping &amp; Policy
        </h1>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">    
                <ol>
                    <li>
                        The orders for the user are shipped through registered domestic courier companies and/or speed post only.
                    </li>
                    <li>
                        Orders are shipped within 7 days from the date of the order and/or payment or as per the delivery date agreed at the time of order confirmation and delivering of the shipment, subject to courier company / post office norms.
                    </li>
                    <li>
                        Platform Owner shall not be liable for any delay in delivery by the courier company or postal authority.
                    </li>
                    <li>
                        Delivery of all orders will be made to the address provided by the buyer at the time of purchase.
                    </li>
                    <li>
                        Delivery of our services will be confirmed on your email ID as specified at the time of registration.
                    </li>
                    <li>
                        If there are any shipping costs levied by the seller or the Platform Owner (as the case may be), the same is not refundable.
                    </li>
                </ol>
            </div>
        </div>
    </div>
    
</div>
<?php
get_footer();