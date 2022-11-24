<header>
    <div id="header-three" class="header-style1 header-fixed">
        <div class="header-top-bar top-bar-style1">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-8">
                        <div class="top-bar-left">
                            <a href="post-ad.html" class="cp-default-btn d-lg-none">Add New Item</a>
                            <p class="d-none d-lg-block">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>Have any questions? +88
                                01833685828 or
                                mail@pcstallbd.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                        <div class="top-bar-right">
                            <ul>
                                @if (!Auth::check())
                                    <li>
                                        <button type="button" class="login-btn" data-toggle="modal"
                                            data-target="#myModal">
                                            <i class="fa fa-lock" aria-hidden="true"></i>Login
                                        </button>
                                    </li>
                                @endif

                                @if (Auth::check())
                                    <li>
                                        <a href="{{ route('logout') }}" class="login-btn">
                                            <i class="fa fa-lock" aria-hidden="true"></i>Logout
                                        </a>
                                    </li>
                                @endif
                                <li class="hidden-mb">
                                    <a class="login-btn" href="#" id="login-button">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>Live Chat
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-primary" id="sticker">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="logo-area">
                            <a href="index.html" class="img-fluid">
                                <img src="{{ asset('img/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                        <div class="cp-main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Home</a>
                                        <ul class="cp-dropdown-menu">
                                            <li><a href="index-2.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                            <li><a href="index3.html">Home 3</a></li>
                                            <li><a href="index4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">Who We Are</a></li>
                                    <li><a href="how-it-works.html">How It Works?</a></li>
                                    <li class="menu-justify active"><a href="#">Pages</a>
                                        <div class="rt-dropdown-mega container">
                                            <div class="rt-dropdown-inner">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="index-2.html">Home 1</a></li>
                                                            <li><a href="index2.html">Home 2</a></li>
                                                            <li><a href="index3.html">Home 3</a></li>
                                                            <li><a href="index4.html">Home 4</a></li>
                                                            <li><a href="pricing.html">Pricing Plan</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="category-grid-layout1.html">Grid View
                                                                    1</a>
                                                            </li>
                                                            <li><a href="category-grid-layout2.html">Grid View
                                                                    2</a>
                                                            </li>
                                                            <li class="active"><a href="category-grid-layout3.html">Grid
                                                                    View 3</a></li>
                                                            <li><a href="category-list-layout1.html">List View
                                                                    1</a>
                                                            </li>
                                                            <li><a href="category-list-layout2.html">List View
                                                                    2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="category-list-layout3.html">List View
                                                                    3</a>
                                                            </li>
                                                            <li><a href="single-product-layout.html">Product
                                                                    Details
                                                                    1</a></li>
                                                            <li><a href="single-product-layout.html">Product
                                                                    Details
                                                                    2</a></li>
                                                            <li><a href="single-product-layout.html">Product
                                                                    Details
                                                                    3</a></li>
                                                            <li><a href="favourite-ad-list.html">Favourite
                                                                    Ad</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="my-account.html">My Account</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="post-ad.html">Post Ad</a></li>
                                                            <li><a href="https://www.radiustheme.com/demo/html/classipost/classipost/report-abuse.html"
                                                                    data-toggle="modal"
                                                                    data-target="#report_abuse">Report
                                                                    Abuse</a>
                                                            </li>
                                                            <li><a href="faq.html">Faq</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="category-grid-layout1.html">Features</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    @if (Auth::check())
                        <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                            <a href="{{ route('product.index') }}" class="cp-default-btn">My Account</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                        <li><a href="index3.html">Home 3</a></li>
                                        <li><a href="index4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">Who We Are</a></li>
                                <li><a href="how-it-works.html">How It Works?</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="pricing.html">Pricing Plan</a></li>
                                        <li><a href="category-grid-layout1.html">Grid View 1</a></li>
                                        <li><a href="category-grid-layout2.html">Grid View 2</a></li>
                                        <li><a href="category-grid-layout3.html">Grid View 3</a></li>
                                        <li><a href="category-list-layout1.html">List View 1</a></li>
                                        <li><a href="category-list-layout2.html">List View 2</a></li>
                                        <li><a href="category-list-layout3.html">List View 3</a></li>
                                        <li><a href="single-product-layout.html">Product Details 1</a></li>
                                        <li><a href="single-product-layout.html">Product Details 2</a></li>
                                        <li><a href="single-product-layout.html">Product Details 3</a></li>
                                        <li><a href="favourite-ad-list.html">Favourite Ad</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="post-ad.html">Post Ad</a></li>
                                        <li><a href="https://www.radiustheme.com/demo/html/classipost/classipost/report-abuse.html"
                                                data-toggle="modal" data-target="#report_abuse">Report
                                                Abuse</a>
                                        </li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </li>
                                <li><a href="category-grid-layout1.html">Features</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>
