@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">Video</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
						<h4 class="cat-title">Majalah</h4>
						<div class="single-latest-post row align-items-center">
						@foreach($data as $value)
							<div class="col-lg-3">
								{{-- <div class="thumb"> --}}
									<img class="img-content img-thumbnail" src="{{ asset('/majalah/'.$value->foto_majalah) }}" alt="">
									<div class="detail" style="margin-top:10px">
										<a href="{{ asset('/majalah/'.$value->file_majalah) }}"><h6>{{ $value->judul_majalah }}</h6></a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_majalah) }}</a></li>
										</ul>
									</div>
								{{-- </div> --}}
							</div>
						@endforeach
						</div>
						<div class="load-more flex align-items-center justify-content-center">
							{{ $data->links() }}
						</div>
						
					</div>
					<!-- End latest-post Area -->
				</div>
				<div class="col-lg-4">
					<div class="sidebars-area">
							<form action="{{ url('/cari-majalah') }}" method="GET">
								<div class="form-group row">
									<div class="col-md-9">
										<input type="text" class="form-control" name="cari" placeholder="Cari Video">
									</div>
									<div class="col-md-3" style="padding-left:0">
										<button type="submit" class="btn btn-primary">Cari</button>
									</div>
								</div>
							</form>{{-- 
						<div class="single-sidebar-widget editors-pick-widget">
							<h6 class="title">Kegiatan Lain</h6>
							<div class="editors-pick-post">
								<div class="post-lists">
									@foreach($more as $value)
									<div class="single-post d-flex flex-row row">
										<div class="col-md-4 thumb" style="padding-right:0">
											<img class="img-fluid" src="{{ asset('frontend-assets/foto_video/'.$value->foto_konten) }}" alt="">
										</div>
										<div class="col-md-8 detail" style="padding-right: 0">
											<a href="{{ url('/video',$value->judul_slug_konten) }}"><h6>{{ $value->judul_konten }}</h6></a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_konten) }}</a></li>
											</ul>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection