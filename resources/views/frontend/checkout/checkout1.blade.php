@extends('frontend.master')
@section('content')
        <!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">

    <!-- CONTAINER -->
    <div class="container border0 margbot0">
        <h3 class="pull-left"><b>Checkout</b></h3>

        <div class="pull-right">
            <a href="shopping-bag.html" >Back shopping bag<i class="fa fa-angle-right"></i></a>
        </div>
    </div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->


<!-- CHECKOUT PAGE -->
<section class="checkout_page">

    <!-- CONTAINER -->
    <div class="container">
        {!! Form::open(array( 'route' => 'address', 'method' => 'POST', 'class' => '')) !!}

        <!-- CHECKOUT BLOCK -->
        <div class="checkout_block">
            <ul class="checkout_nav">
                <li class="active_step" id="step1">1. Shipping Address</li>
                <li id="step2">2. Delivery</li>
                <li id="step3">3. Payment</li>
                <li id="step4" class="last">4. Confirm Orded</li>
            </ul>
                <div class="checkout_form clearfix" id="checkout1">

                            <!-- Country -->
                    <div class="checkout_form_input country">
                        <label>Country <span class="color_red">*</span></label>
                        <select class="basic" id="country" name="country" >
                            <option value="viet nam">Viet Nam</option>
                            <option value="australia">Australia</option>
                            <option value="china">China</option>
                            <option value="lao">Lao</option>
                            <option value="campuchia">Campuchia</option>
                        </select>
                    </div>

                    <!-- Sity -->
                    <div class="checkout_form_input sity">
                        <label>Sity <span class="color_red">*</span></label>
                        <input type="text" id="sity" name="sity" value="" placeholder="" />
                    </div>

                    <!-- Province -->
                    <div class="checkout_form_input territory">
                        <label>Province / Territory <span class="color_red">*</span></label>
                        <input type="text" id="province" name="province" value="" placeholder="" />
                    </div>

                    <!-- Postcode -->
                    <div class="checkout_form_input last postcode">
                        <label>Postcode <span class="color_red">*</span></label>
                        <input type="text" id="postcode" name="postcode" value="" placeholder="" />
                    </div>

                    <!-- Street1 -->
                    <div class="checkout_form_input2 adress">
                        <label>Street Adress 1 <span class="color_red">*</span></label>
                        <input type="text" id="street" name="street1" value="" placeholder="" />
                    </div>

                    <!-- Street2 -->
                    <div class="checkout_form_input2 last adress">
                        <label>Street Adress 2</label>
                        <input type="text" name="street2" value="" placeholder="" />
                    </div>

                    <hr class="clear">

                    <!-- first name -->
                    <div class="checkout_form_input first_name">
                        <label>First Name <span class="color_red">*</span></label>
                        <input type="text" id="firstname" name="firstname" value="" placeholder="" />
                    </div>

                    <!-- Last name -->
                    <div class="checkout_form_input last_name">
                        <label>Last name <span class="color_red">*</span></label>
                        <input type="text" id="lastname" name="lastname" value="" placeholder="" />
                    </div>

                    <!-- Phone -->
                    <div class="checkout_form_input phone">
                        <label>Phone <span class="color_red">*</span></label>
                        <input type="text" name="phone" value="" placeholder="" />
                    </div>

                    <!-- email -->
                    <div class="checkout_form_input last E-mail">
                        <label>e-mail <span class="color_red">*</span></label>
                        <input type="text" id="email" name="email" value="" placeholder="" />
                    </div>

                    <div class="clear"></div>

                    <div class="checkout_form_note">All fields marked with (<span class="color_red">*</span>) are required</div>

                    <a id="next1" class="btn active pull-right" href="javascript:void(0);">Continue</a>

                </div>

                <!-- shipping -->
                <div id="checkout2" class="checkout_delivery clearfix">
                    <p class="checkout_title">SHIPPING METHOD</p>
                    <ul >
                        <li>
                            <input id="ridio1" type="radio" class="shipping" name="shipping_method" value="standart_post" hidden />
                            <label for="ridio1">Standard International Post <b>Free  (3-6 week)</b><img src="{!! url('assets/frontend/images/standart_post.jpg') !!}" alt="" /></label>
                        </li>
                        <li>
                            <input id="ridio2" type="radio" class="shipping" name="shipping_method" value="excluseve_post" hidden />
                            <label for="ridio2">Excluseve International Post <b>Postage $ 10 (2-4 week)</b><img src="{!! url('assets/frontend/images/excluseve_post.jpg') !!}" alt="" /></label>
                        </li>
                        <li>
                            <input id="ridio3" type="radio" class="shipping" name="shipping_method" value="premium_post" hidden />
                            <label for="ridio3">Premium Post <b>Postage $ 50 (1-2 week)</b><img src="assets/frontend/images/premium_post.jpg" alt="" /></label>
                        </li>
                        <li>
                            <input id="ridio4" type="radio" class="shipping" name="shipping_method" value="vip_post" hidden />
                            <label for="ridio4">For VIP clients <b>$ 100 (3 days)</b><img src="assets/frontend/images/vip_post.jpg" alt="" /></label>
                        </li>
                    </ul>

                    <div class="checkout_delivery_note"><i class="fa fa-exclamation-circle"></i>Express delivery options are available for in-stock items only.</div>

                    <a id="next2" class="btn active pull-right checkout_block_btn" href="javascript:void(0);" >Continue</a>
                </div><!-- //SHIPPING -->

                <!-- PAYMENT-->
                <div id="checkout3" class="checkout_payment clearfix">
                    <div class="payment_method padbot70">
                        <p class="checkout_title">payment Method</p>

                        <ul class="clearfix">
                            <li>
                                <input id="ridio11" type="radio" name="payment" value="visa" hidden />
                                <label for="ridio11">Visa<br><img src="assets/frontend/images/visa.jpg" alt="" /></label>
                            </li>
                            <li>
                                <input id="ridio22" type="radio" name="payment" value="master_card" hidden />
                                <label for="ridio22">Master Card<br><img src="assets/frontend/images/master_card.jpg" alt="" /></label>
                            </li>
                            <li>
                                <input id="ridio33" type="radio" name="payment" value="paypal" hidden />
                                <label for="ridio33">PayPal<br><img src="assets/frontend/images/paypal.jpg" alt="" /></label>
                            </li>
                            <li>
                                <input id="ridio44" type="radio" name="payment" value="discover" hidden />
                                <label for="ridio44">Discover<br><img src="assets/frontend/images/discover.jpg" alt="" /></label>
                            </li>
                            <li>
                                <input id="ridio55" type="radio" name="payment" value="skrill" hidden />
                                <label for="ridio55">Skrill<br><img src="assets/frontend/images/skrill.jpg" alt="" /></label>
                            </li>
                        </ul>
                    </div>

                    <div class="credit_card_number padbot80">
                        <p class="checkout_title">Credit Card Number</p>

                        <form class="credit_card_number_form clearfix" action="javascript:void(0);" method="get">
                            <input type="text" name="card_number" value="Number" onFocus="if (this.value == 'Number') this.value = '';" onBlur="if (this.value == '') this.value = 'Number';" />
                            <div class="margrightminus20">
                                <select class="basic" name="mm">
                                    <option value="">MM</option>
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
                                    <option value="april">April</option>
                                    <option value="may">May</option>
                                </select>
                                <select class="basic last" name="yyyy">
                                    <option value="yyyy">YYYY</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>
                        </form>
                    </div>

                    <div class="clear"></div>

                    <div class="checkout_delivery_note"><i class="fa fa-exclamation-circle"></i>Express delivery options are available for in-stock items only.</div>

                    <a id="next3" class="btn active pull-right checkout_block_btn" href="javascript:void(0);" >Continue</a>
                </div> <!-- //PAYMENT -->

                <!-- ROW -->
                <div class="row" id="checkout4">
                    <div class="col-lg-9 col-md-9 padbot60">
                        <div class="checkout_confirm_orded clearfix">
                            <div class="checkout_confirm_orded_bordright clearfix">
                                <div class="billing_information">
                                    <p class="checkout_title margbot10">Billing information</p>

                                    <div class="billing_information_content margbot40">
                                        <span class="name"></span>
                                        <span class="address"></span>
                                        <span class="postcode1"></span>
                                        <span class="country1"></span>
                                        <span class="email1"></span>
                                    </div>

                                    <p class="checkout_title margbot10">Shipping adress</p>

                                    <div class="billing_information_content margbot40">
                                        <span class="name"></span>
                                        <span class="address"></span>
                                        <span class="postcode1"></span>
                                        <span class="country1"></span>
                                        <span class="email1"></span>
                                    </div>
                                </div>

                                <div class="payment_delivery">
                                    <p class="checkout_title margbot10">Payment and delivery</p>

                                    <p>Payment: <span id="payment"></span></p>
                                    <span id="logo_payment"></span>

                                    <p>Delivery:  <span id="delivery"></span></p>
                                    <span id="logo_delivery"></span>
                                </div>
                            </div>
                            <div class="checkout_confirm_orded_products">
                                <p class="checkout_title">Products</p>
                                <ul class="cart-items">
                                    @foreach($items as $item)
                                    <li class="clearfix">
                                        <input type="hidden" name="product[]" value="{!! $item['id'] !!}">
                                        <img class="cart_item_product" src="{!! url('assets/frontend/images/tovar/women/'.$item['image']) !!}" alt="" />
                                        <a href="product-page.html" class="cart_item_title">{!! $item['name'] !!}</a>
                                        <span class="cart_item_price">${!! $item['price']*$item['qty'] !!}</span>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 padbot60">

                        <!-- BAG TOTALS -->
                        <div class="sidepanel widget_bag_totals your_order_block">
                            <h3>Your Order</h3>
                            <table class="bag_total">
                                <tr class="cart-subtotal clearfix">
                                    <th>Sub total</th>
                                    <td>${!! $total !!}</td>
                                </tr>
                                <tr class="shipping clearfix">
                                    <th>SHIPPING</th>
                                    <td>$<span id="shipping_price"></span></td>
                                </tr>
                                <tr class="total clearfix">
                                    <th>Total</th>
                                    <td id="total_price">$</td>
                                    <input type="hidden" name="total_order" id="total_order" value="">
                                </tr>
                            </table>
                            <input type="submit" class="btn active" value="Place Order">
                            <a id="previous" class="btn inactive" href="javascript:void(0);" >Go to previous step</a>
                        </div><!-- //REGISTRATION FORM -->
                    </div><!-- //SIDEBAR -->
            </div><!-- //ROW -->
            {{--<input type="hidden">--}}
            {{--<input type="submit" class="btn active" value="Place Order">--}}
        </div><!-- //CHECKOUT BLOCK -->
        {!! Form::close() !!}

    </div><!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->
@stop
@section('script')
    <script>
        $( window ).load(function() {
            $("#checkout2").hide();
            $("#checkout3").hide();
            $("#checkout4").hide()
        });

        $("#next1").on("click", function () {
            $("#checkout1").hide();
            $("#checkout2").show();
            $("#step1").addClass("done_step");
            $("#step2").addClass("active_step");
        });

        $("#next2").on("click", function () {
            $("#checkout2").hide();
            $("#checkout3").show();
            $("#step1").addClass("done_step2");
            $("#step2").addClass("done_step");
            $("#step2").removeClass("active_step");
            $("#step3").addClass("active_step");
        });
        $("#next3").on("click", function () {
            $("#checkout3").hide();
            $("#checkout4").show();
            $("#step2").addClass("done_step2");
            $("#step3").addClass("done_step");
            $("#step3").removeClass("active_step");
            $("#step4").addClass("active_step");
        });

        $("#previous").on("click", function () {
            $("#checkout3").show();
            $("#checkout4").hide();
            $("#step3").addClass("active_step");
            $("#step3").removeClass("done_step");
            $("#step4").removeClass("active_step");
            $("#step2").addClass("done_step");
            $("#step2").removeClass("done_step2");
        });


        $("#next3").on("click", function () {

            $(".name").text($("#firstname").val()+ " " + $("#lastname").val());
            $(".address").text($("#street").val()+", "+$("#province").val()+", "+$("#sity").val());
            $(".postcode1").text($("#postcode").val());
            $(".country1").text($("#country").val());
            $(".email1").text($("#email").val());

            //shipping-method
            if($("#ridio1").prop("checked")) {

                $("#delivery").text($("#ridio1").val());
                $("#logo_delivery").append("<img src='assets/frontend/images/"+$("#ridio1").val()+".jpg' alt='' />");
                $("#shipping_price").append("FREE");
//                $("#total_order").append()

            } else if($("#ridio2").prop("checked")) {

                $("#delivery").text($("#ridio2").val());
                $("#logo_delivery").append("<img src='assets/frontend/images/"+$("#ridio2").val()+".jpg' alt='' />");
                $("#shipping_price").append("10");

            } else if($("#ridio3").prop("checked")) {

                $("#delivery").text($("#ridio3").val());
                $("#logo_delivery").append("<img src='assets/frontend/images/"+$("#ridio3").val()+".jpg' alt='' />");
                $("#shipping_price").append("50");

            } else {
                $("#delivery").text($("#ridio4").val());
                $("#logo_delivery").append("<img src='assets/frontend/images/"+$("#ridio4").val()+".jpg' alt='' />");
                $("#shipping_price").append("100");

            }; //end shipping-method

            //payment
            if($("#ridio11").prop("checked")) {

                $("#payment").text($("#ridio11").val());
                $("#logo_payment").append("<img src='assets/frontend/images/"+$("#ridio1").val()+".jpg' alt='' />");

            } else if($("#ridio22").prop("checked")) {

                $("#payment").text($("#ridio22").val());
                $("#logo_payment").append("<img src='assets/frontend/images/"+$("#ridio22").val()+".jpg' alt='' />");

            } else if($("#ridio33").prop("checked")) {

                $("#payment").text($("#ridio33").val());
                $("#logo_payment").append("<img src='assets/frontend/images/"+$("#ridio33").val()+".jpg' alt='' />");

            } else if($("#ridio44").prop("checked")) {

                $("#payment").text($("#ridio44").val());
                $("#logo_payment").append("<img src='assets/frontend/images/"+$("#ridio44").val()+".jpg' alt='' />");

            } else {
                $("#payment").text($("#ridio55").val());
                $("#logo_payment").append("<img src='assets/frontend/images/"+$("#ridio55").val()+".jpg' alt='' />");

            };
            {{--alert({!! $total !!})--}}
            var price_product = Number({!! $total !!});
            var price_shipping = Number($("#shipping_price").text());
            var total_price = price_product + price_shipping;
            $("#total_order").val(
                   total_price
            );
            $("#total_price").append(total_price);
        });



    </script>
@stop