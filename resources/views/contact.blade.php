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
        <!-- Başlangıç Breadcrumb Alanı -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">İletişim</li>
                            </ul>
                            <h1 class="title">Bizimle İletişime Geçin</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="assets/images/product/product-45.png" alt="Resim">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bitiş Breadcrumb Alanı -->

        <!-- Başlangıç İletişim Alanı -->
        <div class="axil-contact-page-area axil-section-gap">
            <div class="container">
                <div class="axil-contact-page">
                    <div class="row row--30">
                        <div class="col-lg-8">
                            <div class="contact-form">
                                <h3 class="title mb--10">Sizden Haber Almak İsteriz.</h3>
                                <p>Eğer harika ürünler üretiyorsanız veya bizimle çalışmak istiyorsanız, bize bir mesaj bırakın.</p>
                                <form method="POST" action="{{ route("contactpost") }}" class="">
                                    @csrf
                                    <div class="row row--10">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-name">Ad <span>*</span></label>
                                                <input type="text" name="ad" id="contact-name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-phone">Telefon <span>*</span></label>
                                                <input type="text" name="telefon" id="contact-phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-email">E-posta <span>*</span></label>
                                                <input type="email" name="mail" id="contact-email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-message">Mesajınız</label>
                                                <textarea name="mesaj" id="contact-message" cols="1" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb--0">
                                                <input type="submit" id="submit" value="Gönder">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-location mb--40">
                                <h4 class="title mb--20">Mağazamız</h4>
                                <span class="address mb--20">8212 E. Glen Creek Street Orchard Park, NY 14127, Amerika Birleşik Devletleri</span>
                                <span class="phone">Telefon: +123 456 7890</span>
                                <span class="email">E-posta: Hello@etrade.com</span>
                            </div>
                            <div class="contact-career mb--40">
                                <h4 class="title mb--20">Kariyer</h4>
                                <p>Altı şey almak yerine, gerçekten hoşlandığınız bir şey alın.</p>
                            </div>
                            <div class="opening-hour">
                                <h4 class="title mb--20">Açılış Saatleri:</h4>
                                <p>Pazartesi'den Cumartesi'ye: 9am - 10pm
                                    <br> Pazar: 10am - 6pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Başlangıç Google Harita Alanı -->
                <div class="axil-google-map-wrap axil-section-gap pb--0">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=melbourne&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <!-- Bitiş Google Harita Alanı -->
            </div>
        </div>
        <!-- Bitiş İletişim Alanı -->
    </main>



    <!-- Start Footer Area  -->
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
