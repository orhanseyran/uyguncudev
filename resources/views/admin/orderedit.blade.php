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
		<link rel="stylesheet" href="{{ asset("admin/vendor/pnotify/pnotify.custom.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/theme.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/layouts/modern.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/skins/default.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/custom.css") }}">


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
						<h2 class="font-weight-bold text-6">Customer Name</h2>

					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="{{ route("siparispost") }}" method="POST">
                        @csrf

						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-mail-send"></i>
												<h2 class="card-big-info-title">Shipping Info</h2>
												<p class="card-big-info-desc">Add here the customer shipping info with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">

												<div class="shipping-fields-wrapper collapse show">
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Ad</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="ad" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Soyad</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="soyad" value="" required />
														</div>
													</div>

													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Adres</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="adres" value="" required />
														</div>
													</div>

													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Şehir</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="sehir" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Postcode / ZIP</label>
														<div class="col-lg-7 col-xl-6">
															<input type="number" class="form-control form-control-modern" name="zip" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Alıcı Ve Ürün</label>

														<div class="col-lg-7 col-xl-6">
															<select class="form-control form-control-modern" name="alici">
																<option value="Alıcı Seç">Alıcı Seç</option>
                                                                @foreach ($getir as $al )
                                                                <option value="{{ $al->name }}">{{ $al->name }}</option>

                                                                @endforeach


															</select><br>

                                                            <select class="form-control form-control-modern" name="urun">
                                                                <option value="">Ürün Seç</option>
                                                                @foreach ($urunler as $al )
                                                                <option value="{{ $al->baslik }}">{{ $al->baslik }}</option>

                                                                @endforeach


                                                            </select>
														</div>

													</div>
                                                    <div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Alıcı Ve Ürün</label>

														<div class="col-lg-7 col-xl-6">
															<select class="form-control form-control-modern" name="durum">
																<option value="Alıcı Seç">Sipariş Durumu</option>

                                                                <option value="İşleme Alındı">İşleme Alındı</option>
                                                                <option value="Yapım Aşamasında">Yapım Aşamasında</option>
                                                                <option value="Kargo için Hazır">Kargo için Hazır</option>
                                                                <option value="Kargoya Verildi">Kargoya Verildi</option>

															</select><br>


														</div>

													</div>


													<div class="form-group row align-items-center">

														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Telefon</label>
														<div class="col-lg-7 col-xl-6">
															<input type="number" class="form-control form-control-modern" name="telefon" value="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
                        <div class="card card-modern">
                            <div class="card-body">
                                <div class="datatables-header-footer-wrapper">

                                    <h2>Üyeler</h2>


                                    <table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 750px;">

                                        <thead>
                                            <tr>
                                                <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
                                                <th width="8%">ID</th>
                                                <th width="28%">Ad</th>
                                                <th width="25%">E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getir as $al )
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
                                                <td><a href="#"><strong>{{ $al->id }}</strong></a></td>
                                                <td><a href="#"><strong>{{ $al->name }}</strong></a></td>
                                                <td>{{ $al->email }}</td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                    <hr class="solid mt-5 opacity-4">

                                </table>
                            </div>
                        </div>

                        <input type="submit">


						<div class="row action-buttons">
							<div class="col-12 col-md-auto">
                                <div class="col-12 col-md-auto">
                                    <input type="submit" value="Yayınla" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
								</div>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="ecommerce-customers-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">İptal</a>
							</div>
							<div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
								<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
									<i class="bx bx-trash text-4 me-2"></i> Delete Customer
								</a>
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
		<script src="{{ asset("admin/vendor/pnotify/pnotify.custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.js") }}"></script>
		<script src="{{ asset("admin/js/custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.init.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.header.menu.js") }}"></script>

	</body>
</html>
