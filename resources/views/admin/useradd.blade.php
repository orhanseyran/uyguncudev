<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<title>{{ $title = "185 Dijital Admin Panel" }}</title>
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="admin/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="admin/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="admin/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="admin/css/theme.css" />
		<link rel="stylesheet" href="admin/css/skins/default.css" />
		<link rel="stylesheet" href="admin/css/custom.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<script src="admin/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>

		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="resimler/kırmızı.png" height="70" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Kullanıcı Ekle</h2>
					</div>
					<div class="card-body">
						<form action="{{ route("registerpost") }}" method="POST" >
                            @csrf
							<div class="form-group mb-3">
								<label>Adı</label>
								<input name="name" type="text" class="form-control form-control-lg" />
							</div>

							<div class="form-group mb-3">
								<label>E-mail Adresi</label>
								<input name="email" type="email" class="form-control form-control-lg" />
							</div>

							<div class="form-group mb-0">
								<div class="row">
									<div class="col-sm-6 mb-3">
										<label>Şifresi</label>
										<input name="password" type="password" class="form-control form-control-lg" />
									</div>
								</div>

							</div>
                            <label for="dog-names">Yetki Seç: </label> <br><br>
                            <label for="role">Rol:</label>
                            <select name="role" id="role">
                                <option value="Admin">Admin</option>
                                <option value="Moderator">Moderator</option>
                                <option value="Alıcı">Alıcı</option>
                                <option value="Satıcı">Satıcı</option>
                                <!-- Diğer rol seçenekleri... -->
                            </select>
							</div>

							<div class="row">
								<div class="col-sm-8">
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Kaydet</button>
								</div>
                                <div class="col-sm-4 text-right">
								<a href="{{ route("homeadmin") }}"><button type="button" class="btn btn-primary mt-2">Panele Dön</button></a>
								</div>



                            @if(session('basarı'))
                            <div class="alert alert-success">
                                {{ session('basarı') }}
                            </div>
                            @elseif(session('hata'))
                            <div class="alert alert-danger">
                                {{ session('hata') }}
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
		<script src="admin/vendor/jquery/jquery.js"></script>
		<script src="admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="admin/vendor/popper/umd/popper.min.js"></script>
		<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="admin/vendor/common/common.js"></script>
		<script src="admin/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="admin/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="admin/js/theme.js"></script>
		<script src="admin/js/custom.js"></script>
		<script src="admin/js/theme.init.js"></script>

	</body>
</html>
