<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || My Account</title>
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
    @include('header');


    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="/">Ana Sayfa</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Hesabım</li>
                            </ul>
                            <h1 class="title">Merhaba  {{ auth()->user()->name }} </h1>
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

        <!-- Start My Account Area  -->
        <div class="axil-dashboard-area axil-section-gap">
            <div class="container">
                <div class="axil-dashboard-warp">
                    <div class="axil-dashboard-author">
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/product/author1.png" alt="{{ auth()->user()->name }}">
                            </div>
                            <div class="media-body">
                                <h5 class="title mb-0">{{ auth()->user()->name }}</h5>
                                <span class="joining-date">Üyelik Tarihi {{ auth()->user()->created_at}}</span>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @elseif(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>

                               @endif
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <aside class="axil-dashboard-aside">
                                <nav class="axil-dashboard-nav">
                                    <div class="nav nav-tabs" role="tablist">
                                        <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Ana Sayfa</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Siparişler</a>
                                        {{-- <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-downloads" role="tab" aria-selected="false"><i class="fas fa-file-download"></i>Downloads</a> --}}
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false"><i class="fas fa-home"></i>Adres Bilgilerim</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Hesap Detaylarım</a>
                                        <a class="nav-item nav-link" href="{{ route("logoutalici") }}"><i class="fal fa-sign-out"></i>Çıkış Yap</a>
                                    </div>
                                </nav>
                            </aside>
                        </div>
                        <div class="col-xl-9 col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                    <div class="axil-dashboard-overview">
                                        <div class="welcome-text">Merhaba {{ auth()->user()->name }} (<span>{{ auth()->user()->name }}?</span> değilmisin  <a href="{{ route("logoutalici") }}">Çıkış Yap</a>)</div>
                                        <p>Hesap kontrol panelinizden son siparişlerinizi görüntüleyebilir, teslimat ve fatura adreslerinizi yönetebilir, şifrenizi ve hesap ayrıntılarınızı düzenleyebilirsiniz.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                    <div class="axil-dashboard-order">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Sipariş</th>
                                                        <th scope="col">Tarih</th>
                                                        <th scope="col">Durum</th>
                                                        <th scope="col">Toplam Tutar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order )
                                                    <tr>
                                                        <th scope="row">#{{ $order->id }}</th>
                                                        <td>{{ $order->created_at }}</td>
                                                        <td>Processing</td>
                                                        <td>{{ $order->per_price}}TL için {{ $order->qty}} ürün</td>

                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-downloads" role="tabpanel">
                                    <div class="axil-dashboard-order">
                                        <p>You don't have any download</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                    <div class="axil-dashboard-address">
                                        <p class="notice-text">The following addresses will be used on the checkout page by default.</p>
                                        <div class="row row--30">
                                            <div class="col-lg-6">
                                                <div class="address-info mb--40">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title mb-0">Shipping Address</h4>
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#adres" class="address-edit" ><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Name: Annie Mario</li>
                                                        <li>Email: annie@example.com</li>
                                                        <li>Phone: 1234 567890</li>
                                                        <li class="mt--30">7398 Smoke Ranch Road <br>
                                                        Las Vegas, Nevada 89128</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="address-info">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title mb-0">Billing Address</h4>

                                                          <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button style="padding: 30px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <form style="padding: 10px">
                                                                            <h4 style="text-align: center">Fatura Adresi</h4>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1" class="form-label">Ad - Soyad</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1" class="form-label">Telefon</label>
                                                                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                                            </div>
                                                                            <div class="mb-3">
                                                                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                              <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                              <input type="password" class="form-control" id="exampleInputPassword1">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleFormControlTextarea1" class="form-label">Adres Bilgileri</label>
                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                                              </div>
                                                                            <div class="mb-3 form-check">
                                                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                                            </div>
                                                                            <button style="justify-content: center; height: 40px; font-size:18px;" type="submit" class="btn btn-primary col-12">Submit</button>
                                                                          </form>

                                                                    </div>


                                                                </div>



                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="adres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button style="padding: 30px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <form style="padding: 10px">
                                                                            <h4 style="text-align: center">Teslimat Adresi</h4>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1" class="form-label">Ad - Soyad</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1" class="form-label">Telefon</label>
                                                                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                                            </div>
                                                                            <div class="mb-3">
                                                                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                              <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                              <input type="password" class="form-control" id="exampleInputPassword1">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleFormControlTextarea1" class="form-label">Adres Bilgileri</label>
                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                                              </div>
                                                                            <div class="mb-3 form-check">
                                                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                                            </div>
                                                                            <button style="justify-content: center; height: 40px; font-size:18px;" type="submit" class="btn btn-primary col-12">Submit</button>
                                                                          </form>

                                                                    </div>


                                                                </div>



                                                            </div>
                                                            </div>
                                                        </div>

                                                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="address-edit"><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Name: Annie Mario</li>
                                                        <li>Email: annie@example.com</li>
                                                        <li>Phone: 1234 567890</li>
                                                        <li class="mt--30">7398 Smoke Ranch Road <br>
                                                        Las Vegas, Nevada 89128</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                    <div class="col-lg-9">
                                        <div class="axil-dashboard-account">
                                            <form method="POST" action="{{ route("updateDetails") }}" class="account-details-form">
                                                @csrf
                                                @foreach ($user as $u )

                                                <div class="row">
                                                    <h4 class="col-12">Hesap Bilgilerimi Güncelle</h4>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Ad Soyad</label>
                                                            <input type="text" name="name" class="form-control" value="{{ $u->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" name="email" class="form-control" value="{{ $u->email }}">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-12">
                                                        <div class="form-group mb--40">
                                                            <label>Country/ Region</label>
                                                            <select class="select2">
                                                                <option value="1">United Kindom (UK)</option>
                                                                <option value="1">United States (USA)</option>
                                                                <option value="1">United Arab Emirates (UAE)</option>
                                                                <option value="1">Australia</option>
                                                            </select>
                                                            <p class="b3 mt--10">This will be how your name will be displayed in the account section and in reviews</p>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-12">
                                                        <h5 class="title">Şifre Değiştir</h5>
                                                        <div class="form-group">
                                                            <label>Eski Şifre</label>
                                                            <input type="password" class="form-control" name="current_password" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Yeni Şifre</label>
                                                            <input type="password" class="form-control" name="new_password" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Yeni Şifreyi Tekrar Yaz</label>
                                                            <input type="password" class="form-control" name="confirm_password" required>
                                                        </div>

                                                        <div class="form-group mb--0">
                                                            <button type="submit" class="axil-btn">Kaydet</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End My Account Area  -->

        <!-- Start Axil Newsletter Area  -->
        <form action="{{ route("subscribe") }}" method="POST">
            @csrf
            <div class="axil-newsletter-area axil-section-gap pt--0">
                <div class="container">
                    <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                        <div class="newsletter-content">
                            <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Abone Ol</span>
                            <h2 class="title mb--40 mb_sm--30">Güncellemeleri Takip Etmek İçin</h2>
                            <div class="input-group newsletter-form">
                                <div class="position-relative newsletter-inner mb--15">
                                    <input placeholder="" name="email" type="text">
                                </div>
                                <button type="submit" class="axil-btn mb--15">Abone Ol</button>
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
