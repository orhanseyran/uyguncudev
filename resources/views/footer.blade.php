<style>
    .etrade-newsletter-wrapper {
        background-image: url('resimler/UYGUN.png');
        height: 500px;
        width: 100%;
        background-size: cover; /* Arka plan resminin boyutunu kaplamasını sağlar */
        background-position: center; /* Arka plan resminin ortalanmasını sağlar */
        background-repeat: no-repeat; /* Arka plan resminin tekrar etmemesini sağlar */
        padding: 20px; /* Gerekirse içeriğin arka plan resminin kenarlarına olan uzaklığını ayarlar */
    }

    /* Aşağıdaki stil kodları, içeriğin görünümünü düzenlemek için örnektir. */

</style>
<form action="{{ route("subscribe") }}" method="POST">
    @csrf
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="container">
            <div class="col-12">
                <div class="etrade-newsletter-wrapper">
                    <div class="newsletter-content">
                        <span   class="title-highlighter highlighter-primary2"><i style="text-align: center" class="fas fa-envelope-open"></i>Abone Ol</span>
                        {{-- <h2 class="title mb--40 mb_sm--30">Güncellemeleri Takip Etmek İçin</h2> --}}
                        <div class="input-group newsletter-form">
                            <div   class="position-relative newsletter-inner mb--10">
                                <input  placeholder="" name="email" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Abone Ol</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End .container -->
    </div>
</form>
<!-- End Axil Newsletter Area  -->

</main>


<div class="service-area">
<div class="container">
    <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
        {{-- <div class="col">
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
        </div> --}}
        {{-- <div class="col">
            <div class="service-box service-style-2">
                <div class="icon">
                    <img src="./assets/images/icons/service4.png" alt="Service">
                </div>
                <div class="content">
                    <h6 class="title">Pro Quality Support</h6>
                    <p>24/7 Live support.</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>
</div>

<footer
class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Support</h5>
                        <!-- <div class="logo mb--30">
                        <a href="index.html">
                            <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                        </a>
                    </div> -->
                        <div class="inner">
                            <p>685 Market Street, <br>
                            Las Vegas, LA 95820, <br>
                            United States.
                            </p>
                            <ul class="support-list-item">
                                <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i> example@domain.com</a></li>
                                <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01) 850-315-5862</a></li>
                                <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Account</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="sign-up.html">Login / Register</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="shop.html">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Quick Link</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-of-service.html">Terms Of Use</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Download App</h5>
                        <div class="inner">
                            <span>Save $3 With App & New User only</span>
                            <div class="download-btn-group">
                                <div class="qr-code">
                                    <img src="assets/images/others/qr.png" alt="Axilthemes">
                                </div>
                                <div class="app-link">
                                    <a href="#">
                                        <img src="assets/images/others/app-store.png" alt="App Store">
                                    </a>
                                    <a href="#">
                                        <img src="assets/images/others/play-store.png" alt="Play Store">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="social-share">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-center">
                        <ul class="quick-link">
                            <li>© 2023. All rights reserved by <a target="_blank" href="">185 Dijital</a>.</li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-lg-12">
                    <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                        <span class="card-text">Accept For</span>
                        <ul class="payment-icons-bottom quick-link">
                            <li><img src="assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                            <li><img src="assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                            <li><img src="assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->

<!-- Product Quick View Modal Start -->
<div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="single-product-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                        <div class="thumbnail">
                                            <img src="assets/images/product/product-big-01.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="assets/images/product/product-big-01.png" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="assets/images/product/product-big-02.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="assets/images/product/product-big-02.png" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="assets/images/product/product-big-03.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="assets/images/product/product-big-03.png" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="assets/images/icons/rate.png" alt="Rate Images">
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>1</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title"></h3>
                                    <span class="price-amount"></span>
                                    {{-- <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock</li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                    </ul> --}}
                                    <p class="description"></p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal End -->

<!-- Header Search Modal End -->
<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form method="GET" action="{{ route("shop") }}">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Ürün">
                    <input type="submit" value="Ara">
                </div>
            </form>
        </div>
        <img style="width: 97%" src="resimler/banner.png" alt="">
        {{-- <div class="card-body">
            <div class="search-result-header">
                <h6 class="title">24 Result Found</h6>
                <a href="shop.html" class="view-all">View All</a>
            </div>

        </div> --}}
    </div>
</div>
<!-- Header Search Modal End -->


    <div class="cart-dropdown" id="cart-dropdown">

        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Sepetim</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    @foreach ( $yeni as $get )
                    <form action="{{ route("addtocart",$get->id) }}" method="get">
                    <li class="cart-item">

                        <div class="item-img">
                            <a href="{{ route("removecart",$get->__raw_id) }}"><img src="resimler/resimYok.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                <i class="fas fa-star"></i>

                            </span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-3.html"></a>{{ $get->name }}</a></h3>
                            <div class="item-price"><span class="currency-symbol"></span>{{ $get->fiyat }}</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" name="qty" class="quantity-input" value="{{ $get->qty }}">
                            </div>
                        </div>

                    </li>
                    @endforeach
                    <div class="cart-footer">
                        <h3 class="cart-subtotal">
                            <span class="subtotal-title">Toplam Tutar</span>
                            <span class="subtotal-amount">{{ ShoppingCart::total()}}</span>
                        </h3>
                        @if (ShoppingCart::total() == null )
                        <div class="group-btn">

                            <input style="background-color: rgb(0, 132, 255); width:250px; color:white; border:none; font-size:16px; height:51px; text-align: center; " type="submit"  value="Sepetiniz Boş">

                        </div>

                        @else
                        <div class="group-btn">
                            <form method="GET" action="{{ route("checkout") }}">
                                <input style="background-color: rgb(185, 135, 88); width:250px; color:white; border:none; font-size:16px; height:51px; text-align: center; " type="submit"  value="Hızlı Satın Al">
                            </form>

                            <input style="background-color: rgb(0, 132, 255); width:250px; color:white; border:none; font-size:16px; height:51px; text-align: center; " type="submit" name="fast"  value="Sepete Ekle">
                        </div>

                        @endif

                    </div>
                </form>


                </ul>
            </div>
            {{-- <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.html" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div> --}}
        </div>
    </div>



<!-- Offer Modal Start -->
<div class="offer-popup-modal" id="offer-popup-modal">
    <div class="offer-popup-wrap">
        <div class="card-body">
            <button class="popup-close"><i class="fas fa-times"></i></button>
            <div class="content">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Don’t Miss!!</span>
                    <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                </div>
                <div class="poster-countdown countdown"></div>
                <a href="shop.html" class="axil-btn btn-bg-primary">Shop Now <i class="fal fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
