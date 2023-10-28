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
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap/css/bootstrap.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/animate/animate.compat.css") }}">
		<link rel="stylesheet" href="{{ asset("admin/vendor/font-awesome/css/all.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/boxicons/css/boxicons.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/magnific-popup/magnific-popup.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/dropzone/basic.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/dropzone/dropzone.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/pnotify/pnotify.custom.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/theme.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/layouts/modern.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/skins/default.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/custom.css") }}">
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
						<h2 class="font-weight-bold text-6">Renk Düzenle</h2>
					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="{{ route("coloreditpost",$size->id) }}" method="post">
                        @csrf

						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-slider"></i>
												<h2 class="card-big-info-title">Renk Düzenle</h2>
												<p class="card-big-info-desc">Düzenlemek İstediğiniz Renk Biçimine Ad Veriniz</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Katagori Düzenle</label>
													<div class="col-lg-7 col-xl-6">
														<select style="height: 60px; width:200px; text-align: center; font-size:16px;" id="renk" name="color" required>
                                                            <option value="{{ $size->color }}">{{ $size->color }}</option>
                                                            <option value="kirmizi">Kırmızı</option>
                                                            <option value="mavi">Mavi</option>
                                                            <option value="yesil">Yeşil</option>
                                                            <option value="sari">Sarı</option>
                                                            <option value="siyah">Siyah</option>
                                                            <option value="beyaz">Beyaz</option>
                                                            <option value="mor">Mor</option>
                                                            <option value="pembe">Pembe</option>
                                                            <option value="turuncu">Turuncu</option>
                                                            <option value="kahverengi">Kahverengi</option>
                                                            <option value="gri">Gri</option>
                                                            <option value="sarimtirim">Sarımtırak</option>
                                                            <option value="lacivert">Lacivert</option>
                                                            <option value="bej">Bej</option>
                                                            <option value="koyumavi">Koyu Mavi</option>
                                                            <option value="bordo">Bordo</option>
                                                            <option value="fuşya">Fuşya</option>
                                                            <option value="eflatun">Eflatun</option>
                                                            <option value="fildişi">Fildişi</option>
                                                            <option value="taşmavi">Taş Mavi</option>
                                                            <option value="yeşilimsi">Yeşilimsi</option>
                                                            <option value="gumus">Gümüş</option>
                                                            <option value="bronz">Bronz</option>
                                                            <option value="limon">Limon</option>
                                                            <option value="mentol">Mentol</option>
                                                            <option value="fıstık">Fıstık</option>
                                                            <option value="ardıc">Ardıç Yeşili</option>
                                                            <option value="alacati">Alaçatı Moru</option>
                                                            <option value="mahmur">Mahmur Mavi</option>
                                                            <option value="somon">Somon</option>
                                                        </select>
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
									<i class="bx bx-save text-4 me-2"></i> Kaydet
								</button>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">İptal</a>
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
		<script src="{{ asset("admin/vendor/jquery/jquery.js") }}"></script>
		<script src="{{ asset("admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js") }}"></script>
		<script src="{{ asset("admin/vendor/popper/umd/popper.min.js") }}"></script>
		<script src="{{ asset("admin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
		<script src="{{ asset("admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js") }}"></script>
		<script src="{{ asset("admin/vendor/common/common.js") }}"></script>
		<script src="{{ asset("admin/vendor/nanoscroller/nanoscroller.js") }}"></script>
		<script src="{{ asset("admin/vendor/magnific-popup/jquery.magnific-popup.js") }}"></script>
		<script src="{{ asset("admin/vendor/jquery-placeholder/jquery.placeholder.js") }}"></script>
		<script src="{{ asset("admin/vendor/jquery-validation/jquery.validate.js") }}"></script>
		<script src="{{ asset("admin/vendor/dropzone/dropzone.js") }}"></script>
		<script src="{{ asset("admin/vendor/pnotify/pnotify.custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.js") }}"></script>
		<script src="{{ asset("admin/js/custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.init.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.header.menu.js") }}"></script>


	</body>
</html>
