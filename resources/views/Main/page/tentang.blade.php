@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h2 class="text-white">{{ $data->judul_profil }}</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mg-top-15 pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start single-post Area -->
					<div class="single-post-wrap">
						<div class="content-wrap">
							{!!$data->konten!!}
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