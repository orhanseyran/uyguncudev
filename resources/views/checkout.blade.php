<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Checkout</title>
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


<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    @include('header');

    <!-- End Header -->

    <main class="main-wrapper">

        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                <form method="POST" action="{{ route("store") }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="axil-checkout-notice">
                                @if (!auth()->check())
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> Üye Değilmisiniz <a href="javascript:void(0)" class="toggle-btn">Click here to login <i class="fas fa-angle-down"></i></a>
                                    </div>
                                    <div class="axil-checkout-login toggle-open">
                                        <p>If you didn't Logged in, Please Log in first.</p>
                                        <div class="signin-box">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="form-group mb--0">
                                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @elseif (auth()->user()->role == "Admin")
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> Merhaba {{ auth()->user()->name}} <a href="{{ route("homeadmin") }}" class="toggle-btn">Hesabıma Git <i class="fas fa-angle-down"></i></a>
                                    </div>

                                </div>
                                @else
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> Merhaba {{ auth()->user()->name}} <a href="{{ route("hesabım") }}" class="toggle-btn">Hesabıma Git <i class="fas fa-angle-down"></i></a>
                                    </div>

                                </div>

                                @endif

                                {{-- <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-pencil"></i> Have a coupon? <a href="javascript:void(0)" class="toggle-btn">Click here to enter your code <i class="fas fa-angle-down"></i></a>
                                    </div>

                                    <div class="axil-checkout-coupon toggle-open">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <div class="input-group">
                                            <input placeholder="Enter coupon code" type="text">
                                            <div class="apply-btn">
                                                <button type="submit" class="axil-btn btn-bg-primary">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="axil-checkout-billing">
                                <h4 class="title mb--40">Sipariş Detayı</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ad <span>*</span></label>
                                            <input type="text" id="first-name" name="name"required >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Soyad <span>*</span></label>
                                            <input type="text" id="last-name" name="surname"required >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adres <span>*</span></label>
                                    <input type="text" id="address1" name="adress" class="mb--15" placeholder="" required>

                                </div>
                                <div class="form-group">
                                    <label>Şehir <span>*</span></label>
                                    <input type="text" name="city" id="town" required>
                                </div>

                                <div class="form-group">
                                    <label>Telefon <span>*</span></label>
                                    <input type="text" name="phone" id="phone" required>
                                </div>
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="email" id="email" required>
                                </div>


                                <div class="form-group">
                                    <label>Sipariş Notu (Opsiyonel)</label>
                                    <textarea id="notes" name="ordernote" rows="2" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="axil-order-summery order-checkout-summery">
                                <h5 class="title mb--20">Siparişim</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table">
                                        <thead>
                                            <tr>
                                                <th>Ürün</th>
                                                <th>Toplam Tutar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($yeni as $get )
                                            <tr class="order-product">
                                                <td>{{  $get->name }} <span class="quantity">x{{ $get->qty }}</span></td>
                                                <td>{{ $get->price }}TL</td>
                                            </tr>
                                            @endforeach

                                            <tr class="order-shipping">
                                                <td colspan="2">
                                                    <div class="shipping-amount">
                                                        <span class="title">Kargo</span>
                                                        <span class="amount">Ücretsiz</span>
                                                    </div>
                                                    {{-- <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Ücretsiz Gönderim</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Flat rate</label>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Toplam</td>
                                                <td class="order-total-amount">{{ ShoppingCart::totalPrice() }} TL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-payment-method">
                                    {{-- <div class="single-payment">
                                        <div class="input-group">
                                            <input type="radio" id="radio4" name="payment">
                                            <label for="radio4">Direct bank transfer</label>
                                        </div>
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>> --}}
                                    <div class="single-payment">
                                        @if(session('giris'))
                                           <div class="alert alert-success">
                                                {{ session('giris') }}
                                            </div>
                                            @elseif(session('Hata'))
                                            <div class="alert alert-danger">
                                                {{ session('Hata') }}
                                            </div>

                                        @endif
                                        <div class="input-group justify-content-between align-items-center">
                                            <input type="radio" id="radio6" name="shopier">
                                            <label for="radio6">Shopier Ödeme</label>
                                            <img src="./assets/images/others/payment.png" alt="Paypal payment">
                                        </div>
                                        <p>Shopier İle Güvenli Ödeme</p>
                                    </div>
                                </div>
                                @if ( ShoppingCart::totalPrice() == null)
                                <a href="#" class="axil-btn btn-bg-primary checkout-btn">Sepetiniz Boş</a>
                                @else
                                <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Ödeme Yap</button>
                                @endif

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Checkout Area  -->

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
