<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Single Product Style 8</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
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


<body class="sticky-header overflow-md-visible">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
@include('header');
    <!-- End Header -->

    <main class="main-wrapper">
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gapcommon single-product-modern">
                <div class="container">
                    <div class="row row--20">
                        <div class="col-lg-6 mb--40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-large-thumbnail-4 single-product-thumbnail axil-product">
                                        <div class="thumbnail">
                                            <img src="{{ asset("assets/images/product/product-big-16.png") }}" alt="Product Images">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="small-thumb-wrapper product-small-thumb-4 slick-layout-wrapper--10 axil-slick-arrow arrow-both-side">
                                        <div class="small-thumb-img">
                                            <img src="{{ asset("assets/images/product/product-thumb/thumb-16.png") }}" alt="samll-thumb">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h2 class="product-title">{{ $product ->baslik }}</h2>
                                    @if ($product->fiyat == null )
                                    <span class="price-amount">Fiyat İçin İletişme Geçin</span>
                                    @else
                                    <span class="price-amount">{{  $product->fiyat   }}  TL</span>
                                    @endif

                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="review-number">6,405</div>
                                        <div class="total-answerd">2 answered questions</div>
                                    </div>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        {{-- <div class="product-variation product-size-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li class="active">xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div> --}}
                                        <!-- End Product Variation  -->
                                        <!-- Start Product Variation  -->
                                        {{-- <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-04"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                        <!-- End Product Variation  -->
                                        {{-- <div class="product-variation quantity-variant-wrapper">
                                            <h6 class="title">Quantity</h6>
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div> --}}

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper">
                                        @if ($product->fiyat == null)
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="#" class="axil-btn btn-bg-primary"><i class="far fa-shopping-bag"></i> İletişime Geç</a></li>


                                        </ul>
                                        @else
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="{{ route("checkout") }}" class="axil-btn btn-bg-secondary"><i class="far fa-shopping-bag"></i> Şimdi Satın Al</a></li>
                                            <li class="add-to-cart"><a href="{{ route("addtocart",$product ->id) }}" class="axil-btn btn-bg-primary"><i class="far fa-shopping-cart"></i> Sepete Ekle</a></li>

                                        </ul>
                                        @endif

                                        <!-- Start Product Action  -->

                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->
            <div class="woocommerce-tabs wc-tabs-wrapper bg-lighter wc-tab-style-two">
                <div class="container">
                    <div class="section-title-wrapper section-title-border">
                        <h2 class="title">Ürün Hakkında 💥</h2>
                    </div>
                    <div class="tabs-wrap">
                        <ul class="nav tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Özellikleri</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Yorumlar</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-desc-wrapper">
                                    <div class="single-desc">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul>
                                                {!! $product->aciklama !!}
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .product-desc-wrapper -->
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-wrapper">
                                    <div class="row">
                                        <div class="col-lg-6 mb--40">
                                            <div class="axil-comment-area pro-desc-commnet-area">
                                                <h5 class="title">Review for this product</h5>
                                                <ul class="comment-list">
                                                    <!-- Start Single Comment  -->

                                                    <!-- End Single Comment  -->

                                                    <!-- Start Single Comment  -->
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <div class="single-comment">
                                                                <div class="comment-img">
                                                                    <img src="{{ asset("./assets/images/blog/author-image-4.png") }}" alt="Author Images">
                                                                </div>
                                                                <div class="comment-inner">
                                                                    <h6 class="commenter">
                                                                        <a class="hover-flip-item-wrapper" href="#">
                                                                            <span class="hover-flip-item">
                                                                                <span data-text="Rahabi Khan">Courtney
                                                                                    Henry</span>
                                                                            </span>
                                                                        </a>
                                                                        <span
                                                                            class="commenter-rating ratiing-four-star">
                                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                                        </span>
                                                                    </h6>
                                                                    <div class="comment-text">
                                                                        <p>“We’ve created a full-stack structure for our
                                                                            working workflow processes, were from the
                                                                            funny the century initial all the made, have
                                                                            spare to negatives. ”</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- End Single Comment  -->

                                                    <!-- Start Single Comment  -->

                                                    <!-- End Single Comment  -->
                                                </ul>
                                            </div>
                                            <!-- End .axil-commnet-area -->
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-lg-6 mb--40">
                                            <!-- Start Comment Respond  -->
                                            <div class="comment-respond pro-des-commend-respond mt--0">
                                                <h5 class="title mb--30">Add a Review</h5>
                                                <p>Your email address will not be published. Required fields are marked
                                                    *</p>
                                                <div class="rating-wrapper d-flex-center mb--40">
                                                    Your Rating <span class="require">*</span>
                                                    <div class="reating-inner ml--20">
                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                    </div>
                                                </div>

                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Other Notes (optional)</label>
                                                                <textarea name="message" placeholder="Your Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>Name <span class="require">*</span></label>
                                                                <input id="name" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>Email <span class="require">*</span> </label>
                                                                <input id="email" type="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-submit">
                                                                <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Submit
                                                                    Comment</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Comment Respond  -->
                                        </div>
                                        <!-- End .col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-features">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-features">
                                    <div class="icon">
                                        <i class="far fa-hand-holding-box"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Easy Return</h6>
                                        <p>Anytime you can return the product without any payment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-features">
                                    <div class="icon quality">
                                        <i class="fal fa-badge-check"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Quality Service</h6>
                                        <p>We are dedicated to give you quality service for your happiness</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-features">
                                    <div class="icon original">
                                        <i class="fal fa-box"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Original Product</h6>
                                        <p>We deliver you each and every prodeuct is original </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- Start Expolre Product Area  -->
        <div class="axil-new-arrivals-product-area fullwidth-container flash-sale-area section-gap-80-35">
            <div class="container ml--xxl-0">
                <div class="section-title-border slider-section-title">
                    <h2 class="title">Recently Viewed 💥</h2>
                </div>
                <div class="recently-viwed-activation slick-layout-wrapper--15 axil-slick-angle angle-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy" class="main-img" src="assets/images/product/fashion/product-26.png" alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget sale">Sale</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Add to Cart
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Kalrez® Spectrum™ 6375</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30.00</span>
                                        <span class="price current-price">$17.84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="150" data-sal-duration="800" loading="lazy" class="main-img" src="assets/images/product/fashion/product-27.png" alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget">20% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Add to Cart
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Calvin Klein womens Solid Sheath With Chiffon Bell Sleeves Dress</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$100.00</span>
                                        <span class="price current-price">$78.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="single-product-8.html">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="assets/images/product/fashion/product-28.png" alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget">TOP SELLING</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="single-product-8.html">
                                                <i class="far fa-shopping-cart"></i> Add to Cart
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product-8.html">Gildan Men's Ultra Cotton T-Shirt, Style G2000,</a></h5>
                                    <div class="product-rating">
                                        <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                        <span class="rating-number">6,400</span>
                                    </div>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$20.00</span>
                                        <span class="price current-price">$17.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!-- End Expolre Product Area  -->
        <div class="sale-banner-area">
            <div class="container">
                <div class="sale-banner-thumb">
                    <a href="shop.html"><img src="assets/images/banner/sale_banner.png" alt="Sale Banner"></a>
                </div>
            </div>
        </div>
        <div class="service-area axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper section-title-border">
                    <h2 class="title">Our Service 💥</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="service-box service-style-3">
                            <div class="icon">
                                <i class="far fa-truck"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">Fast &amp; Secure Delivery</h6>
                                <p>Tell about your service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="service-box service-style-3">
                            <div class="icon">
                                <i class="fal fa-badge-check"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">Money Back Guarantee</h6>
                                <p>Within 10 days.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="service-box service-style-3">
                            <div class="icon">
                                <i class="far fa-hand-holding-box"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">24 Hour Return Policy</h6>
                                <p>No question ask.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="service-box service-style-3">
                            <div class="icon">
                                <i class="far fa-headset"></i>
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
    </main>


    <!-- Start Footer Area  -->
@include('footer');



    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset("assets/js/vendor/modernizr.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/slick.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/js.cookie.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery.ui.touch-punch.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery.countdown.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/sal.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/counterup.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/waypoints.min.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>

</body>

</html>
