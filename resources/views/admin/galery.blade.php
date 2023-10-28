<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ $title = "185 Dijital Admin Panel" }}</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="admin/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="admin/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="admin/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="admin/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="admin/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="admin/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="admin/vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="admin/vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="admin/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="admin/css/theme.css" />
		<link rel="stylesheet" href="admin/css/layouts/modern.css" />
		<link rel="stylesheet" href="admin/css/skins/default.css" />
		<link rel="stylesheet" href="admin/css/custom.css">
		<script src="admin/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
            @include('admin.header');
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
                @include('admin.sidebar');
				<!-- end: sidebar -->

				<section role="main" class="content-body content-body-modern mt-0">
					<!-- <header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Products</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">

								<li><span>Home</span></li>

								<li><span>eCommerce</span></li>

								<li><span>Products</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header> -->

					<!-- start: page -->
					<div class="ecommerce-form-sidebar-overlay-wrapper">
						<div class="ecommerce-form-sidebar-overlay-body">
							<a href="#" class="ecommerce-form-sidebar-overlay-close"><i class="bx bx-x"></i></a>
							<div class="scrollable h-100 loading-overlay-showing" data-plugin-scrollable>
								<div class="loading-overlay">
									<div class="bounce-loader">
										<div class="bounce1"></div>
										<div class="bounce2"></div>
										<div class="bounce3"></div>
									</div>
								</div>
								<div class="ecommerce-form-sidebar-overlay-content scrollable-content px-3 pb-3 pt-1"></div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center justify-content-sm-between pt-2">
                        <h2>Galeri</h2>
						<div class="col-sm-auto text-center mb-4 mb-sm-0 mt-2 mt-sm-0">
							<a href="" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4" >+ Resim Ekle</a>
						</div>
						<div class="col-sm-auto">
							<form action="ecommerce-products-list.html" class="search search-style-1 search-style-1-light mx-auto" method="GET">
								<div class="input-group">
									<input type="text" class="form-control" name="product-term" id="product-term" placeholder="Search Product">
									<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="row row-gutter-sm mb-5">
						<!-- <div class="col-lg-2-5 col-xl-1-5 mb-4 mb-lg-0">
							<div class="filters-sidebar-wrapper bg-light rounded">
								<div class="card card-modern">
									<div class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>
										<h4 class="card-title">ELECTRONICS</h4>
									</div>
									<div class="card-body">
										<ul class="list list-unstyled mb-0">
											<li><a href="#">Smart TVs</a></li>
											<li><a href="#">Cameras</a></li>
											<li><a href="#">Headphones</a></li>
											<li><a href="#">Games</a></li>
										</ul>
									</div>
								</div>
								<hr class="solid opacity-7">
								<div class="card card-modern">
									<div class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>
										<h4 class="card-title">PRICE</h4>
									</div>
									<div class="card-body">
										<div class="slider-range-wrapper">
											<div class="m-md slider-primary slider-modern" data-plugin-slider data-plugin-options='{ "half_values": true, "values": [ 25, 270 ], "range": true, "max": 300 }' data-plugin-slider-output="#priceRange" data-plugin-slider-link-values-to="#priceRangeValues">
												<input id="priceRange" type="hidden" value="25, 270" />
											</div>
											<form class="d-flex align-items-center justify-content-between mb-2" method="get">
												<span id="priceRangeValues" class="price-range-values">
													Price $<span class="min price-range-low">25</span> - $<span class="max price-range-high">270</span>
												</span>
												<input type="hidden" class="hidden-price-range-low" name="priceLow" value="" />
												<input type="hidden" class="hidden-price-range-high" name="priceHigh" value="" />
												<button type="submit" class="btn btn-primary btn-h-1 font-weight-semibold rounded-0 btn-px-3 btn-py-1 text-2">FILTER</button>
											</form>
										</div>
									</div>
								</div>
								<hr class="solid opacity-7">
								<div class="card card-modern">
									<div class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>
										<h4 class="card-title">SIZES</h4>
									</div>
									<div class="card-body">
										<ul class="list list-inline list-filter mb-0">
											<li class="list-inline-item">
												<a href="#">S</a>
											</li>
											<li class="list-inline-item">
												<a href="#" class="active">M</a>
											</li>
											<li class="list-inline-item">
												<a href="#">L</a>
											</li>
											<li class="list-inline-item">
												<a href="#">XL</a>
											</li>
											<li class="list-inline-item">
												<a href="#">2XL</a>
											</li>
											<li class="list-inline-item">
												<a href="#">3XL</a>
											</li>
										</ul>
									</div>
								</div>
								<hr class="solid opacity-7">
								<div class="card card-modern">
									<div class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>
										<h4 class="card-title">BRANDS</h4>
									</div>
									<div class="card-body">
										<ul class="list list-unstyled mb-0">
											<li><a href="#">Adidas <span class="float-end">18</span></a></li>
											<li><a href="#">Camel <span class="float-end">22</span></a></li>
											<li><a href="#">Samsung Galaxy <span class="float-end">05</span></a></li>
											<li><a href="#">Seiko <span class="float-end">68</span></a></li>
											<li><a href="#">Sony <span class="float-end">03</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
						<div class="col-lg-3-5 col-xl-4-5">
							<div class="row row-gutter-sm">

								<div class="col-sm-6 col-xl-3 mb-4">
									<div class="card card-modern card-modern-alt-padding">
										<div class="card-body bg-light">
											<div class="image-frame mb-2">
												<div class="image-frame-wrapper">

													<a href=""><img src="/resimler/logo.png" class="img-fluid" alt="Product Short Name" /></a>
												</div>
											</div>

										</div>
									</div>
								</div>



							</div>
							<div class="row row-gutter-sm justify-content-between">
								<div class="col-lg-auto order-2 order-lg-1">
									<p class="text-center text-lg-left mb-0">Showing 1-8 of 60 results</p>
								</div>
								<div class="col-lg-auto order-1 order-lg-2 mb-3 mb-lg-0">
									<nav aria-label="Page navigation example">
									  	<ul class="pagination pagination-modern pagination-modern-spacing justify-content-center justify-content-lg-start mb-0">
									    	<li class="page-item">
									      		<a class="page-link prev" href="#" aria-label="Previous">
										        	<span><i class="fas fa-chevron-left" aria-label="Previous"></i></span>
										      	</a>
									    	</li>
										    <li class="page-item active"><a class="page-link" href="#">1</a></li>
										    <li class="page-item"><a class="page-link" href="#">2</a></li>
										    <li class="page-item"><a class="page-link" href="#">3</a></li>
										    <li class="page-item"><a class="page-link" href="#" disabled="true">...</a></li>
										    <li class="page-item"><a class="page-link" href="#">15</a></li>
										    <li class="page-item">
										      	<a class="page-link next" href="#" aria-label="Next">
										        	<span><i class="fas fa-chevron-right" aria-label="Next"></i></span>
										      	</a>
										    </li>
									  	</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>

								<ul>
									<li>
										<time datetime="2021-04-19T00:00+00:00">04/19/2021</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="admin/vendor/jquery/jquery.js"></script>
		<script src="admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="admin/vendor/popper/umd/popper.min.js"></script>
		<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="admin/vendor/common/common.js"></script>
		<script src="admin/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="admin/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="admin/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="admin/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="admin/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="admin/vendor/select2/js/select2.js"></script>
		<script src="admin/vendor/dropzone/dropzone.js"></script>
		<script src="admin/vendor/pnotify/pnotify.custom.js"></script>
		<script src="admin/js/theme.js"></script>
		<script src="admin/js/custom.js"></script>
		<script src="admin/js/theme.init.js"></script>
		<script src="admin/js/examples/examples.header.menu.js"></script>
		<script src="admin/js/examples/examples.ecommerce.form.js"></script>
		<script src="admin/js/examples/examples.ecommerce.sidebar.overlay.js"></script>

	</body>
</html>
