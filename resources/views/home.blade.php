
@include('seo')

<body class="sticky-header newsletter-popup-modal">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>


@include('header')


    <main class="main-wrapper">
        <div class="axil-main-slider-area main-slider-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="main-slider-content">

                            <div class="slider-content-activation-one">

                                @foreach ($slider as $s )
                                <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                                    <span class="subtitle"><i class="fas fa-fire"></i> {{ $s->baslik }}</span>
                                    <h1 class="title">{{ $s->icerik }}</h1>
                                    <div class="slide-action">
                                        <div class="shop-btn">
                                            <a href="{{ $s->butonlink }}" class="axil-btn btn-bg-white"><i class="fal fa-shopping-cart"></i>Satın Al</a>
                                        </div>
                                        <div class="item-rating">
                                            <div class="thumb">
                                                <ul>
                                                    <li><img src="assets/images/others/author1.png" alt="Author"></li>
                                                    <li><img src="assets/images/others/author2.png" alt="Author"></li>
                                                    <li><img src="assets/images/others/author3.png" alt="Author"></li>
                                                    <li><img src="assets/images/others/author4.png" alt="Author"></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <span class="rating-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </span>
                                                <span class="review-text">
                                            <span>100+</span> Reviews
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="main-slider-large-thumb">

                            <div class="slider-thumb-activation-one axil-slick-dots">
                                @foreach ( $slider as $s )
                                <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600" data-sal-duration="1500">
                                    <img src="resimler/{{ $s->picture }}" alt="Product">
                                    <div class="product-price">
                                        <span class="text">From</span>
                                        <span class="price-amount">$49.00</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1"><img src="assets/images/others/shape-1.png" alt="Shape"></li>
                <li class="shape-2"><img src="assets/images/others/shape-2.png" alt="Shape"></li>
            </ul>
        </div>

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
                    <h2 class="title">Browse by Category</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-4.png" alt="product categorie">
                                <h6 class="cat-title">Phones</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="300" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-5.png" alt="product categorie">
                                <h6 class="cat-title">Computers</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="400" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-11.png" alt="product categorie">
                                <h6 class="cat-title">Accessories</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-6.png" alt="product categorie">
                                <h6 class="cat-title">Laptops</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="600" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-2.png" alt="product categorie">
                                <h6 class="cat-title">Monitors</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-7.png" alt="product categorie">
                                <h6 class="cat-title">Networking</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="800" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-8.png" alt="product categorie">
                                <h6 class="cat-title">PC Gaming</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-1.png" alt="product categorie">
                                <h6 class="cat-title">Smartwatches</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-9.png" alt="product categorie">
                                <h6 class="cat-title">Headphones</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-10.png" alt="product categorie">
                                <h6 class="cat-title">Camera & Photo</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-8.png" alt="product categorie">
                                <h6 class="cat-title">Video Games</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/elec-1.png" alt="product categorie">
                                <h6 class="cat-title">Sports</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <!-- Poster Countdown Area  -->
        <div class="axil-poster-countdown">
            <div class="container">
                <div class="poster-countdown-wrap bg-lighter">
                    @foreach ($rndone as $rnd)
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="poster-countdown-content">
                                <div class="section-title-wrapper">
                                    <span class="title-highlighter highlighter-secondary"> <i class="fal fa-headphones-alt"></i> Don’t Miss!!</span>
                                    <h2 class="title">{{ $rnd->baslik }}</h2>
                                </div>
                                <div class="poster-countdown countdown mb--40"></div>
                                <a href="{{ route("productid",$rnd->id) }}" class="axil-btn btn-bg-primary">Şimdi Göz At</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="poster-countdown-thumbnail">
                                @if ($rnd->resim == null)
                                <img src="resimler/resimYok.png" alt="Poster Product">
                                @else
                                <img src="resimler/{{ $rnd->resim }}" alt="Poster Product">
                                @endif

                                <div class="music-singnal">
                                    <div class="item-circle circle-1"></div>
                                    <div class="item-circle circle-2"></div>
                                    <div class="item-circle circle-3"></div>
                                    <div class="item-circle circle-4"></div>
                                    <div class="item-circle circle-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        {{-- merhaba --}}
        <!-- End Poster Countdown Area  -->

        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
                    <h2 class="title">Explore our Products</h2>
                </div>
                <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">


                            @foreach ($product as $urun )
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{ route("productid",$urun->id) }}">
                                            @if (!$urun->resim)
                                            <img src="resimler/resimYok.png" alt="Product Images">
                                            @else
                                            <img src="{{ asset('resimler/orta' . $urun->resim) }}" alt="Product Images">
                                            @endif

                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option"><a href="{{ route("productid",$urun->id) }}">Ürünü İncele</a></li>
                                                <li class="wishlist"><a href=""onclick="submitForm('{{ $urun->id }}'); return false;"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="{{ route("productid",$urun->id) }}">{{ $urun->baslik }}</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">{{ $urun->fiyat }} TL</span>
                                                <span class="price old-price"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="row row--15">

                            <!-- End Single Product  -->
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/electric/product-03.png" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                                <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product  -->

                            <!-- End Single Product  -->

                            <!-- End Single Product  -->

                            <!-- End Single Product  -->

                            <!-- End Single Product  -->

                            <!-- End Single Product  -->

                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="{{ route("shop") }}" class="axil-btn btn-bg-lighter btn-load-more">Tüm Ürünleri Göster</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->

        <!-- Start Testimonila Area  -->
        <div class="axil-testimoial-area axil-section-gap bg-vista-white">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="fal fa-quote-left"></i>Sizi Önemsiyoruz</span>
                    <h2 class="title">Sizden Gelen Yorumlar</h2>
                </div>

                <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                    @foreach ($comments as $comment )
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ {{ $comment->yorum }} “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-1.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">{{ $comment->urun }}</span>
                                <h6 class="title">{{ $comment->ad }} {{ $comment->soyad }}</h6>
                            </div>
                        </div>

                    </div>
                    @endforeach
                <!-- End .section-title -->

                    <!-- End .slick-single-layout -->

                    <!-- End .slick-single-layout -->

                </div>

            </div>
        </div>
        <!-- End Testimonila Area  -->

        <!-- Start New Arrivals Product Area  -->
        <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>This Week’s</span>
                        <h2 class="title">New Arrivals</h2>
                    </div>
                    <div class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">

                        @foreach ($product as $urun )
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-two">
                                <div class="thumbnail">
                                    <a href="{{ route("productid",$urun->id) }}">
                                        @if ($urun->resim == null)
                                        <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500" src="resimler/resimYok.png" alt="Product Images">
                                        @else
                                        <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500" src="resimler/{{ $urun->resim }}" alt="Product Images">
                                        @endif

                                    </a>
                                    <div class="label-block label-right">
                                        {{-- <div class="product-badget">30% OFF</div> --}}
                                    </div>

                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="{{ route("productid",$urun->id) }}">{{ $urun->baslik }}</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$20</span>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option"><a href="{{ route("addtocart",$urun->id) }}">Sepete Ekle</a></li>

                                                <li class="wishlist">
                                                    <!-- Form -->
                                                    <form method="post" action="{{ route("wishlistadd", $urun->id) }}" id="wishlistForm_{{ $urun->id }}">
                                                        @csrf
                                                        <input type="submit" id="wishlistSubmit_{{ $urun->id }}" name="wish" style="display: none;">
                                                    </form>

                                                    <!-- <a> etiketini kullanarak formu programatik olarak gönder -->
                                                    <a href="#" onclick="submitForm('{{ $urun->id }}'); return false;">
                                                        <i class="far fa-heart"></i>
                                                    </a>

                                                    <!-- JavaScript Kodu -->

                                                </li>



                                                    <!-- <a> etiketini kullanarak formu programatik olarak gönder -->


                                                    <!-- JavaScript Kodu -->

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- End .slick-single-layout -->

                        <!-- End .slick-single-layout -->

                        <!-- End .slick-single-layout -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals Product Area  -->

        <!-- Start Most Sold Product Area  -->
        <div class="axil-most-sold-product axil-section-gap">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper section-title-center">
                        {{-- <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Most Sold</span> --}}
                        <h2 class="title">En Çok Satılan Ürünler</h2>
                    </div>
                    <div class="row row-cols-xl-2 row-cols-1 row--15">
                        @foreach ($productscount as $product )
                        <div class="col">
                            <div class="axil-product-list">
                                <div class="thumbnail">
                                    <a href="{{ route("productid",$product->id) }}">
                                        <img data-sal="zoom-in" data-sal-delay="100" data-sal-duration="1500" src="resimler/{{ $product->resim }}" alt="Yantiti Leather Bags">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>

                                    </div>
                                    <h6 class="product-title"><a href="{{ route("productid",$product->id) }}">{{ $product->baslik }}</a></h6>
                                    <div class="product-price-variant">
                                        @if ($product->fiyat == null)
                                        <span class="price current-price">Fiyat Yok</span>
                                        <span class="price old-price">$49.99</span>
                                        @else
                                        <span class="price current-price">{{ $product->fiyat }}</span>
                                        <span class="price old-price">$49.99</span>
                                        @endif

                                    </div>
                                    <div class="product-cart">
                                        <a href="{{ route("addtocart",$product->id) }}"   class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="#" onclick="submitForm('{{ $urun->id }}'); return false;"  class="cart-btn"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Sold Product Area  -->

        <!-- Start Why Choose Area  -->
        <div class="axil-why-choose-area pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i>Why Us</span>
                    <h2 class="title">Why People Choose Us</h2>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./assets/images/icons/service6.png" alt="Service">
                            </div>
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./assets/images/icons/service7.png" alt="Service">
                            </div>
                            <h6 class="title">100% Guarantee On Product</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./assets/images/icons/service8.png" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./assets/images/icons/service9.png" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./assets/images/icons/service10.png" alt="Service">
                            </div>
                            <h6 class="title">Next Level Pro Quality</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Area  -->


        <!-- Start Axil Product Poster Area  -->
        <div class="axil-poster">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop.html">
                                <img src="./assets/images/product/poster/poster-01.png" alt="eTrade promotion poster">
                                <div class="poster-content">
                                    <div class="inner">
                                        <h3 class="title">Rich sound, <br> for less.</h3>
                                        <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop-sidebar.html">
                                <img src="./assets/images/product/poster/poster-02.png" alt="eTrade promotion poster">
                                <div class="poster-content content-left">
                                    <div class="inner">
                                        <span class="sub-title">50% Offer In Winter</span>
                                        <h3 class="title">Get VR <br> Reality Glass</h3>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Axil Product Poster Area  -->

        <!-- Start Axil Newsletter Area  -->

    <!-- Start Footer Area  -->
@include('footer');
    <div class="closeMask"></div>
    <!-- Offer Modal End -->
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
    <script>
        function submitForm(productId) {
            // Formu gönder
            document.getElementById('wishlistSubmit_' + productId).click();
        }
    </script>

</body>

</html>
