<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap/css/bootstrap.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/animate/animate.compat.css") }}">
		<link rel="stylesheet" href="{{ asset("admin/vendor/font-awesome/css/all.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/boxicons/css/boxicons.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/magnific-popup/magnific-popup.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/theme.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/skins/default.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/custom.css") }}">
		<script src="admin/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="{{ asset("resimler/kırmızı.png") }}" height="70" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Admin Giriş Paneli</h2>
					</div>
					<div class="card-body">
						<form action="{{ route("loginpost") }}" method="post">
                            @csrf
							<div class="form-group mb-3">
								<label>Kullanıcı Adı</label>
								<div class="input-group">
									<input name="email"  type="text" class="form-control form-control-lg" />
									<span class="input-group-text">
										<i class="bx bx-user text-4"></i>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Şifre</label>
								</div>
								<div class="input-group">
									<input  name="password" type="password" class="form-control form-control-lg" />
									<span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Beni hatırla</label>
									</div>
								</div>
								<div class="col-sm-4 text-end">
									<button type="submit" class="btn btn-primary mt-2">Giriş Yap</button>
								</div>
							</div>
                            @if(session('giris'))
                            <div class="alert alert-success">
                                {{ session('giris') }}
                            </div>
                            @elseif(session('Hata'))
                            <div class="alert alert-danger">
                                {{ session('Hata') }}
                            </div>

                           @endif
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

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

		<!-- Specific Page Vendor -->

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
