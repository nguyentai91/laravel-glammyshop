@extends('frontend.master')
@section('content')
@include('frontend.slider')
<!-- TOVAR SECTION -->
<section class="tovar_section">

    <!-- CONTAINER -->
    <div class="container">
        <h2>Featured products</h2>

        <!-- ROW -->
        <div class="row">

            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>

                <!-- TOVAR1 -->
                @foreach($products as $product)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <input type="hidden" id="hidden" value="{!! $product->slug !!}">
                                <img class="img" src="{!! url('assets/frontend/images/tovar/women/'.$product->image_name) !!}" alt="" />
                                <img class="img_h" src="{!! url('assets/frontend/images/tovar/women/'.$product->image_name) !!}" alt="" />
                            </div>
                            <div class="tovar_item_btns">
                                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0)" data-toggle="modal" data-target="#myModal" data-slug="{!! $product->id !!}">quick view</a></div>

                                <a class="add_bag" href="javascript:void(0);" data-slug="{!! $product->slug !!}"><i class="fa fa-shopping-cart"></i></a>

                                <a class="add_lovelist" href="" ><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="tovar_description clearfix">
                            <a class="tovar_title" href="{!! route('frontend.pages.product',[$product->category->slug, $product->slug]) !!}" >{!! $product->product_name !!}</a>
                            <span class="tovar_price" id="price-{!! $product->id !!}">${!! $product->price !!}</span>
                        </div>
                    </div>
                </div><!-- //TOVAR1 -->
                @endforeach

                <div class="respond_clear_768"></div>

                <!-- BANNER -->
                <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                    <a class="banner type1 margbot30" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner1.jpg')!!}" alt="" /></a>
                    <a class="banner type2 margbot40" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner2.jpg')!!}" alt="" /></a>
                </div><!-- //BANNER -->
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->


        <!-- ROW -->
        <div class="row">

            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>

                <!-- BANNER -->
                <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                    <a class="banner type3 margbot40" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner3.jpg')!!}" alt="" /></a>
                </div><!-- //BANNER -->

                <div class="respond_clear_768"></div>
                @foreach($products2 as $product)
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                        <div class="tovar_item">
                            <div class="tovar_img">
                                <div class="tovar_img_wrapper">
                                    {{--                                {!! dd($products) !!}--}}
                                    <img class="img" src="{!! url('assets/frontend/images/tovar/women/'.$product->image_name) !!}" alt="" />
                                    <img class="img_h" src="{!! url('assets/frontend/images/tovar/women/'.$product->image_name) !!}" alt="" />
                                </div>
                                <div class="tovar_item_btns">
                                    <div class="open-project-link"><a class="open-project tovar_view" data-product="{!! $product->id !!}" href="{!! url('assets/frontend/!projects/women/1.blade.php') !!}" >quick view</a></div>
                                    <a class="add_bag" href="javascript:void(0);" data-slug="{!! $product->slug !!}"><i class="fa fa-shopping-cart"></i></a>

                                    <a class="add_lovelist" href="" ><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title" href="{!! route('frontend.pages.product',[$product->category->slug, $product->slug]) !!}" >{!! $product->product_name !!}</a>
                                <span class="tovar_price">${!! $product->price !!}</span>
                            </div>
                        </div>
                    </div><!-- //TOVAR1 -->
                @endforeach

            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->


        <!-- ROW -->
        <div class="row">

            <!-- BANNER WRAPPER -->
            <div class="banner_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <!-- BANNER -->
                <div class="col-lg-9 col-md-9">
                    <a class="banner type4 margbot40" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner4.jpg')!!}" alt="" /></a>
                </div><!-- //BANNER -->

                <!-- BANNER -->
                <div class="col-lg-3 col-md-3">
                    <a class="banner nobord margbot40" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner5.jpg')!!}" alt="" /></a>
                </div><!-- //BANNER -->
            </div><!-- //BANNER WRAPPER -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //TOVAR SECTION -->


