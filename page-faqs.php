<?php
    /**
     *  FAQs template file
     *  @2ndInning
     */
$base_url = home_url();

get_header(null,['title'=>'FAQs']);
?>
<div id="zsiFaqsTermsAndConditions">
    <div class="w-100 d-flex justify-content-center align-items-center px-0" style="color: #fff;height: 250px;background-image: url('https://zantye.com/wp-content/uploads/2021/07/4-3.png');background-blend-mode: overlay;background-color: rgba(103, 76, 20, 0.96);background-size: cover;">
        <h1 style="font-family:'KozGoPro-Bold';font-size: 72px !important;font-weight: 800;">
            FAQs
        </h1>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2>
                                We do not use any online payment modes. Do you accept any alternative payment methods?
                            </h2>
                            <p>
                                Currently, we use a variety of completely secure online payment methods to fulfil orders. You can make a payment through Debit/Credit Cards, Netbanking, Wallet or UPI. We do not offer a cash on delivery option.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="accordion my-5" id="termsAndConditionsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Do you cater to specific places for delivery in India?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#termsAndConditionsAccordion">
                                <div class="accordion-body">
                                    We deliver PAN India. You can choose the shipping method at the time of delivery to get the estimate of shipping charges and delivery partners.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Do you deliver internationally?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#termsAndConditionsAccordion">
                                <div class="accordion-body">
                                    No, currently, our delivery is restricted to areas within India only.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    I wanted to track my order.
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#termsAndConditionsAccordion">
                                <div class="accordion-body">
                                    Once your order has been processed and dispatched, you will receive a shipping confirmation email. You can track your order using the link provided in this email.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    What is the difference between various cashew varieties?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#termsAndConditionsAccordion">
                                <div class="accordion-body">
                                    Our plain cashews are available in different sizes. The varieties get their name from the amount of cashew units that can be packed within a 1kg order. For example, W210 will include 210 pieces of cashews per pound of weight(Lbs). They are the bigger sized cashews. W240 would include 240 pieces of cashews per pound of weight. Therefore, W240 is a relatively smaller size of cashew compared to W210.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    What is the difference between the 2 types of cashew packaging?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#termsAndConditionsAccordion">
                                <div class="accordion-body">
                                    The transparent packet is an old design, while the blue packet is a relatively newer design. The newer blue packets are sealed using nitrogen gas flushing sealing machines, thereby keeping the cashews fresh for a longer period of time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    What is the minimum order quantity per order?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#termsAndConditionsAccordion">
                                <div class="accordion-body">
                                    There is no minimum. You can order as few as 1 single packet of cashews in a single order. However, if you place an order for over Rs. 2,000, you can get a discount of Rs. 150 off on your purchase.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();