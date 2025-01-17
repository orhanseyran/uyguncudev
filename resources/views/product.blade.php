<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $product ->baslik }} - Uyguncu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
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
<style>
    .rating-form {
    display: flex;
    flex-direction: column;

}

.rating-stars {
    display: flex;
    justify-content: flex-end; /* Sola yasla */
    margin: 10px 0;
}

.rating-stars label {
    font-size: 25px;
    color: #aaa;
    cursor: pointer;
}

.rating-stars input[type="radio"] {
    display: none;
}

.rating-stars label:before {
    content: "\2605";
}

.rating-stars input[type="radio"]:checked ~ label:before {
    color: #ff9800;
}

/* Tersten Puan Verme */
.rating-stars {
    flex-direction: row-reverse;
}
</style>

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
                                            <img src="{{ asset("resimler/$product->resim") }}" alt="Product Images">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="small-thumb-wrapper product-small-thumb-4 slick-layout-wrapper--10 axil-slick-arrow arrow-both-side">
                                        <div class="small-thumb-img">
                                            <img src="{{ asset("resimler/$product->resim") }}" alt="samll-thumb">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">
                           <div class="single-product-content">
                                <form method="GET" action="{{ route("addtocart",$product ->id) }}">
                                    <div class="inner">
                                    <h2 class="product-title">{{ $product ->baslik }}</h2>
                                    @if(session('basarı'))
                                        <div class="alert alert-success">
                                            {{ session('basarı') }}
                                        </div>
                                        @elseif(session('hata'))
                                        <div class="alert alert-danger">
                                            {{ session('hata') }}
                                        </div>

                                    @endif
                                    @if ($product->fiyat == null)
                                    <span class="price-amount">Fiyat Yok</span>
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
                                        <div class="review-number">{{ $comments->count() }}</div>
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
                                        </div>
                                        <!-- End Product Variation  -->
                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li  class="color-extra-02"><span><span  class="color"> </span> </span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-04"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                        <!-- End Product Variation  -->
                                        @if (  $product->fiyat == null)

                                        @else
                                        <div class="product-variation quantity-variant-wrapper">
                                            <h6 class="title">Adet</h6>
                                            <form method="get" action="{{ route("addtocart",$product ->id) }}">
                                                <div class="pro-qty"><input type="text" name="qty" value="1"></div>

                                                <div class="product-action-wrapper mt-5">


                                                    <!-- Start Product Action  -->
                                                    <ul class="product-action d-flex-center mb--0">
                                                       <input style="background-color: rgb(185, 135, 88); width:250px; color:white; border:none; font-size:16px; height:51px; text-align: center; " type="submit" name="hızlı"  value="Hızlı Satın Al">
                                                        <input style="background-color: rgb(0, 132, 255); width:250px; color:white; border:none; font-size:16px; height:51px; text-align: center; " type="submit" name="fast"  value="Sepete Ekle">

                                                    </ul>
                                                    <!-- End Product Action  -->

                                                </div>
                                            </form>

                                        </div>
                                        @endif


                                    </div>

                                    <!-- Start Product Action Wrapper  -->

                                    <!-- End Product Action Wrapper  -->
                                </div>



                                </form>

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
                                                <h5 class="title">Yorumlar</h5>
                                                <ul class="comment-list">
                                                    <!-- Start Single Comment  -->

                                                    <!-- End Single Comment  -->

                                                    <!-- Start Single Comment  -->
                                                    <li class="comment">


                                                        @if ($comments->count() > 1)
                                                        @foreach ($comments as $com)
                                                        <div class="comment-body">

                                                            <div class="single-comment">
                                                                @if ($com->resim == null)
                                                                <div class="comment-img">
                                                                    <img style="width: 90px;" src="/uploads/user.png" alt="Author Images">
                                                                </div>
                                                                @else
                                                                <div class="comment-img">
                                                                    <img style="width: 90px;" src="/uploads/{{$com->resim}}" alt="Author Images">
                                                                </div>
                                                                @endif

                                                                <div class="comment-inner">
                                                                    <h6 class="commenter">
                                                                        <a class="hover-flip-item-wrapper" href="#">
                                                                            <span class="hover-flip-item">
                                                                                <span data-text="{{ $com->ad }} {{ $com->soyad }}">{{ $com->ad }}-{{ $com->soyad }}
                                                                                    </span>
                                                                            </span>
                                                                        </a>
                                                                        @if ($com->puan == 1)
                                                                        <span
                                                                        class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>

                                                                        </span>

                                                                        @elseif($com->puan == 2)
                                                                        <span
                                                                        class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>

                                                                        </span>
                                                                        @elseif($com->puan == 3)
                                                                        <span
                                                                        class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>

                                                                        </span>
                                                                        @elseif($com->puan == 4)
                                                                        <span
                                                                        class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>

                                                                        </span>
                                                                        @elseif($com->puan == 5)
                                                                        <span
                                                                        class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>

                                                                        </span>

                                                                        @else

                                                                        @endif

                                                                    </h6>
                                                                    <div class="comment-text">
                                                                        <p>{{ $com->yorum }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <p>Henüz Yorum Yapılmamış</p>

                                                        @endif







                                                    </li>
                                                    <!-- End Single Comment  -->
                                                {{-- <span
                                                    class="commenter-rating ratiing-four-star">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                </span> --}}
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


                                                    <form  action="{{ route("commentadd",$product->id) }}" method="POST"  class="comment-form m-0">

                                                    @csrf
                                                    <p>Ürüne kaç yıldız vermek istersiniz?</p>
                                                    <div class="rating-stars">
                                                        <input type="radio" name="puan" id="star5" value="5">
                                                        <label for="star5"></label>
                                                        <input type="radio" name="puan" id="star4" value="4">
                                                        <label for="star4"></label>
                                                        <input type="radio" name="puan" id="star3" value="3">
                                                        <label for="star3"></label>
                                                        <input type="radio" name="puan" id="star2" value="2">
                                                        <label for="star2"></label>
                                                        <input type="radio" name="puan" id="star1" value="1">
                                                        <label for="star1"></label>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label>Yorumunuz <span class="required">*</span></label>
                                                        <textarea name="yorum" cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                                    </div><!-- End .form-group -->


                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-12">
                                                            <div class="form-group">
                                                                <label>Ad <span class="required">*</span></label>
                                                                <input name="ad" type="text" class="form-control form-control-sm" required>
                                                            </div><!-- End .form-group -->
                                                        </div>
                                                        <div class="col-md-6 col-xl-12">
                                                            <div class="form-group">
                                                                <label>Soyad <span class="required">*</span></label>
                                                                <input name="soyad" type="text" class="form-control form-control-sm" required>
                                                            </div><!-- End .form-group -->
                                                        </div>

                                                        <div class="col-md-6 col-xl-12">
                                                            <div class="form-group">
                                                                <label>Email <span class="required">*</span></label>
                                                                <input name="email" type="text" class="form-control form-control-sm" required>
                                                            </div><!-- End .form-group -->
                                                        </div>

                                                        <input type="submit" class="btn btn-primary" value="Gönder">

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
                        {{-- <div class="row">
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
                        </div> --}}
                    </div>

                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- Start Expolre Product Area  -->
        <div class="axil-new-arrivals-product-area fullwidth-container flash-sale-area section-gap-80-35">
            <div class="container ml--xxl-0">
                <div class="section-title-border slider-section-title">
                    <h2 class="title">Önerilen Ürünler 💥</h2>
                </div>
                <div class="recently-viwed-activation slick-layout-wrapper--15 axil-slick-angle angle-top-slide">
                    @foreach ($random as $rnd )
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-eight">
                            <div class="thumbnail">
                                <a href="{{ route("productid",$rnd->id) }}">
                                    <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy" class="main-img" src="{{ asset("resimler/$rnd->resim") }}" alt="Product Images">
                                </a>
                                <div class="label-block label-left">
                                    <div class="product-badget sale">Satılık</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="select-option">
                                            <a href="{{ route("addtocartnormal",$rnd ->id) }}">
                                                <i class="far fa-shopping-cart"></i> Sepete Ekle
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ route("productid",$rnd->id) }}">{{ $rnd->baslik }}</a></h5>
                                    <div class="product-rating">
                                        {{-- <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span> --}}
                                        {{-- <span class="rating-number">6,400</span> --}}
                                    </div>
                                    <div class="product-price-variant">

                                        <span class="price current-price">{{ $rnd->fiyat }} TL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach







                </div>
            </div>
        </div>
        <!-- End Expolre Product Area  -->



    <!-- Start Footer Area  -->




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
