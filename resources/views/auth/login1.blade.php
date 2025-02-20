{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>N-Air a E-commerce category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <meta charset utf="8">
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

    <!--fonts-->
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--shop-kart-js-->
    <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
    <!-- FlexSlider -->
    <script src="js/imagezoom.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <script>
        // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
    </script>
    <!-- //FlexSlider-->
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="index.html">N-AIR</a>
                </div>
                <div class="login-bars">
                    <a class="btn btn-default log-bar" href="register.html" role="button">Sign up</a>
                    <a class="btn btn-default log-bar" href="signup.html" role="button">Login</a>
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span>(<span id="simpleCart_quantity"
                                        class="simpleCart_quantity"></span>)
                                </div>
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!---menu-----bar--->
            <div class="header-botom">
                <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.html">Shoes</a></li>
                                        <li><a href="products.html">Tees</a></li>
                                        <li><a href="products.html">Tops</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Tracks</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Gear</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-4 menu-img-pad">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="products.html">Joggers</a></li>
                                                    <li><a href="products.html">Foot Ball</a></li>
                                                    <li><a href="products.html">Cricket</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="products.html">Tennis</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="products.html">Casual</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4 menu-img-pad">
                                                <a href="#"><img src="images/menu1.jpg" alt="/"
                                                        class="img-rsponsive men-img-wid" /></a>
                                            </div>
                                            <div class="col-sm-4 menu-img-pad">
                                                <a href="#"><img src="images/menu2.jpg" alt="/"
                                                        class="img-rsponsive men-img-wid" /></a>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-2">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="products.html">Tops</a></li>
                                                    <li><a href="products.html">Bottoms</a></li>
                                                    <li><a href="products.html">Yoga Pants</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="products.html">Sports</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="products.html">Gym</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="#"><img src="images/menu3.jpg" alt="/"
                                                        class="img-rsponsive men-img-wid" /></a>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="products.html">Tees</a></li>
                                        <li><a href="products.html">Shorts</a></li>
                                        <li><a href="products.html">Gear</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Watches</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Shoes</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Catch</a></li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->
                    <div class="clearfix"></div>
                </div>
                <!--/.content--->
            </div>
            <!--header-bottom-->
        </div>
    </div>
    <div class="head-bread">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">HOME</a></li>
                <li class="active">LOGIN</li>
            </ol>
        </div>
    </div>
    <!--signup-->
    <!-- login-page -->
    <div class="login">
        <div class="container">
            <div class="login-grids">
                <div class="col-md-6 log">
                    <h3>Login</h3>
                    <div class="strip"></div>
                    <p>Welcome, please enter the following to continue.</p>
                    <p>If you have previously Login with us, <a href="#">Click Here</a></p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h5>Email:</h5>
                        @error('email')
                        <small>{{ $message }}</small>
                        @enderror
                        <input type="email" name="email" value="">
                        <h5>Password:</h5>
                        @error('password')
                        <small>{{ $message }}</small>
                        @enderror
                        <input type="password" name="password" value=""><br>
                        <input type="submit" value="Login">

                    </form>
                    <a href="#">Forgot Password ?</a>
                </div>
                <div class="col-md-6 login-right">
                    <h3>New Registration</h3>
                    <div class="strip"></div>
                    <p>By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and more.
                    </p>
                    <a href="register.html" class="button">Create An Account</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //login-page -->
    <!--signup-->
    <div class="footer-grid">
        <div class="container">
            <div class="col-md-2 re-ft-grd">
                <h3>Categories</h3>
                <ul class="categories">
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casuals</a></li>
                    <li><a href="#">Sports</a></li>
                </ul>
            </div>
            <div class="col-md-2 re-ft-grd">
                <h3>Short links</h3>
                <ul class="shot-links">
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Terms & conditions</a></li>
                    <li><a href="contact.html">Sitemap</a></li>
                </ul>
            </div>
            <div class="col-md-6 re-ft-grd">
                <h3>Social</h3>
                <ul class="social">
                    <li><a href="#" class="fb">facebook</a></li>
                    <li><a href="#" class="twt">twitter</a></li>
                    <li><a href="#" class="gpls">g+ plus</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="col-md-2 re-ft-grd">
                <div class="bt-logo">
                    <div class="logo">
                        <a href="index.html" class="ft-log">N-AIR</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copy-rt">
            <div class="container">
                <p>&copy; 2015 N-AIR All Rights Reserved. Design by <a href="http://www.w3layouts.com">w3layouts</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('failed'))
    <script>
        Swal.fire(' {{ $message }} ')
    </script>
    @endif
    @if($message = Session::get('success'))
    <script>
        Swal.fire(' {{ $message }} ')
    </script>
    @endif
     
</body>

</html>