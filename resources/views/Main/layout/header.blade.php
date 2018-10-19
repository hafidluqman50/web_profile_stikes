<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="{{asset('frontend-assets/logo.jpg')}}">
		<meta name="author" content="colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>{{ $title }}</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{ asset('frontend-assets/slick-1.8.1/slick/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend-assets/slick-1.8.1/slick/slick-theme.css') }}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/jquery-ui.css')}}">
  		<link rel="stylesheet" href="{{ asset('backend-assets/plugins/datatables/dataTables.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{asset('frontend-assets/css/main.css')}}">
	</head>
	<body>
		<header>
			<div class="logo-wrap container bg-banner">
			</div>
			{{-- <div class="container-fluid"> --}}
				<div class="container main-menu" id="main-menu">
					<div class="row align-items-center justify-content-between">
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li class="menu-active"><a href="{{url('/')}}"><span class="lnr lnr-home"></span></a></li>
								<li class="menu-has-children"><a href="#">{{__('Tentang')}}</a>
									<ul>
										<li><a href="{{ url('/tentang/sambutan-ketua') }}">Sambutan Ketua</a></li>
										<li><a href="{{ url('/tentang/profile-ketua-dan-wakil') }}">Profile Ketua Dan Wakil</a></li>
										<li><a href="{{ url('/tentang/senat') }}">Senat</a></li>
										<li class="menu-has-children">
											<a href="#">Visi Dan Misi</a>
											<ul>
												<li><a href="{{ url('/tentang/visi-dan-misi/stikes') }}">Visi Dan Misi STIKES</a></li>
												<li><a href="{{ url('/tentang/visi-dan-misi/d3-keperawatan') }}">Visi Dan Misi D3 Keperawatan</a></li>
												<li><a href="{{ url('/tentang/visi-dan-misi/s1-farmasi') }}">Visi Dan Misi S1 Farmasi</a></li>
											</ul>
										</li>
										<li><a href="{{ url('/tentang/struktur-organisasi') }}">Struktur Organisasi</a></li>
										<li><a href="{{ url('/tentang/arti-logo') }}">Arti Logo</a></li>
										<li><a href="{{ url('/tentang/sejarah') }}">Sejarah</a></li>
										<li><a href="{{ url('/tentang/daftar-nama-dosen') }}">Daftar Nama Dosen</a></li>
										<li><a href="{{ url('/tentang/faq') }}">FAQ</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Pendaftaran</a>
									<ul>
										<li><a href="{{url('/pendaftaran/brosur')}}">Brosur</a></li>
										<li><a href="{{url('/pendaftaran/link')}}">Link</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Informasi Publik</a>
									<ul>
										<li><a href="{{url('/informasi/tanggal-penting')}}">Tanggal Penting</a></li>
										<li><a href="#">Berita Dan Pengumuman</a></li>
										<li><a href="{{url('/informasi/penelitian')}}">Penelitian</a></li>
										<li><a href="{{url('/informasi/foto-kegiatan')}}">Foto Kegiatan</a></li>
										<li><a href="{{url('/informasi/testimoni')}}">Testimoni</a></li>
										<li><a href="{{url('/informasi/beasiswa')}}">Beasiswa</a></li>
										<li><a href="{{url('/informasi/statistik')}}">Statistik</a></li>
										<li><a href="{{url('/informasi/seminar-dan-pelatihan')}}">Seminar Dan Pelatihan</a></li>
										<li><a href="{{url('/informasi/alur-pendaftaran')}}">Alur Pendaftaran</a></li>
										<li class="menu-has-children"><a href="#">Medsos</a>
											<ul>
												<li><a href="{{url('/informasi/medsos/facebook')}}">Facebook</a></li>
												<li><a href="{{url('/informasi/medsos/twitter')}}">Twitter</a></li>
											</ul>
										</li>
										<li class="menu-has-children"><a href="#">Support</a>
											<ul>
												<li><a href="http://simlitabmas.dikti.go.id">Simlitabmas</a></li>
												<li><a href="http://kopertis11.co.id">Kopertis</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Akademik</a>
									<ul>
										<li><a href="{{url('/akademik/kurikulum')}}">Kurikulum</a></li>
										<li><a href="{{url('/akademik/jadwal-kuliah')}}">Jadwal Kuliah</a></li>
										<li><a href="{{url('/akademik/kalender-akademik')}}">Kalender Akademik</a></li>
										<li><a href="{{url('/akademik/link-ke-siam')}}">Link Ke Siam</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Penelitian</a>
									<ul>
										<li><a href="{{url('/penelitian/informasi-penelitian')}}">Informasi Penelitian</a></li>
										<li><a href="{{url('/penelitian/publikasi')}}">Publikasi</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Kerjasama</a>
									<ul>
										<li class="menu-has-children"><a href="#">Perguruan Tinggi</a>
											<ul>
												<li><a href="{{url('/kerja-sama/perguruan-tinggi/luar-negeri')}}">Luar Negeri</a></li>
												<li><a href="{{url('/kerja-sama/perguruan-tinggi/dalam-negeri')}}">Dalam Negeri</a></li>
											</ul>
										</li>
										<li><a href="{{url('/kerja-sama/pemerintah')}}">Pemerintah</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Prodi</a>
									<ul>
										<li><a href="{{url('/prodi/s1-farmasi')}}">S1 Farmasi</a></li>
										<li><a href="{{url('/prodi/d3-keperawatan')}}">D3 Keperawatan</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Mahasiswa Dan Alumni</a>
									<ul>
										<li><a href="{{url('/mahasiswa-alumni/portal-mahasiswa')}}">Portal Mahasiswa</a></li>
										<li><a href="{{url('/mahasiswa-alumni/alumni')}}">Alumni</a></li>
										<li><a href="{{url('/mahasiswa-alumni/kegiatan-mahasiswa')}}">Kegiatan Mahasiswa</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="#">Lembaga</a>
									<ul>
										<li><a href="{{url('/lembaga/lppm')}}">LPPM</a></li>
										<li><a href="{{url('/lembaga/upm')}}">UPM</a></li>
										<li><a href="{{url('/lembaga/asrama')}}">ASRAMA</a></li>
									</ul>
								</li>
							</ul>
						</nav><!-- #nav-menu-container -->{{-- 
						<div class="navbar-right">
							<form class="Search">
								<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
								<label for="Search-box" class="Search-box-label">
									<span class="lnr lnr-magnifier"></span>
								</label>
								<span class="Search-close">
									<span class="lnr lnr-cross"></span>
								</span>
							</form>
						</div> --}}
					</div>
				</div>
			{{-- </div> --}}
		</header>
