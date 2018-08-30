@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<!-- End top-post Area -->
	<!-- Start latest-post Area -->
	<section class="mg-top-15 pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start single-post Area -->
					<div class="single-post-wrap">
						<div class="feature-img-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="{{asset('frontend-assets/foto_berita/'.$row->foto_konten)}}" alt="">
						</div>
						<div class="content-wrap">
							<a href="#">
								<h3>{{ $row->judul_konten }}</h3>
							</a>
							<ul class="meta pb-20">
								{{-- <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li> --}}
								<li><a href="#"><span class="lnr lnr-user"></span>{{ $row->users->nama }}</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($row->tanggal_konten) }}</a></li>
								{{-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li> --}}
							</ul>
							{!!$row->isi_konten!!}
					</div>
				</div>
				<!-- End single-post Area -->
			</div>
				<div class="col-lg-4">
					<div class="sidebars-area">
							<form action="{{ url('/cari-konten') }}" method="GET">
								<div class="form-group row">
									<div class="col-md-9">
										<input type="text" class="form-control" name="cari" placeholder="Cari Konten">
										<input type="hidden" name="kategori" value="berita">
									</div>
									<div class="col-md-3" style="padding-left:0">
										<button type="submit" class="btn btn-primary">Cari</button>
									</div>
								</div>
							</form>
						<div class="single-sidebar-widget editors-pick-widget">
							<h6 class="title">Berita Lain</h6>
							<div class="editors-pick-post">
								<div class="post-lists">
									@foreach($more as $value)
									<div class="single-post d-flex flex-row row">
										<div class="col-md-4 thumb" style="padding-right:0">
											<img class="img-fluid" src="{{ asset('frontend-assets/foto_berita/'.$value->foto_konten) }}" alt="">
										</div>
										<div class="col-md-8 detail" style="padding-right: 0">
											<a href="{{ url('/berita',$value->judul_slug_konten) }}"><h6>{{ $value->judul_konten }}</h6></a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_konten) }}</a></li>
											</ul>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>
</div>
@endsection