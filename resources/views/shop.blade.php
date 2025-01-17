@include('seo')

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    @include('header');

    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <h1 class="title">Ürünler</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            {{-- <div class="bradcrumb-thumb">
                                <img src="assets/images/product/product-45.png" alt="Image">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-shop-top">
                            <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="category-select">


                                            <select name="kategori" class="single-select">
                                                <option value="" {{ request('kategori') === '' ? 'selected' : '' }}>Kategoriler</option>
                                                @foreach ( $getir as $g )
                                                <option value="{{ $g->katagoriname }}" {{ request('kategori') === $g->katagoriname ? 'selected' : '' }}>{{ $g->katagoriname }}</option>
                                                @endforeach

                                            </select>
                                            <!-- End Single Select  -->

                                            <!-- Start Single Select  -->
                                            {{-- <select name="color"  class="single-select">
                                                <option value="" {{ request('color') === '' ? 'selected' : '' }}>Renk</option>
                                                <option value="Red" {{ request('color') === 'Red' ? 'selected' : '' }}>Red</option>
                                                <option value="Blue" {{ request('color') === 'Blue' ? 'selected' : '' }}>Blue</option>
                                                <option value="Green" {{ request('color') === 'Green' ? 'selected' : '' }}>Green</option>
                                                <option value="Pink" {{ request('color') === 'Pink' ? 'selected' : '' }}>Pink</option>
                                            </select> --}}
                                            <!-- End Single Select  -->

                                            <!-- Start Single Select  -->
                                            {{-- <select name="fiyat" class="single-select">
                                                <option value="" {{ request("fiyat") === "" ? "selected":"" }}>Fiyat-Aralığı</option>
                                                <option value="0 - 100" {{ request("fiyat") === "0 - 100" ? "selected":"" }}>0 - 100</option>
                                                <option value="100 - 500" {{ request("fiyat") === "100 - 500" ? "selected":"" }}>100 - 500</option>
                                                <option value="500 - 1000" {{ request("fiyat") === "500 - 1000" ? "selected":"" }}>500 - 1000</option>
                                                <option value="1000 - 1500" {{ request("fiyat") === "1000 - 1500" ? "selected":"" }}>1000 - 1500</option>
                                            </select>
                                            <select name="sort" class="single-select">
                                                <option value="latest" {{ request('sort') === 'latest' ? 'selected' : '' }}>En Son Yayınlanan</option>
                                                <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>İsme Göre Sırala</option>
                                                <option value="price" {{ request('sort') === 'price' ? 'selected' : '' }}>En Düşük Fiyata Göre Sirala</option>
                                                <option value="viewed" {{ request('sort') === 'viewed' ? 'selected' : '' }}>Popüler Ürünler</option>
                                            </select> --}}



                                        <!-- Start Single Select  -->

                                        <!-- End Single Select  -->

                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-3">
                                    <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        <input style="margin-right: 20px" type="submit" value="Filtrele">

                                        <input style="background-color: red; color:white;" type="submit" name="Temizle" value="Temizle">
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row--15">

                 @if($search->count() == 1)
                 @foreach ($search as $pr )
                 <div class="col-xl-3 col-lg-4 col-sm-6">
                     <div class="axil-product product-style-one has-color-pick mt--40">
                         <div class="thumbnail">
                             <a href="single-product.html">
                                 @if ($pr->resim == null)
                                 <img src="resimler/resimYok.png" alt="Product Images">
                                 @else
                                 <img src="resimler/{{ $pr->resim }}" alt="Product Images">
                                 @endif

                             </a>
                             <div class="product-hover-action">
                                 <ul class="cart-action">
                                     <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                     <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                     <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="product-content">
                             <div class="inner">
                                 <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a></h5>
                                 <div class="product-price-variant">
                                     <span class="price current-price">$25</span>
                                     <span class="price old-price">$40</span>
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
             @endforeach

                @elseif($search->count() == null)

                 <p style="text-align: center; font-size:28px;">Ürün Bulunamadı</p>
                 @else
                 @foreach ($filteredProducts as $pr )
                 <div class="col-xl-3 col-lg-4 col-sm-6">
                     <div class="axil-product product-style-one has-color-pick mt--40">
                         <div class="thumbnail">
                             <a href="{{ route("productid",$pr->id) }}">
                                 @if ($pr->resim == null)
                                 <img src="resimler/resimYok.png" alt="Product Images">
                                 @else
                                 <img src="resimler/{{ $pr->resim }}" alt="Product Images">
                                 @endif

                             </a>
                             <div class="product-hover-action">
                                 <ul class="cart-action">
                                    <li class="wishlist">
                                        <!-- Form -->
                                        <form method="post" action="{{ route("wishlistadd", $pr->id) }}" id="wishlistForm_{{ $pr->id }}">
                                            @csrf
                                            <input type="submit" id="wishlistSubmit_{{ $pr->id }}" name="wish" style="display: none;">
                                        </form>

                                        <!-- <a> etiketini kullanarak formu programatik olarak gönder -->
                                        <a href="#" onclick="submitForm('{{ $pr->id }}'); return false;">
                                            <i class="far fa-heart"></i>
                                        </a>

                                        <!-- JavaScript Kodu -->

                                    </li>
                                     <li class="select-option"><a href="cart.html">Sepete Ekle</a></li>
                                     <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="product-content">
                             <div class="inner">
                                 <h5 class="title"><a href="{{ route("productid",$pr->id) }}">{{ $pr->baslik }}</a></h5>
                                 <div class="product-price-variant">
                                    @if ($pr->fiyat == null)
                                    <span class="price current-price">Fiyatı Belirlenmemiş Ürün</span>
                                    @else
                                    <span class="price current-price">{{ $pr->fiyat }} TL</span>
                                    @endif


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
             @endforeach
                 @endif



                    <!-- End Single Product  -->

                    <!-- End Single Product  -->

                    <!-- End Single Product  -->

                    <!-- End Single Product  -->
                </div>
                <div class="text-center pt--30">
                    <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Daha Fazla Göster</a>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->
        <!-- Start Axil Newsletter Area  -->

        <!-- End Axil Newsletter Area  -->
    </main>



    <!-- Start Footer Area  -->
@include('footer');
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
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

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
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title">24 Result Found</h6>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="./assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="./assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product.html"><img src="assets/images/product/electric/product-01.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-3.html">Wireless PS Handler</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-2.html"><img src="assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(4)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-2.html">Gradient Light Keyboard</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="5">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-3.html"><img src="assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(6)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product.html">HD CC Camera</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.html" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>

    </div>

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
