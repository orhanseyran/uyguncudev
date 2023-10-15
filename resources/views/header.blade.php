<header class="header axil-header header-style-1">
    <div class="header-top-campaign">
        <div class="container position-relative">
            <div class="campaign-content">
                <p>Muhteşem İndirimli Ürünler <a href="{{ route("shop") }}">Şimdi Mağazamızda</a></p>
            </div>
        </div>
        <button class="remove-campaign"><i class="fal fa-times"></i></button>
    </div>
    <div class="axil-header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="header-top-dropdown">


                    </div>
                </div>
                @if (!auth()->check())

                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul class="quick-link">
                            <li><a href="{{ route("loginkullanıcı") }}">Giriş Yap</a></li>
                        </ul>
                    </div>
                </div>

                @elseif(auth()->user()->role == "Admin" )
                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul class="quick-link">
                            <li><a href="{{ route("homeadmin") }}">Merhaba Admin {{ auth()->user()->name }}</a></li>
                        </ul>
                    </div>
                </div>

                @else
                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul class="quick-link">
                            @if (auth()->user()->role == "Admin")
                            <li><a href="{{ route("hesabım") }}">Merhaba Admin {{ auth()->user()->name }}</a></li>
                            @else
                            <li><a href="{{ route("hesabım") }}">Merhaba {{ auth()->user()->name }}</a></li>
                            @endif

                        </ul>
                    </div>
                </div>

                @endif

            </div>
        </div>
    </div>
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="/" class="logo logo-dark">
                        <img  style="height: 80px;" src="{{ asset("resimler/logo.png") }}" alt="Site Logo">
                    </a>
                    <a href="/" class="logo logo-light">
                        <img src="{{ asset("resimler/logo.png") }}" alt="Site Logo">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="/" class="logo">
                                <img src="resimler/logo.png" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li><a href="/">Ana Sayfa</a></li>
                            <li><a href="{{ route("shop") }}">Ürünler</a></li>
                            <li><a href="#">Biz Kimiz</a></li>
                            <li><a href="{{ route("blog") }}">Blog</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search">
                            <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="{{ route("wishlist") }}">
                                <i class="flaticon-heart"></i>
                            </a>
                        </li>
                        <li class="shopping-cart">
                            <a href="cart.html" class="cart-dropdown-btn">
                                <span class="cart-count">{{ ShoppingCart::count(); }}</span>
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                        @if (!auth()->check())

                                <div class="my-account-dropdown">
                                    <div class="login-btn">
                                        <a href="{{ route("loginuser") }}" class="axil-btn btn-bg-primary">Giriş Yap</a>
                                    </div>
                                    <div class="reg-footer text-center">Hesabın Yok MU ? <a href="sign-up.html" class="btn-link">Üye Ol.</a></div>
                                </div>

                            </div>
                            @elseif(auth()->user()->role == "Admin")
                            <div class="my-account-dropdown">

                                <ul>
                                    <li>
                                        <a href="{{ route("homeadmin") }}">Hesabım</a>
                                    </li>

                                </ul>
                                <div class="login-btn">
                                    <a href="{{ route("logout") }}" class="axil-btn btn-bg-primary">Çıkış Yap</a>
                                </div>

                            </div>
                            @else
                            <div class="my-account-dropdown">

                                <ul>
                                    <li>
                                        <a href="{{ route("hesabım") }}">Hesabım</a>
                                    </li>

                                </ul>
                                <div class="login-btn">
                                    <a href="{{ route("logoutalici") }}" class="axil-btn btn-bg-primary">Çıkış Yap</a>
                                </div>



                          @endif

                        </li>
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
