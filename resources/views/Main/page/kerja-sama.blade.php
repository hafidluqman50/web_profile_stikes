@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">Kerja Sama</h1>
						<h4 class="text-white link-nav">{{ $data->judul_profil }}</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start single-post Area -->
					<div class="single-post-wrap">{{-- 
						<div class="feature-img-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="{{asset('frontend-assets/img/g3.jpg')}}" alt="">
						</div> --}}
						<div class="content-wrap">
							{!!$data->konten!!}{{-- 
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.
							</p> --}}{{-- 
						<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote> --}}
					</div>
				</div>
				<!-- End single-post Area -->
			</div>
			<div class="col-lg-4">
				<div class="sidebars-area">
					<div class="single-sidebar-widget most-popular-widget">
						<h6 class="title">Kerja Sama</h6>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/kerja-sama/perguruan-tinggi/dalam-negeri') }}">
									Perguruan Tinggi > Dalam Negeri
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/kerja-sama/perguruan-tinggi/luar-negeri') }}">
									Perguruan Tinggi > Luar Negeri
								</a>
							</div>
						</div>
						<div class="single-list flex-row d-flex">
							<div class="details">
								<a href="{{ url('/kerja-sama/pemerintah') }}">
									<h6>Pemerintah</h6>
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