@extends('frontend.master')
@section('content')
        <!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- TOVAR DETAILS -->
<section class="tovar_details padbot70">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- SIDEBAR TOVAR DETAILS -->
            <div class="col-lg-3 col-md-3 sidebar_tovar_details">
                <h3><b>other sweaters</b></h3>
                <ul class="tovar_items_small clearfix">
                    {{--{{dd($products)}}--}}
                    @foreach($products as $p)
                        <li class="clearfix">
                            <img class="tovar_item_small_img" src="{!! url('assets/frontend/images/tovar/women/'.$p->image_name) !!}" alt="" />
                            <a href="{!! route('frontend.pages.product',[$p->category->slug, $p->slug]) !!}" class="tovar_item_small_title">{!! $p->product_name !!}</a>
                            <span class="tovar_item_small_price">${!! $p->price !!}</span>
                        </li>
                    @endforeach


                </ul>
            </div><!-- //SIDEBAR TOVAR DETAILS -->

            <!-- TOVAR DETAILS WRAPPER -->
            <div class="col-lg-9 col-md-9 tovar_details_wrapper clearfix">
                <div class="tovar_details_header clearfix margbot35">
                    <h3 class="pull-left"><b>Sweaters</b></h3>

                    <div class="tovar_details_pagination pull-right">
                        <a class="fa fa-angle-left" href="javascript:void(0);" ></a>
                        <span>2 of 34</span>
                        <a class="fa fa-angle-right" href="javascript:void(0);" ></a>
                    </div>
                </div>

                <!-- CLEARFIX -->
                <div class="clearfix padbot40">
                    <div class="tovar_view_fotos clearfix">
                        <div id="slider2" class="flexslider">
                            <ul class="slides">
                                @foreach($product[0]->image as $image )
                                <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/women/'.$image['image_name']) !!}" alt="" /></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="carousel2" class="flexslider">
                            <ul class="slides">
                                @foreach($product[0]->image as $image )
                                    <li><a href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/women/'.$image['image_name']) !!}" alt="" /></a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="tovar_view_description">
                        <div class="tovar_view_title">{!! $product[0]->product_name !!}</div>
                        <div class="tovar_article">88-305-676</div>
                        <div class="clearfix tovar_brend_price">
                            <div class="pull-left tovar_brend">{!! $product[0]->brand->brand_name !!}</div>
                            <div class="pull-right tovar_view_price">${!! $product[0]->price !!}</div>
                        </div>
                        <div class="tovar_color_select">
                            <p>Select color</p>
                            @foreach($product[0]->color as $color)
                            <a style="background-color: #111111;" class="color1" href="javascript:void(0);" ></a>
                            @endforeach
                        </div>
                        <div class="tovar_size_select">
                            <div class="clearfix">
                                <p class="pull-left">Select SIZE</p>
                                <span>Size & Fit</span>
                            </div>
                            @foreach($product[0]->size as $size)
                            <a class="sizeXS" href="javascript:void(0);" >{!! $size->size_name !!}</a>
                            @endforeach

                        </div>
                        <div class="tovar_view_btn" >
                            <div class="fancy-select">
                            <select class="basic fancified">
                                @for($i =1; $i <= $product[0]->qty; $i++)
                                <option value="{!! $i !!}">{!! $i !!}</option>
                                @endfor

                            </select>
                            </div>
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
                </div><!-- //CLEARFIX -->

                <!-- TOVAR INFORMATION -->
                <div class="tovar_information">
                    <ul class="tabs clearfix">
                        <li class="current">Information</li>
                    </ul>

                    <div class="box visible">
                        {!! $product[0]->description !!}
                    </div>
                </div><!-- //TOVAR INFORMATION -->
            </div><!-- //TOVAR DETAILS WRAPPER -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //TOVAR DETAILS -->


<!-- BANNER SECTION -->
<section class="banner_section">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- BANNER WRAPPER -->
            <div class="banner_wrapper">
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
</section><!-- //BANNER SECTION -->


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

            <div class="jcarousel">
                <ul>
                    @foreach($products1 as $item)
                    <li>
                        <!-- TOVAR -->
                        <div class="tovar_item_new">
                            <div class="tovar_img">
                                <img src="{!! url('assets/frontend/images/tovar/women/'.$item['image_name']) !!}" alt="" />
                                <div class="open-project-link"><a class="open-project tovar_view" href="%21projects/women/1.html" >quick view</a></div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title" href="{!! route('frontend.pages.product',[$item->category->slug, $item->slug]) !!}" >{!! $item['product_name'] !!}</a>
                                <span class="tovar_price">${!! $item['price'] !!}</span>
                            </div>
                        </div><!-- //TOVAR -->
                    </li>
                    @endforeach
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->
@stop