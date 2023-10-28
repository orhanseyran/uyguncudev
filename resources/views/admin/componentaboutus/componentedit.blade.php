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
        <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
        rel="stylesheet"
      />
      <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />


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
        <link rel="stylesheet" href="{{ asset("vendor/bootstrap-tagsinput/bootstrap-tagsinput.css") }}" />
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
			<div class="inner-wrapper">
				<!-- start: sidebar -->
                @include('admin.sidebar')
				<!-- end: sidebar -->

				<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Menu Düzenle</h2>
					</header>

					<!-- start: page -->
						<form class="ecommerce-form action-buttons-fixed" action="{{ route("componenthomeditpost",$getir->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="row mt-2">
								<div class="col">
									<section class="card card-modern card-big-info">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-2-5 col-xl-1-5">
													<i class="card-big-info-icon bx bx-box"></i>
													<h2 class="card-big-info-title">Kategori Bilgileri</h2>
													<p class="card-big-info-desc">Bu Kısımda İstediğiniz Componenti oluşturabilirsiniz</p>
												</div>
												<div class="col-lg-3-5 col-xl-4-5">
													<div class="form-group row align-items-center pb-3">
														<h4>Başlık  </h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="baslik" value="{{ $getir->baslik }}"/>
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 1</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama1" value="{{ $getir->aciklama1 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 2</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama2" value="{{ $getir->aciklama2 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 3</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama3" value="{{ $getir->aciklama3 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 4</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama4" value="{{ $getir->aciklama4 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 5</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama5" value="{{ $getir->aciklama5 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 6</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama6" value="{{ $getir->aciklama6 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 7</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama7" value="{{ $getir->aciklama7 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 8</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama8" value="{{ $getir->aciklama8 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 9</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama9" value="{{ $getir->aciklama9 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Acıklama 10</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="aciklama10" value="{{ $getir->aciklama10 }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Resim</h4>
														<div class="">
															<input type="file" class="form-control form-control-modern" name="resim" value="{{ $getir->resim }}"  />
														</div>
													</div>
                                                    <div class="form-group row align-items-center pb-3">
														<h4>Link</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="link" value="{{ $getir->link }}"  />
														</div>
													</div>
                                                    <div class="col-lg-7 col-xl-6">

                                                        <select style="height: 60px; width:200px; text-align: center; font-size:16px;" id="renk" name="kategori" required>
                                                            <option value="{{ $getir->kategori }}">{{ $getir->kategori }}</option>
                                                            <option value="">Bölüm seç</option>
                                                            <option value="KategoriAlanı">KategoriAlanı</option>
                                                            <option value="FırsatUrun">Fırsat Ürün Alanı</option>
                                                            <option value="Ürünlerimiz1">Ürünlerimiz Alanı</option>
                                                            <option value="GelenYorumlar">Gelen Yorumlar Alanı</option>
                                                            <option value="YeniÜrünler">Yeni Ürünler Alanı</option>
                                                            <option value="EnCokSatılanUrunler">En Çok Satılan Ürünler Alanı</option>
                                                            {{-- <option value="beyaz">Beyaz</option>
                                                            <option value="mor">Mor</option>
                                                            <option value="pembe">Pembe</option>
                                                            <option value="turuncu">Turuncu</option>
                                                            <option value="kahverengi">Kahverengi</option>
                                                            <option value="gri">Gri</option>
                                                            <option value="sarimtirim">Sarımtırak</option>
                                                            <option value="lacivert">Lacivert</option>
                                                            <option value="bej">Bej</option>
                                                            <option value="koyumavi">Koyu Mavi</option>
                                                            <option value="bordo">Bordo</option>
                                                            <option value="fuşya">Fuşya</option>
                                                            <option value="eflatun">Eflatun</option>
                                                            <option value="fildişi">Fildişi</option>
                                                            <option value="taşmavi">Taş Mavi</option>
                                                            <option value="yeşilimsi">Yeşilimsi</option>
                                                            <option value="gumus">Gümüş</option>
                                                            <option value="bronz">Bronz</option>
                                                            <option value="limon">Limon</option>
                                                            <option value="mentol">Mentol</option>
                                                            <option value="fıstık">Fıstık</option>
                                                            <option value="ardıc">Ardıç Yeşili</option>
                                                            <option value="alacati">Alaçatı Moru</option>
                                                            <option value="mahmur">Mahmur Mavi</option>
                                                            <option value="somon">Somon</option> --}}
                                                        </select>

													</div>




                                                    <div class="col-lg7 col-xl-6">



                                                    </div>

{{--
                                                    <div class="form-group row pb-3">

                                                        <label for="tags-input" class="col-lg-3 control-label text-lg-end pt-2">Sayfa  Ana Resim</label>

                                                        <div class="col-lg7 col-xl-6">

                                                            <input type="file" class="form-control form-control-modern"  name="resim" multiple />

                                                        </div>


                                                    </div> --}}


                                                    <div class="form-group row pb-3">






                                                    </div>





													</div>

											</div>
										</div>
									</section>
								</div>
							</div>


							<div class="row action-buttons">
								<div class="col-12 col-md-auto">
                                    <input type="submit" value="Yayınla" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
								</div>
                                <div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
									<a href="" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">İptal</a>
								</div>




							</div>

						</form>
					<!-- end: page -->
				</section>
			</div>
		</section>

		<!-- Vendor -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/@yaireo/tagify"></script>
        <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
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
        <script src="{{ asset("vendor/bootstrap-tagsinput/bootstrap-tagsinput.js") }}"></script>


        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
        <script>
      var editor = new FroalaEditor('#example');
        </script>


<script>
    // The DOM element you wish to replace with Tagify
var input = document.getElementById('tags');

// initialize Tagify on the above input node reference
new Tagify(input)
  </script>


	</body>
</html>