<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">

    <!-- CONTAINER -->
    <div class="container">
        <h2>new arrivals</h2>

        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">

            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->

            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach($product1 as $product)
                    <li>
                        <!-- TOVAR -->
                        <div class="tovar_item_new">
                            <div class="tovar_img">
                                <img src="{!! url('assets/frontend/images/tovar/women/'.$product->image_name) !!}" alt="" />
                                <div class="open-project-link"><a class="open-project tovar_view"  href="{!! route('frontend.pages.product',[$product->category->slug, $product->slug]) !!}" >quick view</a></div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title" href="{!! route('frontend.pages.product',[$product->category->slug, $product->slug]) !!}" >{!! $product->product_name !!}</a>
                                <span class="tovar_price" id="bla">${!! $product->price !!}</span>
                            </div>
                        </div><!-- //TOVAR -->
                    </li>
                    @endforeach
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->


<!-- BRANDS -->
<section class="brands_carousel">

    <!-- CONTAINER -->
    <div class="container">

        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">

            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->

            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/1.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/2.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/3.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/4.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/5.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/6.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/7.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/8.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/9.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/10.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/11.jpg') !!}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/brands/12.jpg') !!}" alt="" /></a></li>
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //BRANDS -->


<hr class="container">


<!-- SERVICES SECTION -->
<section class="services_section">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-6 col-md-6 padbot60 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                <p>We empower WordPress developers with design-driven themes and a classy experience their clients will just love</p>
                <span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral</span>
            </div>

            <div class="col-lg-6 col-md-6 padbot30" data-appear-top-offset='-100' data-animated='fadeInRight'>

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-tablet"></i><p>Responsive Theme</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-comments-o"></i><p>Free Support</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-eye"></i><p>Retina Ready</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-cogs"></i><p>Easy Customize</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>
                </div><!-- //ROW -->
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //SERVICES SECTION -->


<hr class="container">
<button id="get">Get data</button>
<button id="post">Post data</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width: 930px">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">

                <div class="tover_view_page element_fade_in">
                    <div class="tover_view_header clearfix">
                        <p>Quick view</p>
                        <a id="tover_view_page_close" href="javascript:void(0);">Close<i>X</i></a>
                    </div>

                    <div class="clearfix">
                        <div class="tovar_view_fotos clearfix">
                            <div id="slider1" class="flexslider">
                                <ul class="slides"></ul>
                            </div>

                            <div id="carousel1" class="flexslider">
                                <ul class="slides"></ul>
                            </div>
                        </div>

                        <div class="tovar_view_description">
                            <div class="tovar_view_title"></div>
                            <div class="tovar_article">88-305-676</div>
                            <div class="clearfix tovar_brend_price" id="modal-price">
                                <div class="pull-left tovar_brend"></div>
                                <div class="pull-right tovar_view_price"></div>
                            </div>
                            <div class="tovar_color_select">
                                <p>Select color</p>

                            </div>
                            <div class="tovar_size_select">
                                <div class="clearfix">
                                    <p class="pull-left">Select SIZE</p>
                                    <span>Size & Fit</span>
                                </div></div>
                            <div class="tovar_view_btn">
                                <select class="basic">
                                    <option value="">QTY</option>
                                    {{--<option>Lo</option>--}}
                                    {{--<option>Ips</option>--}}
                                    {{--<option>Dol</option>--}}
                                    {{--<option>Sit</option>--}}
                                    {{--<option>Amet</option>--}}
                                </select>
                                <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i>Add to bag</a>
                                <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                            </div>
                            <div class="tovar_shared clearfix">
                                <p>Share item with friends</p>
                                <ul>
                                    <li><a class="facebook" href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="javascript:void(0);" ><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="google-plus" href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tumblr" href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

