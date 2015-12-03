@extends('frontend.master');
@section('content')

<section class="my_account parallax">

    <!-- CONTAINER -->
    <div class="container">

        <div class="my_account_block clearfix">
            <div class="login">
                <h2>I'M ALREADY REGISTERED</h2>
                {{--<form class="login_form" action="javascript:void(0);" method="get">--}}
                    {{--<input type="text" name="username" value="Username or email" onFocus="if (this.value == 'Username or email') this.value = '';" onBlur="if (this.value == '') this.value = 'Username or email';" />--}}
                    {{--<input class="last" type="text" name="password" value="Password" onFocus="if (this.value == 'Password') this.value = '';" onBlur="if (this.value == '') this.value = 'Password';" />--}}
                    {{--<div class="clearfix">--}}
                        {{--<div class="pull-left"><input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">Keep me signed</label></div>--}}
                        {{--<div class="pull-right"><a class="forgot_pass" href="javascript:void(0);" >Forgot password?</a></div>--}}
                    {{--</div>--}}
                    {{--<div class="center"><input type="submit" value="Login"></div>--}}
                {{--</form>--}}

                <form class="login_form" method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                    <div>
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="email">
                    </div>

                    <div>
                        <input class="last" type="text" name="password" id="password" placeholder="password">
                    </div>

                    <div class="clearfix">
                        <div class="pull-left">
                            <input type="checkbox" id="categorymanufacturer1"  name="remember" />
                            <label for="categorymanufacturer1">Keep me signed</label>
                        </div>
                        <div class="pull-right">
                            <a class="forgot_pass" href="javascript:void(0);" >Forgot password?</a>
                        </div>
                    </div>

                    {{--<div>--}}
                        {{--<input type="checkbox" name="remember"> Remember Me--}}
                    {{--</div>--}}

                    <div class="center">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
            <div class="new_customers">
                <h2>NEW CUSTOMERS</h2>
                <p>Register with Glammy Shop to enjoy personalized services, including:</p>
                <ul>
                    <li><a href="javascript:void(0);" >—  Online Order Status</a></li>
                    <li><a href="javascript:void(0);" >—  Love List</a></li>
                    <li><a href="javascript:void(0);" >—  Sign up to receive exclusive news and private sales</a></li>
                    <li><a href="javascript:void(0);" >—  Place Test Orders</a></li>
                    <li><a href="javascript:void(0);" >—  Quick and easy checkout</a></li>
                </ul>
                <div class="center"><a class="btn active" href="{!! url('auth/register') !!}" >create new account</a></div>
            </div>
        </div>

        <div class="my_account_note center">HAVE A QUESTION? <b>1 800 888 02828</b></div>
    </div><!-- //CONTAINER -->
</section>
@stop