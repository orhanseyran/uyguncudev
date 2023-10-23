<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <!-- Bootstrap CSS -->
</head>
<body>

 <div class="container">
    <div class="row">
        <div class="col-12">
           <a href="{{ route("homeadmin") }}"><button style="font-size:18px;" type="button" class="btn btn-primary">Admin Panele Geri Dön</button></a>
        </div>

    </div>
 </div>

    <form action="{{ route("subscribe") }}" method="POST">
    @csrf
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="container">
            <div class="etrade-newsletter-wrapper">

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

<!-- End Axil Newsletter Area  -->

</main>




<footer
class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->

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

            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
</form>
<!-- End Footer Area  -->

<!-- Product Quick View Modal Start -->

<!-- Product Quick View Modal End -->

<!-- Header Search Modal End -->

<!-- Header Search Modal End -->






<!-- Offer Modal Start -->



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

</body>
</html>
