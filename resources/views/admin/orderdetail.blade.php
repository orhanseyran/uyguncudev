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
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap/css/bootstrap.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/animate/animate.compat.css") }}">
		<link rel="stylesheet" href="{{ asset("admin/vendor/font-awesome/css/all.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/boxicons/css/boxicons.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/magnific-popup/magnific-popup.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/select2/css/select2.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css") }}" />
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
						<h2 class="font-weight-bold text-6">Order #6927 Details</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">

								<li><span>Home</span></li>

								<li><span>eCommerce</span></li>

								<li><span>Orders</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<form action="{{ route("ordersidpost",$getir->id) }}" class="order-details action-buttons-fixed" method="post">
                        @csrf
						<div class="row">
							<div class="col-xl-4 mb-4 mb-xl-0">

								<div class="card card-modern">
									<div class="card-header">
										<h2 class="card-title">General</h2>
									</div>
									<div class="card-body">
										<div class="form-row">
											<div class="form-group col mb-3">
												<label>Siparişi Güncelle</label>
												<select class="form-control form-control-modern" name="status" required>
													<option value="{{ $getir->status }}" selected>{{ $getir->status }}</option>
													<option value="Ödeme Bekleniyor">Ödeme Bekleniyor</option>
													<option value="İşleniyor">İşleniyor</option>
													<option value="Tamamlandı">Tamamlandı</option>
													<option value="İptal Edildi">İptal Edildi</option>
													<option value="İade">İade</option>
													<option value="Başarısız">Başarısız</option>
												</select>
											</div>
										</div>
										{{-- <div class="form-row">
											<div class="form-group col mb-3">
												<label>Date Created</label>
												<div class="date-time-field">
													<div class="date">
														<input type="text" class="form-control form-control-modern" name="orderDate" value="2019-11-21" required data-plugin-datepicker data-plugin-options='{"orientation": "bottom", "format": "yyyy-mm-dd"}' />
													</div>
													<div class="time">
														<span class="px-2">@</span>
														<input type="text" class="form-control form-control-modern text-center" name="orderTimeHour" value="10" required />
														<span class="px-2">:</span>
														<input type="text" class="form-control form-control-modern text-center" name="orderTimeMin" value="28" required />
													</div>
												</div>
											</div>
										</div> --}}
										<div class="form-row">
											<div class="form-group col mb-3">
												<label>Customer</label>
												<select class="form-control form-control-modern" name="orderCustomer" required data-plugin-selectTwo>
													<option value="{{ $getir->name }}{{ $getir->surname }}" selected>{{ $getir->name }}{{ $getir->surname }}</option>
													{{-- <option value="33">Monica Doe</option>
													<option value="55">Robert Doe</option>
													<option value="60">Tim Doe</option> --}}
												</select>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-xl-8">

								<div class="card card-modern">
									<div class="card-header">
										<h2 class="card-title">Adresler</h2>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-auto me-xl-5 pe-xl-5 mb-4 mb-xl-0">
												<h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">Fatura Adresi</h3>
												<ul class="list list-unstyled list-item-bottom-space-0">
													<li>{{ $getir->adress }}</li>

												</ul>
												<strong class="d-block text-color-dark">Email:</strong>
												<a href="{{ $getir->email }}">{{ $getir->email }}</a>
												<strong class="d-block text-color-dark mt-3">Telefon:</strong>
												<a href="tel:+5551234" class="text-color-dark">{{ $getir->phone }}</a>
											</div>
											<div class="col-xl-auto ps-xl-5">
												<h3 class="font-weight-bold text-color-dark text-4 line-height-1 mt-0 mb-3">Gönderim Adresi</h3>
												<ul class="list list-unstyled list-item-bottom-space-0">
													<li>{{ $getir->adress }}</li>

												</ul>
												<strong class="d-block text-color-dark">Email adres:</strong>
												<a href="{{ $getir->email }}">{{ $getir->email }}</a>
												<strong class="d-block text-color-dark mt-3">Telefon:</strong>
												<a href="tel:+5551234" class="text-color-dark">{{ $getir->phone }}</a>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col">

								<div class="card card-modern">
									<div class="card-header">
										<h2 class="card-title">Products</h2>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-ecommerce-simple table-ecommerce-simple-border-bottom table-borderless table-striped mb-0" style="min-width: 380px;">
												<thead>
													<tr>
														<th width="8%" class="ps-4">ID</th>
														<th width="65%">Ad</th>
														<th width="5%" class="text-end">Tutar</th>
														<th width="7%" class="text-end">Adet</th>
														<th width="5%" class="text-end">Toplam Tutar</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="ps-4"><a href="ecommerce-products-form.html"><strong>{{ $getir->id }}</strong></a></td>
														<td><a href="ecommerce-products-form.html"><strong>{{ $getir->urun_adı }}</strong></a></td>
														<td class="text-end">{{ $getir->per_price }}</td>
														<td class="text-end">{{ $getir->qty }}</td>
														<td class="text-end">{{ $getir->sub_total }}</td>
													</tr>

												</tbody>
											</table>
										</div>

										<div class="row justify-content-end flex-column flex-lg-row my-3">
											<div class="col-auto me-5">
												<h3 class="font-weight-bold text-color-dark text-4 mb-3">Ürün  Fiyatı </h3>
												<span class="d-flex align-items-center">
													{{ $getir->qty }} Adet
													<i class="fas fa-chevron-right text-color-primary px-3"></i>
													<b class="text-color-dark text-xxs">{{ $getir->per_price }}</b>
												</span>
											</div>
											{{-- <div class="col-auto me-5">
												<h3 class="font-weight-bold text-color-dark text-4 mb-3">Shipping</h3>
												<span class="d-flex align-items-center">
													Flat Rate
													<i class="fas fa-chevron-right text-color-primary px-3"></i>
													<b class="text-color-dark text-xxs">$20.00</b>
												</span>
											</div> --}}
											<div class="col-auto">
												<h3 class="font-weight-bold text-color-dark text-4 mb-3">Toplam Tutar</h3>
												<span class="d-flex align-items-center justify-content-lg-end">
													<strong class="text-color-dark text-5">{{ $getir->sub_total }}</strong>
												</span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col">

								<div class="card card-modern">
									<div class="card-header">
										<h2 class="card-title">Order Notes</h2>
									</div>
									<div class="card-body">
										<div class="ecommerce-timeline mb-3">

                                            @if ($getir->ordernote == null)
                                            <div class="ecommerce-timeline-items-wrapper">
												<div class="ecommerce-timeline-item">
													<small>Müşteri Notu</small>
													<p>Sipariş Notu Yok</p>
												</div>

											</div>

                                            @else
                                            <div class="ecommerce-timeline-items-wrapper">
												<div class="ecommerce-timeline-item">
													<small>Müşteri Notu</small>
													<p>{{ $getir->ordernote }}</p>
												</div>

											</div>
                                            @endif

										</div>
										<div class="form-row">
											<div class="form-group col pb-1 mb-3">
												<label>Add Note</label>
												<textarea class="form-control form-control-modern" name="orderAddNote" rows="6"></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<a href="#" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Add Note</a>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row action-buttons">
							<div class="col-12 col-md-auto">
								<button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 me-2"></i> Siparişi Kaydet
								</button>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="ecommerce-orders-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
							</div>
							<div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
								<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
									<i class="bx bx-trash text-4 me-2"></i> Delete Order
								</a>
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
		<script src="{{ asset("admin/vendor/select2/js/select2.js") }}"></script>
		<script src="{{ asset("admin/js/theme.js") }}"></script>
		<script src="{{ asset("admin/js/custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.init.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.header.menu.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.ecommerce.orders.detail.js") }}"></script>

	</body>
</html>
