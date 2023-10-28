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
            @include('admin.header')
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
                @include('admin.sidebar')
				<!-- end: sidebar -->

				<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Slider Ekle</h2>

					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="{{ route("sliderpost") }}" method="post" enctype="multipart/form-data">
                        @csrf

						<div class="row">

							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">

										<div class="row">

											<div class="col-lg-2-5 col-xl-1-5">
                                                @if(session('basarı'))
                                                <div class="alert alert-success">
                                                    {{ session('basarı') }}
                                                </div>
                                                @endif
												<i class="card-big-info-icon bx bx-slider"></i>
												<h2 class="card-big-info-title">Slider</h2>
												<p class="card-big-info-desc">Oluşturmak İstediğiniz Katagoriye Ad Veriniz</p>
											</div>


                                                <div class="col-lg-3-5 col-xl-4-5">
                                                    <div class="form-group row align-items-center mb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Slider Başlığını Giriniz</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input type="text" class="form-control form-control-modern" name="baslik" value="" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Slider içeriğini Gir</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input type="text" class="form-control form-control-modern" name="icerik" value="" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Slider Resmini Gir</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input type="file" class="form-control form-control-modern"  name="picture"  />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Slider Buton Adı</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input style="width: 200px;" type="text" class="form-control form-control-modern" name="buton" value="" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Slider Buton Linki</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input style="" type="text" class="form-control form-control-modern" name="butonlink" value="" required />
                                                        </div>
                                                    </div>





											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row action-buttons">
							<div class="col-12 col-md-auto">
								<button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 me-2"></i> Yayınla
								</button>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="{{ route("sliderlar") }}" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">İptal Et</a>
							</div>

						</div>
					</form>

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

		<!-- Specific Page Vendor -->
		<script src="admin/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="admin/vendor/dropzone/dropzone.js"></script>
		<script src="admin/vendor/pnotify/pnotify.custom.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="admin/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="admin/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="admin/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="admin/js/examples/examples.header.menu.js"></script>


	</body>
</html>
