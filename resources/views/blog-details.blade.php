<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Blog Details</title>
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


<body class="sticky-header overflow-md-visible">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    @include('header');
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Blog Area  -->
        <div class="axil-blog-area axil-section-gap">
            <div class="axil-single-post post-formate post-standard">
                <div class="container">
                    <div class="content-block">
                        <div class="inner">
                            <div class="post-thumbnail">
                                <img src="{{ asset("resimler/".$getir->resim) }}" alt="blog Images">
                            </div>
                            <!-- End .thumbnail -->
                        </div>
                    </div>
                    <!-- End .content-blog -->
                </div>
            </div>
            <!-- End .single-post -->
            <div class="post-single-wrapper position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="d-flex flex-wrap align-content-start h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="post-details__social-share">
                                        <span class="share-on-text">Share on:</span>
                                        <div class="social-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-discord"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 axil-post-wrapper">
                            <div class="post-heading">
                                <h2 class="title">{{ $getir->baslik }}</h2>
                                <div class="axil-post-meta">
                                    <div class="post-author-avatar">
                                        <img src="{{ asset("assets/images/blog/author-image-1.png") }}" alt="Author Images">
                                    </div>
                                    <div class="post-meta-content">
                                        <h6 class="author-title">
                                            <a href="#">Theresa Underwood</a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>Mar 20, 2022</li>
                                            <li>300k Views</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {!! $getir->icerik !!}


                            <div class="axil-comment-area">
                                <h4 class="title">2 comments</h4>
                                <ul class="comment-list">
                                    <!-- Start Single Comment  -->
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="single-comment">
                                                <div class="comment-img">
                                                    <img src="{{ asset("./assets/images/blog/author-image-4.png") }}" alt="Author Images">
                                                </div>
                                                <div class="comment-inner">
                                                    <h6 class="commenter">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Cameron Williamson">Cameron Williamson</span>
                                                            </span>
                                                        </a>
                                                    </h6>
                                                    <div class="comment-meta">
                                                        <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
                                                        <div class="reply-edit">
                                                            <div class="reply">
                                                                <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Reply">Reply</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Duis hendrerit velit scelerisque felis tempus, id porta libero venenatis. Nulla facilisi. Phasellus viverra magna commodo dui lacinia tempus. Donec malesuada nunc non dui posuere, fringilla vestibulum
                                                            urna mollis. Integer condimentum ac sapien quis maximus. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <!-- Start Single Comment  -->
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="single-comment">
                                                        <div class="comment-img">
                                                            <img src="{{ asset("./assets/images/blog/author-image-4.png") }}" alt="Author Images">
                                                        </div>
                                                        <div class="comment-inner">
                                                            <h6 class="commenter">
                                                                <a class="hover-flip-item-wrapper" href="#">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Rahabi Khan">Annie Mario</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <div class="comment-meta">
                                                                <div class="time-spent">Nov 23, 2018 at 12:23 pm
                                                                </div>
                                                                <div class="reply-edit">
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                                                            <span class="hover-flip-item">
                                                                                <span data-text="Reply">Reply</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse lobortis cursus lacinia. Vestibulum vitae leo id diam pellentesque ornare.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- End Single Comment  -->
                                        </ul>
                                    </li>
                                    <!-- End Single Comment  -->

                                    <!-- Start Single Comment  -->

                                    <!-- End Single Comment  -->
                                </ul>
                            </div>
                            <!-- End .axil-commnet-area -->

                            <!-- Start Comment Respond  -->
                            <div class="comment-respond">
                                <h4 class="title">Leave a Reply</h4>
                                <form action="#">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Leave a Reply</label>
                                                <textarea name="message" placeholder="Your Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Name <span>*</span></label>
                                                <input id="name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Email <span>*</span> </label>
                                                <input id="email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-submit">
                                                <button name="submit" type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Comment Respond  -->
                        </div>

                        <div class="col-lg-4">
                            <!-- Start Sidebar Area  -->
                            <aside class="axil-sidebar-area">

                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40">
                                    <h6 class="widget-title">Latest Posts</h6>

                                    <!-- Start Single Post List  -->
                                    <div class="content-blog post-list-view mb--20">
                                        <div class="thumbnail">
                                            <a href="blog-details.html">
                                                <img src="{{ asset("assets/images/blog/blog-04.png") }}" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-details.html">Dubai’s FRAME Offers its Take on the</a></h6>
                                            <div class="axil-post-meta">
                                                <div class="post-meta-content">
                                                    <ul class="post-meta-list">
                                                        <li>Mar 27, 2022</li>
                                                        <li>300k Views</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post List  -->

                                    <!-- Start Single Post List  -->

                                    <!-- End Single Post List  -->

                                    <!-- Start Single Post List  -->

                                    <!-- End Single Post List  -->

                                </div>
                                <!-- End Single Widget  -->
                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40">
                                    <h6 class="widget-title">Recent Viewed Products</h6>
                                    <ul class="product_list_widget recent-viewed-product">
                                        <!-- Start Single product_list  -->
                                        <li>
                                            <div class="thumbnail">
                                                <a href="blog-details.html">
                                                    <img src="{{ asset("assets/images/product/product-12.jpg") }}" alt="Blog Images">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h6 class="title"><a href="blog-details.html">Men's Fashion Tshirt</a></h6>
                                                <div class="product-meta-content">
                                                    <span class="woocommerce-Price-amount amount">
                                                <del>$30</del>
                                                $20
                                            </span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Single product_list  -->
                                        <!-- Start Single product_list  -->

                                        <!-- End Single product_list  -->
                                        <!-- Start Single product_list  -->

                                        <!-- End Single product_list  -->
                                    </ul>

                                </div>
                                <!-- End Single Widget  -->

                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40 widget_search">
                                    <h6 class="widget-title">Search</h6>
                                    <form class="blog-search" action="#">
                                        <button class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" placeholder="Search">
                                    </form>
                                </div>
                                <!-- End Single Widget  -->

                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40 widget_archive">
                                    <h6 class="widget-title">Archives List</h6>
                                    <ul>
                                        <li><a href="#">January 2020</a></li>
                                        <li><a href="#">February 2020</a></li>
                                        <li><a href="#">March 2020</a></li>
                                        <li><a href="#">April 2020</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget  -->

                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40 widget_archive_dropdown">
                                    <h6 class="widget-title">Archives Dropdown</h6>
                                    <select>
                                        <option>Select Month</option>
                                        <option>April 2020 (4)</option>
                                        <option>May 2020 (4)</option>
                                        <option>June 2020 (4)</option>
                                        <option>July 2020 (4)</option>
                                    </select>
                                </div>
                                <!-- End Single Widget  -->

                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40 widget_tag_cloud">
                                    <h6 class="widget-title">Tags</h6>
                                    <div class="tagcloud">
                                        <a href="#">Design</a>
                                        <a href="#">HTML</a>
                                        <a href="#">Graphic</a>
                                        <a href="#">Development</a>
                                        <a href="#">UI/UX Design</a>
                                        <a href="#">eCommerce</a>
                                        <a href="#">CSS</a>
                                        <a href="#">JS</a>
                                    </div>
                                </div>
                                <!-- End Single Widget  -->

                            </aside>
                            <!-- End Sidebar Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->

        <!-- Start Related Blog Area  -->
        <div class="related-blog-area bg-color-white pb--60 pb_sm--40">
            <div class="container">
                <div class="section-title-wrapper mb--70 mb_sm--40 pr--110">
                    <span class="title-highlighter highlighter-primary mb--10"> <i class="fal fa-bell"></i>Hot News</span>
                    <h3 class="mb--25">Related Blog</h3>
                </div>
                <div class="related-blog-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">

                    <!-- End .slick-single-layout -->

                    <!-- End .slick-single-layout -->
>
                    <!-- End .slick-single-layout -->

                    <!-- End .slick-single-layout -->
                </div>
            </div>
        </div>
        <!-- End Related Blog Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
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

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
