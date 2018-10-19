@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h2 class="text-white">FAQ</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mg-top-15 pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<div class="single-post-wrap">
						<div class="content-wrap">
							<div class="faq-question">
								Stikes Dirgahayu ada prodi Ners belum? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Sementara baru ada prodi D-3 Keperawatan dan S1 Farmasi.
							</div>
							<div class="faq-question">
								Boleh tidak jurusan IPS masuk jadi perawat? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Boleh, ikuti seleksi masuk sesuai ketentuan.
							</div>
							<div class="faq-question">
								Apakah harus jurusan IPA untuk masuk di S1 Farmasi? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Benar, harus dari SMA IPA atau boleh dari SMK Kesehatan jurusan Farmasi.
							</div>
							<div class="faq-question">
								Adakah jalur prestasi dan atlit? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Ada, hubungi panitia Sipenmaru untuk syarat bebas tes tulisnya.
							</div>
							<div class="faq-question">
								Pembayaran SPP dan uang kuliah bolehkah ditransfer? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Boleh, namun sebaiknya tetap langsung setor ke Bank supaya slipnya tetap terbaca jika tersimpan lama.
							</div>
							<div class="faq-question">
								Gedung kuliah STIKES Dirgahayu itu di mana? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Ada tiga gedung. Satu gedung di dalam kompleks RS Dirgahayu, dan 2 gedung lainnya di Jalan Pasundan (samping RS Dirgahayu Samarinda).
							</div>
							<div class="faq-question">
								Boleh tidak ya pindah kuliah ke STIKES Dirgahayu? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Boleh, silakan hubungi bagian akademik kampus. 
							</div>
							<div class="faq-question">
								Boleh tidak ya pindah jurusan? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Silakan hubungi bagian akademik.
							</div>
							<div class="faq-question">
								Bolehkah legalisir diwakilkan orang lain? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Boleh, silakan siapkan surat kuasa bermaterai.
							</div>
							<div class="faq-question">
								Apakah boleh ijazah diambilkan oleh orang lain? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Disarankan yang bersangkutan langsung mengambil. Jika terpaksa harus diwakilkan siapkan surat kuasa bermaterai.
							</div>
							<div class="faq-question">
								Di mana saya bisa meminta foto kopi sertifikat akreditasi kampus? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Di bagian akademik dan kemahasiswaan. 
							</div>
							<div class="faq-question">
								Apa akreditasi institusi STIKES Dirgahayu? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Predikat B dari BAN PT. 
							</div>
							<div class="faq-question">
								Apa syarat mendaftar di STIKES Dirgahayu? <span class="fa fa-angle-left icon-faq"></span>
							</div>
							<div class="faq-answer">
								Sehat jasmani rohani dan tidak buta warna yang dibuktikan melalui surat keterangan dari Puskesmas/RS, lulusan SMA/SMK/ sederajat, bawa 2 lembar foto kopi ijazah yang dilegalisir. Pas foto 4x6 berwarna (5 lembar).
							</div>
						</div>
					</div>
				</div>
				<!-- End single-post Area -->
			<div class="col-lg-4">
				<div class="sidebars-area">
					<div class="single-sidebar-widget most-popular-widget">
						<h6 class="title">Tentang</h6>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/sambutan-ketua') }}">
									<h6>Sambutan Ketua</h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/profile-ketua-dan-wakil') }}">
									<h6>Profile Ketua Dan wakil</h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/senat') }}">
									<h6>Senat </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/visi-dan-misi/stikes') }}">
									<h6>Visi Dan Misi > Visi Dan Misi STIKES </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/visi-dan-misi/d3-keperawatan') }}">
									<h6>Visi Dan Misi > Visi Dan Misi D3 Keperawatan </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/visi-dan-misi/s1-farmasi') }}">
									<h6>Visi Dan Misi > Visi Dan Misi S1 Farmasi </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/struktur-organisasi') }}">
									<h6>Struktur Organisasi </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/arti-logo') }}">
									<h6>Arti Logo </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/sejarah') }}">
									<h6>Sejarah </h6>
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/tentang/daftar-nama-dosen') }}">
									<h6>Daftar Nama Dosen </h6>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection