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
						<h2 class="font-weight-bold text-6">Hizmetlerimiz</h2>
						<div class="right-wrapper">


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
													<a href="{{ route("hizmetadd") }}" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Hizmet Ekle</a>
												</div>
												{{-- <div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Filtrele:</label>
														<select class="form-control select-style-1 filter-by" name="filter-by">
															<option value="all" selected>Hepsi</option>
															<option value="1">Resim</option>
															<option value="2">Ürün Adı</option>
															<option value="3">Fiyatı</option>
															<option value="4">Yayınlayan</option>

														</select>
													</div>
												</div>
												<div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Göster:</label>
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
															<input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Ara">
															<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
														</div>
													</div>
												</div> --}}
											</div>
										</div>

										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 150px;">

											<thead>
												<tr>
													<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
													{{-- <th width="8%">Resim</th> --}}
													<th width="28%">Hizmet Adı</th>
													<th width="35%">Açıklama</th>
													<th width="10%">Sil-Düzenle</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($services as $s )

												<tr>


                                                    {{-- <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
                                                    @if (!$image = $urun->resim)
                                                    <td><img style="width: 80px" src="resimler/resimYok.jpg" alt=""></td>
                                                    @elseif($image = $urun->resim)
                                                    <td><img style="width: 80px" src="resimler/{{ $image }}" alt=""></td>
                                                    @endif --}}
													<td><a href="{{ route("seoedit",$s->id) }}"><strong>{{ $s->id}}</strong></a></td>
													<td>{{ $s->baslik}}</td>
													<td>{!! $s->icerik !!}</td>
													<td><a href=" {{ route("hizmetedit",$s->id) }}"><button type="button" class="btn btn-danger">Düzenle</button></a></td>
                                                    <td>
                                                        <a href="{{ route("hizmetdel",$s->id)}} " onclick="return confirm('Silmek istediğinize emin misiniz?')" >

                                                            <button type="button" class="btn btn-warning">Sil</button>

                                                        </a>

                                                    </td>
                                                    {{-- <td><div class="switch switch-lg switch-primary">
														<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
													</div></td> --}}










												</tr>
                                                @endforeach


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
															<a href="#" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
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
        <script src="vendor/ios7-switch/ios7-switch.js"></script>
        <script src="js/examples/examples.advanced.form.js"></script>

	</body>
</html>
