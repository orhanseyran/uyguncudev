<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Blog Details</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/font-awesome.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/flaticon/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/slick-theme.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/jquery-ui.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/sal.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendor/base.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.min.css") }}">

</head>


<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    @include('header')
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Hakkımızda</li>
                            </ul>
                            <h1 class="title">{{ $about->baslik }}</h1>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="assets/images/product/product-45.png" alt="Resim">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Breadcrumb Alanı Sonu -->

        <!-- Hakkında Alanına Başla -->
        <div class="axil-about-area about-style-1 axil-section-gap ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-thumbnail">
                            <div class="thumbnail">
                                <img src="./assets/images/about/about-01.png" alt="Hakkımızda">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6">
                        <div class="about-content content-right">
                            <span class="title-highlighter highlighter-primary2"> <i class="far fa-shopping-basket"></i>{{ $about->baslik }}</span>
                            <h3 class="title">Online alışveriş, hem çevrimiçi şeyler satın almayı içerir.</h3>

                            <div class="row">
                                <div class="col-xl-12">
                                    <p>Satış ekiplerinizi endüstriye özgü çözümlerle güçlendirin, üreticilere dijitalleşmeleri konusunda destek
                                        verin ve değişen piyasalara ve müşterilere daha hızlı uyum sağlayarak yeni işler yaratın.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hakkında Alanı Sonu -->

        <!-- Hakkında Bilgi Alanına Başla -->
        <div class="about-info-area">
            <div class="container">
                <div class="row row--20">
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb">
                                <img src="assets/images/about/shape-01.png" alt="Şekil">
                            </div>
                            <div class="content">
                                <h6 class="title">40,000+ Mutlu Müşteri</h6>
                                <p>Satış ekiplerinizi endüstriye özgü çözümlerle güçlendirin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb">
                                <img src="assets/images/about/shape-02.png" alt="Şekil">
                            </div>
                            <div class="content">
                                <h6 class="title">16 Yıllık Deneyim</h6>
                                <p>Satış ekiplerinizi endüstriye özgü çözümlerle güçlendirin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb">
                                <img src="assets/images/about/shape-03.png" alt="Şekil">
                            </div>
                            <div class="content">
                                <h6 class="title">12 Ödül Kazanıldı</h6>
                                <p>Satış ekiplerinizi endüstriye özgü çözümlerle güçlendirin.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End About Area  -->

        <!-- Start Team Area  -->
        {{-- <div class="axil-team-area bg-wild-sand">
            <div class="team-left-fullwidth">
                <div class="container ml--xxl-0">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="fas fa-users"></i> Our Team</span>
                        <h3 class="title">Expart Management Team</h3>
                    </div>
                    <div class="team-slide-activation slick-layout-wrapper--20 axil-slick-arrow  arrow-top-slide">
                        <div class="slick-single-layout">
                            <div class="axil-team-member">
                                <div class="thumbnail"><img src="./assets/images/team/team-01.png" alt="Cody Fisher"></div>
                                <div class="team-content">
                                    <span class="subtitle">Founder</span>
                                    <h5 class="title">Rosalina D. Willson</h5>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-team-member">
                                <div class="thumbnail"><img src="./assets/images/team/team-02.png" alt="Cody Fisher"></div>
                                <div class="team-content">
                                    <span class="subtitle">CEO</span>
                                    <h5 class="title">Ukolilix X. Xilanorix</h5>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-team-member">
                                <div class="thumbnail"><img src="./assets/images/team/team-03.png" alt="Cody Fisher"></div>
                                <div class="team-content">
                                    <span class="subtitle">Designer</span>
                                    <h5 class="title">Alonso M. Miklonax</h5>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-team-member">
                                <div class="thumbnail"><img src="./assets/images/team/team-04.png" alt="Cody Fisher"></div>
                                <div class="team-content">
                                    <span class="subtitle">Designer</span>
                                    <h5 class="title">Alonso M. Miklonax</h5>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-team-member">
                                <div class="thumbnail"><img src="./assets/images/team/team-02.png" alt="Cody Fisher"></div>
                                <div class="team-content">
                                    <span class="subtitle">Designer</span>
                                    <h5 class="title">Alonso M. Miklonax</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area  -->

        <!-- Start About Area  -->
        <div class="axil-about-area about-style-2">
            <div class="container">
                <div class="row align-items-center mb--80 mb_sm--60">
                    <div class="col-lg-5">
                        <div class="about-thumbnail">
                            <img src="assets/images/about/about-02.png" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content content-right">
                            <span class="subtitle">Features #01</span>
                            <h4 class="title">Solutions that work together</h4>
                            <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                                coding required. Migrate your items from your point of sale system or turn your
                                Instagram feed into a shopping site and start selling fast. Square Online works
                                for all kinds of businesses—retail, restaurants, services.</p>
                            <a href="contact.html" class="axil-btn btn-outline">Get In Touch</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <div class="about-thumbnail">
                            <img src="assets/images/about/about-03.png" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="about-content content-left">
                            <span class="subtitle">Features #01</span>
                            <h4 class="title">Solutions that work together</h4>
                            <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                                coding required. Migrate your items from your point of sale system or turn your
                                Instagram feed into a shopping site and start selling fast. Square Online works
                                for all kinds of businesses—retail, restaurants, services.</p>
                            <a href="contact.html" class="axil-btn btn-outline">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Start Footer Area  -->
    @include('footer')
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/counterup.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
