<!-- HEADER -->
<header>

    <!-- TOP INFO -->
    <div class="top_info">

        <!-- CONTAINER -->
        <div class="container clearfix">

            <ul class="secondary_menu">

            @if(Auth::guest())
                <li><a href="{!! url('auth/login') !!}" >Login</a></li>
                <li><a href="{!! url('auth/register') !!}" >Register</a></li>
            @else
                <li><a href="">{{Auth::user()->name}}</a></li>
                <li><a href="{!! url('auth/logout') !!}">Logout</a></li>
            @endif

            </ul>

            <div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div>

            <div class="phone_top">have a question? <a href="tel:1 800 888 2828" >1 800 888 2828</a></div>
        </div><!-- //CONTAINER -->
    </div><!-- TOP INFO -->


    <!-- MENU BLOCK -->
    <div class="menu_block">

        <!-- CONTAINER -->
        <div class="container clearfix">

            <!-- LOGO -->
            <div class="logo">
                <a href="{!! route('home') !!}" ><img src="{!! url('assets/frontend/images/logo.png')!!}" alt="" /></a>
            </div><!-- //LOGO -->


            <!-- SEARCH FORM -->
            <div class="top_search_form">
                <a class="top_search_btn" href="javascript:void(0);" ><i class="fa fa-search"></i></a>
                <form method="get" action="#">
                    <input type="text" name="search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
                </form>
            </div><!-- SEARCH FORM -->


            <!-- SHOPPING BAG -->
            <div class="shopping_bag">
                <a class="shopping_bag_btn" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i><p>shopping bag</p><span id="cartqty">{!! $cartqty !!}</span></a>
                <div class="cart">
                    <ul class="cart-items" style="max-height: 300px; overflow: scroll">
                        {{--@foreach($items as $item)--}}
                        {{--<li class="clearfix">--}}
                            {{--<img class="cart_item_product" src="images/tovar/women/1.jpg" alt="" />--}}
                            {{--<a href="product-page.html" class="cart_item_title">{!! $item['name'] !!}</a>--}}
                            {{--<span class="cart_item_price">{!! $item['qty'] !!} × ${!! $item['price'] !!}</span>--}}
                        {{--</li>--}}
                        {{--@endforeach--}}
                    </ul>
                    <div class="cart_total">
                        <div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>${!! $totalprice !!}</b></span></div>
                        <a class="btn active" href="{!! route('cart') !!}">Show cart</a>
                        <a class="btn active" style="margin-top: 20px; background-color: #be262600;" href="{!! route('checkout') !!}">Checkout</a>
                    </div>
                </div>
            </div><!-- //SHOPPING BAG -->


            <!-- LOVE LIST -->
            <div class="love_list">
                <a class="love_list_btn" href="javascript:void(0);" ><i class="fa fa-heart-o"></i><p>Love list</p><span>0</span></a>
                <div class="cart">
                    <ul class="cart-items">
                        <li>Cart is empty</li>
                    </ul>
                    <div class="cart_total">
                        <div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$0</b></span></div>
                        <a class="btn active" href="checkout.html">Checkout</a>
                    </div>
                </div>
            </div><!-- //LOVE LIST -->


            <!-- MENU -->
            <ul class="navmenu center">
                @foreach($cate as $category)
                    @if($category['parent_id'] == 0)
                <li class="sub-menu first active"><a href="{!! route('cate',$category['slug']) !!}" >{!! $category['cate_name'] !!}</a>

                    <ul class="mega_menu megamenu_col1 clearfix">
                        <li class="col">
                            <ol>
                                @foreach($cate as $cates)
                                    @if($cates['parent_id'] == $category['id'])
                                        <li class="active"><a href="{!! route('cate',$cates['slug']) !!}" >{!! $cates['cate_name'] !!}</a></li>
                                    @endif

                                @endforeach
                            </ol>
                        </li>
                    </ul>
                </li>
                    @endif

                @endforeach
                <li class="last sale_menu"><a href="sale.html" >Sale</a></li>
            </ul><!-- //MENU -->
        </div><!-- //MENU BLOCK -->
    </div><!-- //CONTAINER -->
</header><!-- //HEADER -->
