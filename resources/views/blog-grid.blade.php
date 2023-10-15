<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Blog Grid</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/base.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

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
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Blogs</li>
                            </ul>
                            <h1 class="title">Blog Grid</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="assets/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Blog Area  -->
        <div class="axil-blog-area axil-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row g-5">
                            @foreach ($getir as $blog )
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{ route("blogdetail",$blog->id) }}">
                                                <img src="resimler/{{ $blog->resim }}" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Digital Art's</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{ route("blogdetail", $blog->id) }}">{{ $blog->baslik }}</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{ route("blogdetail",$blog->id) }}">Devamını Oku <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <div class="post-pagination">
                            <nav class="navigation pagination" aria-label="Products">
                                <ul class="page-numbers">
                                    {{-- Önceki sayfa bağlantısı --}}
                                    @if ($getir->onFirstPage())

                                    @else
                                        <li><a class="page-numbers" href="{{ $getir->previousPageUrl() }}">Önceki</a></li>
                                    @endif

                                    {{-- Diğer sayfalar --}}
                                    @foreach ($getir->getUrlRange(1, $getir->lastPage()) as $page => $url)
                                        @if ($page == $getir->currentPage())
                                            <li><span aria-current="page" class="page-numbers current">{{ $page }}</span></li>
                                        @else
                                            <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    {{-- Sonraki sayfa bağlantısı --}}
                                    @if ($getir->hasMorePages())
                                        <li><a class="next page-numbers" href="{{ $getir->nextPageUrl() }}">Sonraki</a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <aside class="axil-sidebar-area">

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title">Latest Posts</h6>

                                <!-- Start Single Post List  -->
                                <div class="content-blog post-list-view mb--20">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-04.png" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="blog-details.html">Dubai’s FRAME Offers its Take on the</a></h6>
                                        <div class="axil-post-meta">
                                            <div class="post-meta-content">
                                                <ul class="post-meta-list">
                                                    <li>Mar 27, 2022</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post List  -->

                                <!-- Start Single Post List  -->
                                <div class="content-blog post-list-view mb--20">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-05.png" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="blog-details.html">Apple presents App Best of 2020 winners</a></h6>
                                        <div class="axil-post-meta">
                                            <div class="post-meta-content">
                                                <ul class="post-meta-list">
                                                    <li>Mar 20, 2022</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post List  -->

                                <!-- Start Single Post List  -->
                                <div class="content-blog post-list-view">
                                    <div class="thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-06.png" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="blog-details.html">Gallaudet University innovation in education</a></h6>
                                        <div class="axil-post-meta">
                                            <div class="post-meta-content">
                                                <ul class="post-meta-list">
                                                    <li>Mar 15, 2022</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post List  -->

                            </div>
                            <!-- End Single Widget  -->
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title">Recent Viewed Products</h6>
                                <ul class="product_list_widget recent-viewed-product">
                                    <!-- Start Single product_list  -->
                                    <li>
                                        <div class="thumbnail">
                                            <a href="blog-details.html">
                                                <img src="assets/images/product/product-12.jpg" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-details.html">Men's Fashion Tshirt</a></h6>
                                            <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$30</del>
                            $20
                        </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single product_list  -->
                                    <!-- Start Single product_list  -->
                                    <li>
                                        <div class="thumbnail">
                                            <a href="blog-details.html">
                                                <img src="assets/images/product/product-10.jpg" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-details.html">Nike Shoes</a></h6>
                                            <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$200</del>
                            $150
                        </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single product_list  -->
                                    <!-- Start Single product_list  -->
                                    <li>
                                        <div class="thumbnail">
                                            <a href="blog-details.html">
                                                <img src="assets/images/product/product-11.jpg" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-details.html">Addidas Shoes</a></h6>
                                            <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$300</del>
                            $200
                        </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single product_list  -->
                                </ul>

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_search">
                                <h6 class="widget-title">Search</h6>
                                <form class="blog-search" action="#">
                                    <button class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" placeholder="Search">
                                </form>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_archive">
                                <h6 class="widget-title">Archives List</h6>
                                <ul>
                                    <li><a href="#">January 2020</a></li>
                                    <li><a href="#">February 2020</a></li>
                                    <li><a href="#">March 2020</a></li>
                                    <li><a href="#">April 2020</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_archive_dropdown">
                                <h6 class="widget-title">Archives Dropdown</h6>
                                <select>
                                    <option>Select Month</option>
                                    <option>April 2020 (4)</option>
                                    <option>May 2020 (4)</option>
                                    <option>June 2020 (4)</option>
                                    <option>July 2020 (4)</option>
                                </select>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_tag_cloud">
                                <h6 class="widget-title">Tags</h6>
                                <div class="tagcloud">
                                    <a href="#">Design</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Graphic</a>
                                    <a href="#">Development</a>
                                    <a href="#">UI/UX Design</a>
                                    <a href="#">eCommerce</a>
                                    <a href="#">CSS</a>
                                    <a href="#">JS</a>
                                </div>
                            </div>
                            <!-- End Single Widget  -->

                        </aside>
                        <!-- End Sidebar Area -->
                    </div>
                </div>
                <!-- End post-pagination -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End Blog Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
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
    </div>
    <!-- Start Footer Area  -->
    @include('footer');

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
