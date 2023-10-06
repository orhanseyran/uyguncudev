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
		<link rel="stylesheet" href="admin/vendor/datatables/media/css/dataTables.bootstrap5.css" />
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
						<h2 class="font-weight-bold text-6">Coupons</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">

								<li><span>Home</span></li>

								<li><span>eCommerce</span></li>

								<li><span>Coupons</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">

							<div class="card card-modern">
								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">
												<div class="col-12 col-lg-auto mb-3 mb-lg-0">
													<a href="ecommerce-coupons-form.html" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Coupon</a>
												</div>
												<div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Filter By:</label>
														<select class="form-control select-style-1 filter-by" name="filter-by">
															<option value="all" selected>All</option>
															<option value="1">ID</option>
															<option value="2">Campaign Name</option>
															<option value="3">Code</option>
															<option value="4">Usage/Limit</option>
															<option value="5">Expiry Date</option>
															<option value="5">Creating Date</option>
															<option value="5">Status</option>
														</select>
													</div>
												</div>
												<div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Show:</label>
														<select class="form-control select-style-1 results-per-page" name="results-per-page">
															<option value="12" selected>12</option>
															<option value="24">24</option>
															<option value="36">36</option>
															<option value="100">100</option>
														</select>
													</div>
												</div>
												<div class="col-12 col-lg-auto ps-lg-1">
													<div class="search search-style-1 search-style-1-lg mx-lg-auto">
														<div class="input-group">
															<input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
															<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 750px;">

											<thead>
												<tr>
													<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
													<th width="8%">ID</th>
													<th width="25%">Campaign Name</th>
													<th width="18%">Code</th>
													<th width="12%">Usage/Limit</th>
													<th width="12%">Expiry Date</th>
													<th width="12%">Creating Date</th>
													<th width="12%">Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>191</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 21, 2019</td>
													<td>Oct 21, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>192</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 2</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 22, 2019</td>
													<td>Oct 22, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>193</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 3</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 23, 2019</td>
													<td>Oct 23, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>194</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 4</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 24, 2019</td>
													<td>Oct 24, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>195</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 5</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 25, 2019</td>
													<td>Oct 25, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>196</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 6</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 26, 2019</td>
													<td>Oct 26, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>197</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 7</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 27, 2019</td>
													<td>Oct 27, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>198</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 8</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 28, 2019</td>
													<td>Oct 28, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>199</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 9</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 29, 2019</td>
													<td>Oct 29, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>200</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 10</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 30, 2019</td>
													<td>Oct 30, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>201</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 11</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 11, 2019</td>
													<td>Oct 11, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>202</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 12</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 12, 2019</td>
													<td>Oct 12, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>203</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 13</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 13, 2019</td>
													<td>Oct 13, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>204</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 14</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 14, 2019</td>
													<td>Oct 14, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>205</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 15</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 15, 2019</td>
													<td>Oct 15, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-coupons-form.html"><strong>206</strong></a></td>
													<td><a href="ecommerce-coupons-form.html"><strong>Name Example 16</strong></a></td>
													<td>CAMPAIGNCODE</td>
													<td>55 / 100</td>
													<td>Nov 16, 2019</td>
													<td>Oct 16, 2019</td>
													<td><span class="ecommerce-status active">Active</span></td>
												</tr>
											</tbody>
										</table>
										<hr class="solid mt-5 opacity-4">
										<div class="datatable-footer">
											<div class="row align-items-center justify-content-between mt-3">
												<div class="col-md-auto order-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-stretch">
														<div class="d-grid gap-3 d-md-flex justify-content-md-end me-4">
															<select class="form-control select-style-1 bulk-action" name="bulk-action" style="min-width: 170px;">
																<option value="" selected>Bulk Actions</option>
																<option value="delete">Delete</option>
															</select>
															<a href="ecommerce-coupons-form.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
														</div>

													</div>
												</div>
												<div class="col-lg-auto text-center order-3 order-lg-2">
													<div class="results-info-wrapper"></div>
												</div>
												<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
													<div class="pagination-wrapper"></div>
												</div>
											</div>
										</div>
									</table>
								</div>
							</div>

						</div>
					</div>
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
		<script src="admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>
		<script src="admin/js/theme.js"></script>
		<script src="admin/js/custom.js"></script>
		<script src="admin/js/theme.init.js"></script>
		<script src="admin/js/examples/examples.header.menu.js"></script>
		<script src="admin/js/examples/examples.ecommerce.datatables.list.js"></script>
admin/
	</body>
</html>
