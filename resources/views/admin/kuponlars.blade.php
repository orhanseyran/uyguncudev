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
						<h2 class="font-weight-bold text-6">Kategoriler</h2>

					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">

							<div class="card card-modern">
								<div class="card-body">
									<div class="datatables-header-footer-wrapper mt-2">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">
												<div class="col-12 col-lg-auto mb-3 mb-lg-0">
													<a href="{{ route("kuponekle") }}" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ İndirim Kuponu Ekle</a>
												</div>


										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 550px;">

											<thead>
												<tr>
													<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
													<th width="8%">ID</th>
													<th width="20%">Kupon Adı</th>
													<th width="30%">İndirim Miktarı %</th>

												</tr>
											</thead>
											<tbody>
                                                @foreach ($getir as $get )
                                                <tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href=""><strong>{{ $get->id }}</strong></a></td>
													<td><a href="ecommerce-category-form.html"><strong>{{ $get->code}}</strong></a></td>
													<td><a href="ecommerce-category-form.html"><strong>{{ $get->discount_percentage}} %</strong></a></td>
                                                    <td><a href="{{ route("kupondel",$get->id) }}"onclick="return confirm('Silmek istediğinize emin misiniz?')"><button class="btn btn-danger">Sil</button></a></td>
													<td><a href="{{ route("kuponid",$get->id) }}"><button class="btn btn-success">Düzenle</button></a></td>

												</tr>

                                                @endforeach




											</tbody>
										</table>


									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

		>

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
