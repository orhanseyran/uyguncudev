<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Sign In</title>
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
<style>
    .axil-signin-banner{
        background-image: url("resimler/gırıs.png");
        background-size: cover;
    }
</style>

<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    {{-- <a  href="/" class="site-logo"><img style="height: 90px;" src="{{ asset("resimler/logo.png") }}" alt="logo"></a> --}}
                </div>
                <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Üye Değilmisiniz?</p>
                        <a href="{{ route("registerget") }}" class="axil-btn btn-bg-secondary sign-up-btn">Üye Ol</a>
                        <a href="/" class="axil-btn btn-bg-primary sign-up-btn ">Ana Sayfa Dön</a>

                    </div>

                </div>
            </div>
        </div>
        <!-- End Header -->


        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner">
                    {{-- <h3 class="title">En İyi Ürünleri Sunuyoruz</h3> --}}
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">

                    <div class="axil-signin-form">
                    @if(session('giris'))
                    <div class="alert alert-success">
                        {{ session('giris') }}
                    </div>
                    @elseif(session('Hata'))
                    <div class="alert alert-danger">
                        {{ session('Hata') }}
                    </div>

                   @endif
                        <h3 class="title">Giriş Yap.</h3>
                        <p class="b2 mb--55">Giriş Bilgilerinizi Giriniz</p>
                        <form method="POST" action="{{ route("login") }}" class="singin-form">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" >
                            </div>
                            <div class="form-group">
                                <label>Şifre</label>
                                <input type="password" class="form-control" name="password" >
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Giriş Yap</button>
                                <a href="forgot-password.html" class="forgot-btn">Şifremi Unuttum?</a>
                            </div>
                        </form>
                    </div>
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

</body>

</html>
