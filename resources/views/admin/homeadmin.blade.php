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
		<link rel="stylesheet" href="admin/vendor/morris/morris.css" />
		<link rel="stylesheet" href="admin/vendor/datatables/media/css/dataTables.bootstrap5.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="admin/css/theme.css" />

		<!-- Theme Layout -->
		<link rel="stylesheet" href="admin/css/layouts/modern.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="admin/css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="admin/css/custom.css">

		<!-- Head Libs -->
		<script src="admin/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->

            @include('admin.header');


			<div class="inner-wrapper">
				<!-- start: sidebar -->

             @include('admin.sidebar');

				<!-- end: sidebar -->

				<section role="main" class="content-body content-body-modern">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Panel</h2>
						<div class="right-wrapper">


							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-12 col-xl-4">

							<div class="row">
								<div class="col-12">
									<div class="card card-modern">
										<div class="card-body p-0">
											<div class="widget-user-info">
												<div class="widget-user-info-header">
													<h2 class="font-weight-bold text-color-dark text-5">Merhaba, {{ auth()->user()->name }} </h2>
													<p class="mb-0">{{ auth()->user()->role }}</p>

													<div class="widget-user-acrostic bg-primary">
														<span class="font-weight-bold">JD</span>
													</div>
												</div>
												<div class="widget-user-info-body">
													<div class="row">
														<div class="col-auto">

                                                            {{-- @if ($getir == null)
                                                            <strong class="text-color-dark text-5">Ürün Eklenmemiş</strong>
                                                            @else
                                                            <strong class="text-color-dark text-5">{{ $getir }}</strong>
                                                            @endif





															<h3 class="text-4-1">Toplam SATİŞ</h3>
														</div>
														<div class="col-auto">
                                                            @if ($urunler == null)
                                                            <strong class="text-color-dark text-5">Ürün Eklenmemiş</strong>
                                                            @else

                                                            <strong class="text-color-dark text-5">{{ $urunler }}</strong>
                                                            @endif --}}

															<h3 class="text-4-1">Ürün</h3>
														</div>
													</div>
													<div class="row">
														{{-- <div class="col">
															<a href="{{ route("ürünler") }}" class="btn btn-light btn-xl border font-weight-semibold text-color-dark text-3 mt-4">Ürünlerim</a>
														</div> --}}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>



					<!-- end: page -->
				</section>
			</div>



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
		<script src="admin/vendor/raphael/raphael.js"></script>
		<script src="admin/vendor/morris/morris.js"></script>
		<script src="admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="admin/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="admin/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="admin/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="admin/js/examples/examples.header.menu.js"></script>
		<script src="admin/js/examples/examples.ecommerce.dashboard.js"></script>
		<script src="admin/js/examples/examples.ecommerce.datatables.list.js"></script>

	</body>
</html>
