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

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Your Cart</h4>
                        <a href="#" class="cart-clear">Clear Shoping Cart</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    @if(session('basarı'))
                            <div class="alert alert-success">
                                {{ session('basarı') }}
                            </div>
                            @endif
                                    <th scope="col" class="product-remove"></th>
                                    <th scope="col" class="product-thumbnail">Ürün</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Fiyat</th>
                                    <th scope="col" class="product-quantity">Ader</th>
                                    <th scope="col" class="product-subtotal">Toplam Tutar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($yeni as $get )
                                <tr>
                                    <td class="product-remove"><a href="{{ route("removecart",$get->__raw_id) }}" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="{{ route("removecart",$get->__raw_id) }}"><img src="resimler/{{  $get->image }}" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="{{ route("removecart",$get->__raw_id) }}">{{  $get->name }}</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">TL</span>{{ $get->price }}</td>
                                    <td class="product-quantity" data-title="Qty">

                                        <div class="input-group">
                                            <a href="{{ route("updatecart",[$get->__raw_id,'azalt']) }}"><button class="btn btn-outline-secondary" type="button" id="decreaseQuantity">-</button></a>
                                            <input  value="{{ $get->qty }}" type="text" id="" min="1">
                                            <a style="align-items: left" href="{{ route("updatecart",[$get->__raw_id,'increase']) }}"><button class="btn btn-outline-secondary" type="button" id="increaseQuantity">+</button></a>
                                        </div>



                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">TL</span>{{ $get->total }}</td>
                                </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>
                    <div class="cart-update-btn-area">
                        <form action="{{ route("cupon") }}" method="get">
                            <div class="input-group product-cupon">
                                <input placeholder="Enter coupon code" name="coupon_code" type="text">
                                <div class="product-cupon-btn">
                                    <button type="submit" class="axil-btn btn-outline">Apply</button>
                                </div>
                            </div>
                        </form>

                        <div class="update-btn">
                            <a href="#" class="axil-btn btn-outline">Update Cart</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Order Summary</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Subtotal</td>
                                                <td>$117.00</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td>Shipping</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Free Shippping</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local: $35.00</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Flat rate: $12.00</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>State Tax</td>
                                                <td>$8.00</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">$125.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @if ( ShoppingCart::totalPrice() == null )
                                <a href="#" class="axil-btn btn-bg-primary checkout-btn">Sepetiniz Boş</a>
                                @else
                                <a href="{{ route("checkout") }}" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>



    <!-- Start Footer Area  -->
    @include('footer');

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/counterup.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
