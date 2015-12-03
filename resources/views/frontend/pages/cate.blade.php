@extends('frontend.master')
@section('content')
        <!-- BREADCRUMBS -->
<section class="breadcrumb women parallax margbot30">

    <!-- CONTAINER -->
    <div class="container">
        <h2>Women</h2>
    </div><!-- //CONTAINER -->
</section><!-- //BREADCRUMBS -->

<!-- SHOP BLOCK -->
<section class="shop">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- SIDEBAR -->
            <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">

                <!-- CATEGORIES -->
                <div class="sidepanel widget_categories">
                    <h3>Product Categories</h3>
                    <ul>
                        @foreach($cates as $cate)
                        <li><a href="{!! route('cate',$cate['slug']) !!}" >{!! $cate['cate_name'] !!}</a></li>
                        @endforeach
                    </ul>
                </div><!-- //CATEGORIES -->

                <!-- PRICE RANGE -->
                <div class="sidepanel widget_pricefilter">
                    <h3>Filter by price</h3>
                    <div id="price-range" class="clearfix">
                        <label for="amount">Range:</label>
                        <input type="text" id="amount"/>
                        <div class="padding-range"><div id="slider-range"></div></div>
                    </div>
                </div><!-- //PRICE RANGE -->

                <!-- SHOP BY SIZE -->
                <div class="sidepanel widget_sized">
                    <h3>SHOP BY SIZE</h3>
                    <ul>
                        @foreach($sizes as $size)
                        <li><a class="sizeXS" href="javascript:void(0);" >{!! $size->size_name !!}</a></li>
                        @endforeach

                    </ul>
                </div><!-- //SHOP BY SIZE -->

                <!-- SHOP BY COLOR -->
                <div class="sidepanel widget_color">
                    <h3>SHOP BY COLOR</h3>
                    <ul>
                        @foreach($color as $c)
                            <li><a class="color1" href="javascript:void(0);" style="background: {!! $c !!}"></a></li>
                        @endforeach
                    </ul>
                </div><!-- //SHOP BY COLOR -->

                <!-- SHOP BY BRANDS -->
                <div class="sidepanel widget_brands">
                    <h3>SHOP BY BRANDS</h3>

                <?php $count = 1 ?>
                @foreach($brands as $brand)
                    <?php $count++ ?>
                    <input type="checkbox" id="categorymanufacturer{!! $count !!}" /><label for="categorymanufacturer{!! $count !!}">{!! $brand['brand_name'] !!} <span>({!! count($brand->product) !!})</span></label>
                    @endforeach
                </div><!-- //SHOP BY BRANDS -->

                <!-- BANNERS WIDGET -->
                <div class="widget_banners">
                    <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner10.jpg')!!}" alt="" /></a>
                    <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner9.jpg')!!}" alt="" /></a>
                    <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner8.jpg')!!}" alt="" /></a>
                </div><!-- //BANNERS WIDGET -->

                <!-- NEWSLETTER FORM WIDGET -->
                <div class="sidepanel widget_newsletter">
                    <div class="newsletter_wrapper">
                        <h3>NEWSLETTER</h3>
                        <form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
                            <input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
                            <input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
                        </form>
                    </div>
                </div><!-- //NEWSLETTER FORM WIDGET -->
            </div><!-- //SIDEBAR -->

            <!-- SHOP PRODUCTS -->
            <div class="col-lg-9 col-sm-9 col-sm-9 padbot20">

                <!-- SHOP BANNER -->
                <div class="banner_block margbot15">
                    <a class="banner nobord" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner21.jpg')!!}" alt="" /></a>
                </div><!-- //SHOP BANNER -->

                <!-- SORTING TOVAR PANEL -->
                <div class="sorting_options clearfix">

                    <!-- COUNT TOVAR ITEMS -->
                    <div class="count_tovar_items">
                        <p>Sweaters</p>
                        <span>{!! count($products) !!} Items</span>
                    </div><!-- //COUNT TOVAR ITEMS -->

                    <!-- TOVAR FILTER -->
                    <div class="product_sort">
                        <p>SORT BY</p>
                        <select class="basic">
                            <option value="">Popularity</option>
                            <option>Reting</option>
                            <option>Date</option>
                        </select>
                    </div><!-- //TOVAR FILTER -->

                    <!-- PRODUC SIZE -->
                    <div id="toggle-sizes">
                        <a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
                        <a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
                    </div><!-- //PRODUC SIZE -->
                </div><!-- //SORTING TOVAR PANEL -->


                <!-- ROW -->
                <div class="row shop_block">

                    <!-- TOVAR1 -->
                    @foreach($products as $p)
                        {{--{{dd($p)}}--}}
                            <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
                                <div class="tovar_item clearfix">
                                    <div class="tovar_img">
                                        <div class="tovar_img_wrapper">
                                            <img class="img" src="{!! url('assets/frontend/images/tovar/women/'.$p->image_name)!!}" alt="" />
                                            <img class="img_h" src="{!! url('assets/frontend/images/tovar/women/'.$p->image_name)!!}" alt="" />
                                        </div>
                                        <div class="tovar_item_btns">
                                            <div class="open-project-link"><a class="open-project tovar_view" href="%21projects/women/1.html" ><span>quick</span> view</a></div>
                                            <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
                                            <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="tovar_description clearfix">
                                        <a class="tovar_title" href="product-page.html" >{!! $p->product_name !!}</a>
                                        <span class="tovar_price">${!! $p->price !!}</span>
                                    </div>
                                    <div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
                                </div>
                            </div><!-- //TOVAR1 -->
                    @endforeach
                </div><!-- //ROW -->

                <hr>
                {!! $products->render() !!}

                {{--<div class="clearfix">--}}
                    {{--<!-- PAGINATION -->--}}
                    {{--<ul class="pagination">--}}
                        {{--<li><a href="javascript:void(0);" >1</a></li>--}}
                        {{--<li><a href="javascript:void(0);" >2</a></li>--}}
                        {{--<li class="active"><a href="javascript:void(0);" >3</a></li>--}}
                        {{--<li><a href="javascript:void(0);" >4</a></li>--}}
                        {{--<li><a href="javascript:void(0);" >5</a></li>--}}
                        {{--<li><a href="javascript:void(0);" >6</a></li>--}}
                        {{--<li><a href="javascript:void(0);" >...</a></li>--}}
                    {{--</ul><!-- //PAGINATION -->--}}

                    <a class="show_all_tovar" href="javascript:void(0);" >show all</a>

                </div>

                <hr>

                <div class="padbot60 services_section_description">
                    <p>We empower WordPress developers with design-driven themes and a classy experience their clients will just love</p>
                    <span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral.</span>
                </div>

                <!-- SHOP BANNER -->
                <div class="row top_sale_banners center">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner22.jpg')!!}" alt="" /></a></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="{!! url('assets/frontend/images/tovar/banner23.jpg')!!}" alt="" /></a></div>
                </div><!-- //SHOP BANNER -->
            </div><!-- //SHOP PRODUCTS -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //SHOP -->
@stop

@section('script')
    <script src="{!! url('assets/frontend/js/jqueryui.custom.min.js') !!}" type="text/javascript"></script>
@stop