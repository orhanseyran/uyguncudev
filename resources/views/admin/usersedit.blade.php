<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ $title = "Seyran Ajans Admin Panel" }}</title>
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
						<h2 class="font-weight-bold text-6">Ürün Renk Ekle</h2>
					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="{{ route("useredit",$getir->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-slider"></i>
												<h2 class="card-big-info-title">Ürün Renk</h2>
												<p class="card-big-info-desc">Oluşturmak İstediğiniz Ürün Renk Biçimine Ad Veriniz</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center mb-3">
													<label  class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Ürün Renk Biçimini Giriniz</label>
													<div class="col-lg-7 col-xl-6">
                                                        @if(session('onay'))
                                                        <div class="alert alert-success">
                                                            {{ session('onay') }}
                                                        </div>
                                                        @elseif(session('pasif'))
                                                        <div class="alert alert-danger">
                                                            {{ session('pasif') }}
                                                        </div>

                                                        @elseif(session('reddet'))
                                                        <div class="alert alert-warning">
                                                            {{ session('reddet') }}
                                                        </div>

                                                        @endif

                                                        <div class="form-group">
                                                            <label for="inputName">Ad:</label>
                                                            <input type="text" class="form-control" name="name" value="{{ $getir->name }}" id="inputName" placeholder="Adınızı girin">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail">Email:</label>
                                                            <input type="email" class="form-control" name="email" value="{{ $getir->email }}" id="inputEmail" placeholder="Email adresinizi girin">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword">Eski Şifre:</label>
                                                            <input type="password" class="form-control" name="old_password" id="inputPassword" placeholder="Şifrenizi girin">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputPassword">Yeni Şifre:</label>
                                                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Şifrenizi Tekrar Girin">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="inputRole">Rol:</label>
                                                            <select name="role" class="form-control" id="inputRole">
                                                                <option value="{{ $getir->role }}">{{ $getir->role }}</option>
                                                                <option value="admin">Admin</option>
                                                                <option value="moderator">Moderatör</option>
                                                                <option value="satici">Satıcı</option>
                                                                <option value="alici">Alıcı</option>
                                                            </select>
                                                        </div>
                                                        <br>

                                                        <button type="submit" class="btn btn-primary">Kullanıcıyı Güncelle</button>
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
								<a href="{{ route("kategori") }}" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">İptal</a>
							</div>

						</div>
					</form>
					<!-- end: page -->
				</section>
			</div>



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
