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
		<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="admin/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="admin/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="admin/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
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
						<h2 class="font-weight-bold text-6">Customer Name</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">

								<li><span>Home</span></li>

								<li><span>eCommerce</span></li>

								<li><span>Customers</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="#" method="post">
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-dollar-circle"></i>
												<h2 class="card-big-info-title">Billing Info</h2>
												<p class="card-big-info-desc">Add here the customer billing info with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">First Name</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingFirstName" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Last Name</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingLastName" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Company</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingCompany" value="" />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Address Line 1</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingAddressLine1" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Address Line 2</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingAddressLine2" value="" />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">City</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingCity" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Postcode / ZIP</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingPostCodeZip" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Country / Region</label>
													<div class="col-lg-7 col-xl-6">
														<select class="form-control form-control-modern" name="customerBillingCountryRegion">
															<option value="">Select a country / region</option>
															<option value="country1">Country 1</option>
															<option value="country2">Country 2</option>
															<option value="country3">Country 3</option>
															<option value="country4">Country 4</option>
														</select>
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">State / Country</label>
													<div class="col-lg-7 col-xl-6">
														<select class="form-control form-control-modern" name="customerBillingStateCountry">
															<option value="">Select a State</option>
															<option value="state1">State 1</option>
															<option value="state2">State 2</option>
															<option value="state3">State 3</option>
															<option value="state4">State 4</option>
														</select>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Phone</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="customerBillingPhone" value="" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
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
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Same as billing</label>
													<div class="col-lg-7 col-xl-6">
														<div class="checkbox">
															<label class="my-2">
																<input name="customerShippingSameAsBilling" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target=".shipping-fields-wrapper">
																Check this box to use same information as billing for shipping.
															</label>
														</div>
													</div>
												</div>
												<div class="shipping-fields-wrapper collapse show">
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">First Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingFirstName" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Last Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingLastName" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Company</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingCompany" value="" />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Address Line 1</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingAddressLine1" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Address Line 2</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingAddressLine2" value="" />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">City</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingCity" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Postcode / ZIP</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingPostCodeZip" value="" required />
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Country / Region</label>
														<div class="col-lg-7 col-xl-6">
															<select class="form-control form-control-modern" name="customerShippingCountryRegion">
																<option value="">Select a country / region</option>
																<option value="country1">Country 1</option>
																<option value="country2">Country 2</option>
																<option value="country3">Country 3</option>
																<option value="country4">Country 4</option>
															</select>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">State / Country</label>
														<div class="col-lg-7 col-xl-6">
															<select class="form-control form-control-modern" name="customerShippingStateCountry">
																<option value="">Select a State</option>
																<option value="state1">State 1</option>
																<option value="state2">State 2</option>
																<option value="state3">State 3</option>
																<option value="state4">State 4</option>
															</select>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Phone</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="customerShippingPhone" value="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-user-circle"></i>
												<h2 class="card-big-info-title">Account Info</h2>
												<p class="card-big-info-desc">Add here the customer account info with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Email / Username</label>
													<div class="col-lg-7 col-xl-6">
														<input type="email" class="form-control form-control-modern" name="customerEmailUsername" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center pb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Password</label>
													<div class="col-lg-7 col-xl-6">
														<input type="password" class="form-control form-control-modern" name="customerPassword" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Password Confirm</label>
													<div class="col-lg-7 col-xl-6">
														<input type="password" class="form-control form-control-modern" name="customerPasswordConfirm" value="" />
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
									<i class="bx bx-save text-4 me-2"></i> Save Customer
								</button>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="ecommerce-customers-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
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
		<script src="admin/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="admin/vendor/pnotify/pnotify.custom.js"></script>
		<script src="admin/js/theme.js"></script>
		<script src="admin/js/custom.js"></script>
		<script src="admin/js/theme.init.js"></script>
		<script src="admin/js/examples/examples.header.menu.js"></script>
		<script src="admin/js/examples/examples.ecommerce.form.js"></script>
admin/
	</body>
</html>