@stop
@section('script')
    <script>
        $(".tovar_price").on("click", function() {
            var a = $(this).attr('id');
            var b = ($("#"+a).text());
        });


        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        $(".add_bag").on("click", function () {
            var slug = $(this).attr("data-slug");
            $.get('/cart/add/'+ slug, function () {
                var qty = Number($("#cartqty").text());
                qty += 1;
                $("#cartqty").text(qty);

            });
        });

        $(".open-project").on("click", function () {
            console.log('aafafa');
            var slug = $(this).attr("data-slug");
            var request = $.ajax({
                url: "/api/"+ slug,
                method: "GET"
            });

            request.done(function(data){
                var d = data[0];
                console.log(data);
                $(".tovar_view_title").text(d.product.product_name);
                $(".tovar_view_price").text(d.product.price);
                $(".tovar_brend").text(d.brand.brand_name);
                for(var i =0; i < d.image.length; i++){
//                    console.log(d.image[i]);
                    var a = "<li><a href='javascript:void(0);' ><img src='assets/frontend/images/tovar/women/"+d.image[i].image_name+"' alt='' /></a></li>";
                    $(".slides").append(a);
                }



                for(var i =0; i < d.color.length; i++){
                    var c = "<a class='color' href='javascript:void(0);' >"+d.color[i].color_name+"</a>";
                    $(".tovar_color_select").append(c);
                }

                for(var i =0; i < d.size.length; i++){
                    var s = "<a class='' href='javascript:void(0);' >"+ d.size[i].size_name+"</a>";
                    $(".tovar_size_select").append(s);
                }

                for(var i =1; i <= d.product.qty; i++){
//                    console.log(d.product.qty);
                    var sl = "<option value=''>"+i+"</option>";
                    $(".basic").append(sl);
                }

                $('#carousel1').flexslider({
                    animation: "slide",
                    controlNav: false,
                    directionNav: false,
                    animationLoop: false,
                    slideshow: false,
                    direction: "vertical",
                    asNavFor: '#slider1'
                });
                $('#slider1').flexslider({
                    animation: "fade",
                    controlNav: false,
                    directionNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#carousel1"
                });

                jQuery('#carousel1 .slides li').click(function(){
                    $('#carousel1 .slides li').removeClass('flex-active-slide');
                    $(this).addClass('flex-active-slide');
                    return false;
                });

                //fancySelect
                $('.basic').fancySelect();

            });


//            var slug = $(this).attr("data-slug");
//            $.get('/api/'+ slug);
//console.log()
        });

        $(".shopping_bag_btn").on("click", function() {
//            $(".cart-items").load("/api/cart-items", function (data) {
//                $(".cart-items").html(
//
//                );
//            });
            $(".cart-items").empty();
            var request = $.ajax({
                url: "/api/cart-items",
                method: "GET"
            });

            request.done(function(data){

                for (var i = 0; i < data.length; i++) {
                    var li = "<li class='clearfix'>"+
                            "<img class='cart_item_product' src='assets/frontend/images/tovar/women/"+data[i].image+"' alt='' />" +
                            "<a href='{!! route('cart') !!}' class='cart_item_title'>"+data[i].name+"</a>" +
                            "<span class='cart_item_price'>"+data[i].qty+" x $"+data[i].price+"</span>"+
                            "</li>";
                    $(".cart-items").append(li)
                }
            });

        });

        $(".open-project").on("click", function () {

        });

        // handlers
        function onGetClick(event)
        {
            // we're not passing any data with the get route, though you can if you want
            $.get('/cart/check/'+ slug, onSuccess);
        }
        function onPostClick(event)
        {
            // we're passing data with the post route, as this is more normal
            $.post('/ajax/post', {payload:'hello'}, onSuccess);
        }
        function onSuccess(data, status, xhr)
        {
            // with our success handler, we're just logging the data...
            console.log(data, status, xhr);
            // but you can do something with it if you like - the JSON is deserialised into an object
            console.log(String(data.value).toUpperCase())
        }
        // listeners
        $('button#get').on('click', onGetClick);
        $('button#post').on('click', onPostClick);

    </script>
@stop