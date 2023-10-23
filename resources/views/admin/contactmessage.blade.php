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
		<link rel="stylesheet" href="{{ asset("admin/vendor/select2/css/select2.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css") }}" />
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
						<h2 class="font-weight-bold text-6">Mesaj</h2>

					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="#" method="post">
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="tabs-modern row" style="min-height: 490px;">

											<div class="col-lg-3-5 col-xl-4-5">
												<div class="tab-content" id="tabContent">
										      		<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Ad - Soyad</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponName" value="{{ $contact->ad }}" required />
															</div>
														</div>

														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">email</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponAmount" value="{{ $contact->mail }}" required />
															</div>
														</div>
                                                        <div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Telefon</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponAmount" value="{{ $contact->telefon }}" required />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Mesaj</label>
															<div class="col-lg-7 col-xl-6">
																<textarea class="form-control form-control-modern" name="couponDescription" rows="6">
                                                                    {{ $contact->mesaj }}

                                                                </textarea>
															</div>
														</div>
										      		</div>
										      		<div class="tab-pane fade" id="usage-restriction" role="tabpanel" aria-labelledby="usage-restriction-tab">
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Minimum Spend</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="" placeholder="No minimum" />
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Maximum Spend</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponMaximumSpend" value="" placeholder="No maximum" />
															</div>
														</div>
														<div class="form-group row align-items-center">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Individual Use Only?</label>
															<div class="col-lg-7 col-xl-6">
																<div class="checkbox">
																	<label class="my-2">
																		<input type="checkbox" value="">
																		Check this box if the coupon cannot be used in conjunction with other coupons.
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Exclude Sale Items?</label>
															<div class="col-lg-7 col-xl-6">
																<div class="checkbox">
																	<label class="my-2">
																		<input type="checkbox" value="">
																		Check this box if the coupon should not apply to items on sale. Per-item coupons will only work if the item is not on sale. Per-cart coupons will only work if there are items in the cart that are not on sale.
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Products</label>
															<div class="col-lg-7 col-xl-6">
																<select multiple data-plugin-selectTwo class="form-control form-control-modern" name="couponProducts" data-plugin-options='{ "placeholder": "Search for a product..." }'>
																	<option value=""></option>
																	<option value="product1">Porto Bag</option>
																	<option value="product2">Porto Shoes</option>
																	<option value="product3">Porto Jacket</option>
																</select>
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Exclude Products</label>
															<div class="col-lg-7 col-xl-6">
																<select multiple data-plugin-selectTwo class="form-control form-control-modern" name="couponExcludeProducts" data-plugin-options='{ "placeholder": "Search for a product..." }'>
																	<option value=""></option>
																	<option value="product1">Porto Bag</option>
																	<option value="product2">Porto Shoes</option>
																	<option value="product3">Porto Jacket</option>
																</select>
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Product Categories</label>
															<div class="col-lg-7 col-xl-6">
																<select multiple data-plugin-selectTwo class="form-control form-control-modern" name="couponProductCategories" data-plugin-options='{ "placeholder": "Search for a product category..." }'>
																	<option value="any">Any Category</option>
																	<option value="product1">Bags</option>
																	<option value="product2">Shoes</option>
																	<option value="product3">Jackets</option>
																</select>
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Exclude Categories</label>
															<div class="col-lg-7 col-xl-6">
																<select multiple data-plugin-selectTwo class="form-control form-control-modern" name="couponExcludeCategories" data-plugin-options='{ "placeholder": "Search for a product category..." }'>
																	<option value="none">None</option>
																	<option value="product1">Bags</option>
																	<option value="product2">Shoes</option>
																	<option value="product3">Jackets</option>
																</select>
															</div>
														</div>
														<div class="form-group row align-items-center pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Allowed E-mails</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponAllowedEmails" value="" />
															</div>
														</div>
										      		</div>
										      		<div class="tab-pane fade" id="usage-limits" role="tabpanel" aria-labelledby="usage-limits-tab">
														<div class="form-group row align-items-center  pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Usage Limit Per Coupon</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponUsageLimitPerCoupon" value="" placeholder="Unlimited Usage" />
															</div>
														</div>
														<div class="form-group row align-items-center  pb-3">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Limit Usage to X Items</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponLimitUsageXItems" value="" placeholder="Apply to all qualifying items in cart" />
															</div>
														</div>
														<div class="form-group row align-items-center">
															<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Usage Limit Per User</label>
															<div class="col-lg-7 col-xl-6">
																<input type="text" class="form-control form-control-modern" name="couponUsageLimitPerUser" value="" placeholder="Unlimited Usage" />
															</div>
														</div>
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
                                <a class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" href="{{ route("contactadmin") }}">
                                    <i class="bx bx-save text-4 me-2"></i> Mesaj Sayfasına Dön
                                    {{-- <button  class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">

                                    </button> --}}
                                </a>

							</div>

							<div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
								<a href="{{ route("contactdel",$contact->id) }}" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
									<i class="bx bx-trash text-4 me-2"></i> Gelen Mesajı Sil
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
		<script src="{{ asset("admin/vendor/jquery-validation/jquery.validate.js") }}"></script>
		<script src="{{ asset("admin/vendor/select2/js/select2.js") }}"></script>
		<script src="{{ asset("admin/vendor/dropzone/dropzone.js") }}"></script>
		<script src="{{ asset("admin/vendor/pnotify/pnotify.custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.js") }}"></script>
		<script src="{{ asset("admin/js/custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.init.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.header.menu.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.ecommerce.form.js") }}"></script>

	</body>
</html>
