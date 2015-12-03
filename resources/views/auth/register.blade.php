@extends('frontend.master');
@section('content')
        <!-- MY ACCOUNT PAGE -->
<section class="my_account parallax">

    <!-- CONTAINER -->
    <div class="container">

        <div class="my_account_block clearfix">
            <div class="login">
                <h2><a href="{!! url('auth/login') !!}">I'M ALREADY REGISTERED</a></h2>

                <form class="login_form" method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                    <div>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                    </div>

                    <div>
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                    </div>

                    <div>
                        <input type="text" name="password" placeholder="Enter your password">
                    </div>

                    <div>
                        <input type="text" name="password_confirmation" placeholder="Confirm your password">
                    </div>

                    <div class="center">
                        <input type="submit" value="create new account">
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
            </div>
        </div>

        <div class="my_account_note center">HAVE A QUESTION? <b>1 800 888 02828</b></div>
    </div><!-- //CONTAINER -->
</section><!-- //MY ACCOUNT PAGE -->
@stop