@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<section class="mg-top-15 pb-120 container">
		<div class="no-padding">
			<div class="row">
				<div class="col-lg-12 post-list">
					<div class="row popular-post-wrap">
						<div class="col-lg-8">
							<div class="feature-post relative">
								@forelse($konten->getKonten('berita',4) as $key => $value)
								<div class="feature-img relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{asset('frontend-assets/foto_berita/'.$value->foto_konten)}}" alt="">
									<div class="details">
										<a href="{{ url('/berita',$value->judul_slug_konten) }}">
											<h3>{{ $value->judul_konten }}</h3>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_konten) }}</a></li>
										</ul>
									</div>
								</div>
								@empty
								<div class="feature-img relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{asset('frontend-assets/img/blank.jpg')}}" alt="">
									<div class="details">
										<a href="#">
											<h3>Tidak Ada Berita</h3>
										</a>
									</div>
								</div>
								@endforelse
							</div>
							<div class="icon-underslider">
								<div class="row">
									<div class="col-lg-4">
										<a href="#">
											<div class="icon-link">
												<span class="lnr lnr-license"></span> SNMPTN
											</div>
										</a>
									</div>
									<div class="col-lg-4">
										<a href="#">
											<div class="icon-link">
												<span class="lnr lnr-license"></span>
												SBMPTN
											</div>
										</a>
									</div>
									<div class="col-lg-4">
										<a href="#">
											<div class="icon-link">
												<span class="lnr lnr-license"></span>
												SMMPTN
											</div>
										</a>
									</div>
									<div class="col-lg-4">
										<a href="#">
											<div class="icon-link">
												<span class="lnr lnr-screen"></span>
												SIA
											</div>
										</a>
									</div>
									<div class="col-lg-4">
										<a href="#">
											<div class="icon-link">
												<span class="lnr lnr-envelope"></span>
												WEB-Mail
											</div>
										</a>
									</div>
									<div class="col-lg-4">
										<a href="#">
											<div class="icon-link">
												<span class="lnr lnr-location"></span>
												springer
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Kegiatan</h6>
									<div class="editors-pick-post">
										<div class="post-lists">
										@forelse($konten->getKonten('kegiatan',3) as $key => $value)
											<div class="single-post d-flex flex-row">
												<div class="col-md-6 no-padding">
													<div class="thumb">
														<img class="img-thumbnail" src="{{asset('frontend-assets/foto_kegiatan/'.$value->foto_konten)}}" alt="">
													</div>
												</div>
												<div class="col-md-6 no-padding">
													<div class="detail">
														<a href="{{ url('/kegiatan',$value->judul_slug_konten) }}"><h6>{{ $value->judul_konten }}</h6></a>
														<ul class="meta">
															<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
															<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_konten) }}</a></li>
														</ul>
													</div>
												</div>
											</div>
											@empty
											Tidak Ada Kegiatan
											@endforelse
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Pengumuman</h6>
									<div class="editors-pick-post">
										<div class="post-lists">
											@forelse($konten->getKonten('pengumuman',3) as $key => $value)
											<div class="single-post d-flex flex-row">
												{{-- <div class="col-md-6 no-padding">
													<div class="thumb">
														<img class="img-thumbnail" src="{{asset('frontend-assets/foto_pengumuman/'.$value->foto_konten)}}" alt="">
													</div>
												</div> --}}
												<div class="col-md-12 no-padding">
													<div class="detail">
														<a href="{{url('/pengumuman',$value->judul_slug_konten)}}"><h6>{{ $value->judul_konten }}</h6></a>
														<ul class="meta">
															<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
															<li><a href="#"><span class="lnr lnr-calendar-full"></span>
																{{dateArticle($value->tanggal_konten)}}</a></li>
														</ul>
													</div>
												</div>
											</div>
											@empty
											Tidak Ada Pengumuman
											@endforelse
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				<div class="col-lg-12 post-list">
					<div class="relavent-story-post-wrap mt-30 row">
						<div class="col-md-12 relavent-story-list-wrap">
							<div class="single-relavent-post">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="kegiatan-tab" data-toggle="tab" href="#kegiatan" role="tab" aria-controls="kegiatan" aria-selected="true">Kegiatan</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="berita-tab" data-toggle="tab" href="#berita" role="tab" aria-controls="berita" aria-selected="false">Berita</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="pengumuman-tab" data-toggle="tab" href="#pengumuman" role="tab" aria-controls="pengumuman" aria-selected="false">Pengumuman</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="majalah-tab" data-toggle="tab" href="#majalah" role="tab" aria-controls="majalah" aria-selected="false">Majalah</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="jurnal-tab" data-toggle="tab" href="#jurnal" role="tab" aria-controls="jurnal" aria-selected="false">Jurnal</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="dokumen-tab" data-toggle="tab" href="#dokumen" role="tab" aria-controls="dokumen" aria-selected="false">Dokumen dan Peraturan</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="informasi-tab" data-toggle="tab" href="#informasi" role="tab" aria-controls="informasi" aria-selected="false">Informasi Publik</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
								  </li>
								</ul>
								<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
								  	<div class="card">
								  		<div class="card-body">
											<div class="editors-pick-post">		
												<div class="post-lists row">
												@forelse($konten->getKonten('kegiatan',4) as $key => $value)
													<div class="col-md-6">
														<div class="single-post d-flex flex-row row">
															<div class="col-md-5 no-padding thumb">
																<img class="img-content img-thumbnail" src="{{ $value->foto_konten != '-' ? asset('frontend-assets/foto_kegiatan/'.$value->foto_konten) : asset('frontend-assets/img/no-image.jpg')}}" alt="">
															</div>
															<div class="detail no-padding col-md-7">
																<a href="{{url('/kegiatan',$value->judul_slug_konten)}}"><h6>{{ $value->judul_konten }}</h6></a>
																<ul class="meta">
																	<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
																	<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{dateArticle($value->tanggal_konten)}}</a></li>
																</ul>
															</div>
														</div>
													</div>
												@empty
												Tidak Ada Kegiatan
												@endforelse
												</div>
												@if(count($konten->getKonten('kegiatan',4)) > 0)
												<div class="flex mg-top-20 align-items-center justify-content-center">
													<a href="{{url('/kegiatan')}}">
														<button class="btn btn-default">
															Lihat Kegiatan lainnya <span class="fa fa-long-arrow-right"></span>
														</button>
													</a>
												</div>
												@endif
											</div>
								  		</div>
								  	</div>
								  </div>
								<div class="tab-pane fade" id="berita" role="tabpanel" aria-labelledby="berita-tab">
								  	<div class="card">
								  		<div class="card-body">
											<div class="editors-pick-post">		
												<div class="post-lists row">
												@forelse($konten->getKonten('berita',4) as $key => $value)
													<div class="col-md-6">
														<div class="single-post d-flex flex-row row">
															<div class="col-md-5 no-padding thumb">
																<img class="img-content img-thumbnail" src="{{ $value->foto_konten != '-' ? asset('frontend-assets/foto_berita/'.$value->foto_konten) : asset('frontend-assets/img/no-image.jpg')}}" alt="">
															</div>
															<div class="col-md-7 detail">
																<a href="{{url('/berita',$value->judul_slug_konten)}}"><h6>{{ $value->judul_konten }}</h6></a>
																<ul class="meta">
																	<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
																	<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_konten) }}</a></li>
																</ul>
															</div>
														</div>
													</div>
												@empty
												Tidak Ada Berita
												@endforelse
												</div>
												@if(count($konten->getKonten('berita',4)) > 0)
												<div class="flex mg-top-20 align-items-center justify-content-center">
													<a href="{{url('/berita')}}">
														<button class="btn btn-default">
															Lihat Berita lainnya <span class="fa fa-long-arrow-right"></span>
														</button>
													</a>
												</div>
												@endif
											</div>
								  		</div>
								  	</div></div>
								<div class="tab-pane fade" id="pengumuman" role="tabpanel" aria-labelledby="info-kampus">
									<div class="card">
										<div class="card-body">
											<div class="editors-pick-post">		
												<div class="post-lists row">
												@forelse($konten->getKonten('pengumuman',4) as $key => $value)
													<div class="col-md-6">
														<div class="single-post d-flex flex-row row">
															<div class="col-md-4 no-padding thumb">
																<p>{{ dateArticle($value->tanggal_konten) }}</p>
															</div>
															<div class="col-md-8 no-padding detail">
																<a href="{{url('/pengumuman',$value->judul_slug_konten)}}"><h6>{{ $value->judul_konten }}</h6></a>
																<ul class="meta">
																	<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
																	<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_konten) }}</a></li>
																</ul>
															</div>
														</div>
													</div>
												@empty
												Tidak Ada Pengumuman
												@endforelse
												</div>
												@if(count($konten->getKonten('pengumuman',4)) > 0)
												<div class="flex mg-top-20 align-items-center justify-content-center">
													<a href="{{url('/pengumuman')}}">
														<button class="btn btn-default">
															Lihat Pengumuman lainnya <span class="fa fa-long-arrow-right"></span>
														</button>
													</a>
												</div>
												@endif
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="majalah" role="tabpanel" aria-labelledby="majalah-tab">
									<div class="card">
										<div class="card-body">
											<div class="post-lists row">
											@forelse($majalah as $key => $value)
												<div class="col-md-6">
													<div class="single-post d-flex flex-row row">
														<div class="thumb">
															<img class="img-content img-thumbnail" src="{{ asset('/majalah/'.$value->foto_majalah) }}" alt="">
															<div class="detail">
																<a href="{{ asset('/majalah/'.$value->file_majalah) }}"><h6>{{ $value->judul_majalah }}</h6></a>
																<ul class="meta">
																	<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
																	<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_majalah) }}</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											@empty
											Tidak Ada Majalah
											@endforelse
											</div>
											@if(count($majalah) > 0)
											<div class="flex mg-top-20 align-items-center justify-content-center">
												<a href="{{url('/majalah-konten')}}">
													<button class="btn btn-default">
														Lihat Majalah lainnya <span class="fa fa-long-arrow-right"></span>
													</button>
												</a>
											</div>
											@endif
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="jurnal" role="tabpanel" aria-labelledby="jurnal-tab">
									<div class="card">
										<div class="card-body row">
								  			@forelse($link->getData('jurnal') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
									<div class="card">
										<div class="card-body">
											<table class="table table-bordered table-hover">
												<thead class="thead-dark">
													<tr align="center">
														<th scope="col">No.</th>
														<th scope="col">Tanggal Upload</th>
														<th scope="col">Judul Dokumen</th>
														<th scope="col">Input By</th>
														<th scope="col">#</th>
													</tr>
												</thead>
												<tbody>
													@forelse($dokumen as $key => $value)
													<tr align="center">
														<td>{{ $key+1 }}</td>
														<td>{{ dateArticle($value->tanggal_upload) }}</td>
														<td>{{ $value->judul_dokumen }}</td>
														<td>{{ $value->users->nama }}</td>
														<td>
															<a href="{{url('/download-dokumen/'.$value->nama_file)}}">
																<button class="btn btn-success">
																	<span class="fa fa-download"></span>
																</button>
															</a>
														</td>
													</tr>
													@empty
													<tr align="center">
														<td colspan="3"> Tidak Ada Dokumen</td>
													</tr>
													@endforelse
												</tbody>
											</table>
											@if(count($dokumen) > 0)
											<div class="flex mg-top-20 align-items-center justify-content-center">
												<a href="{{ url('/dokumen-peraturan') }}">
													<button class="btn btn-default">
														Lihat Dokumen Lainnya <span class="fa fa-long-arrow-right"></span>
													</button>
												</a>
											</div>
											@endif
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="informasi" role="tabpanel" aria-labelledby="informasi-tab">
									<div class="card">
										<div class="card-body row">
								  			@forelse($link->getData('informasi-publik') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
									<div class="card">
										<div class="card-body">
											<div class="editors-pick-post">		
												<div class="post-lists row">
											@forelse($video as $key => $value)
													<div class="col-md-6">
														<div class="single-post d-flex flex-row row">
															<div class="col-md-5 no-padding thumb">
																<a href="{{ url('/video',$value->judul_slug_video) }}">
																	<img class="img-content img-thumbnail" src="{{ getThumbnail($value->link_video) }}" alt="">
																</a>
															</div>
															<div class="col-md-7 detail">
																<a href="{{ url('/video',$value->judul_slug_video) }}"><h6>{{ $value->judul_video }}</h6></a>
																<ul class="meta">
																	<li><a href="#"><span class="lnr lnr-user"></span>{{ $value->users->nama }}</a></li>
																	<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ dateArticle($value->tanggal_upload) }}</a></li>
																</ul>
															</div>
														</div>
													</div>
											@empty
											Tidak Ada Video
											@endforelse
												</div>
											</div>
											@if(count($video) > 0)
											<div class="flex mg-top-20 align-items-center justify-content-center">
												<a href="{{url('/video')}}">
													<button class="btn btn-default">
														Lihat Video lainnya <span class="fa fa-long-arrow-right"></span>
													</button>
												</a>
											</div>
											@endif
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="single-relavent-post">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="pendaftaran-tab" data-toggle="tab" href="#pendaftaran" role="tab" aria-controls="pendaftaran" aria-selected="true">Pendaftaran</a>
								  </li>
								  <li class="nav-item tab-black">
								    <a class="nav-link" id="akademik-tab" data-toggle="tab" href="#akademik" role="tab" aria-controls="akademik" aria-selected="false">Akademik</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="alumni-tab" data-toggle="tab" href="#alumni" role="tab" aria-controls="alumni" aria-selected="false">Alumni</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="kepegawaian-tab" data-toggle="tab" href="#kepegawaian" role="tab" aria-controls="kepegawaian" aria-selected="false">Kepegawaian</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="keuangan-tab" data-toggle="tab" href="#keuangan" role="tab" aria-controls="keuangan" aria-selected="false">Perencanaan dan Keuangan</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="lainnya-tab" data-toggle="tab" href="#lainnya" role="tab" aria-controls="lainnya" aria-selected="false">Lainnya</a>
								  </li>
								</ul>
								<div class="tab-content" id="myTabContent">
								  <div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
								  	<div class="card">
								  		<div class="card-body row">
								  			@forelse($link->getData('pendaftaran') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
								  		</div>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="akademik" role="tabpanel" aria-labelledby="akademik-tab">
								  	<div class="card">
								  		<div class="card-body row">
								  			@forelse($link->getData('akademik') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
								  		</div>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="alumni" role="tabpanel" aria-labelledby="alumni-tab">
								  	<div class="card">
								  		<div class="card-body row">
								  			@forelse($link->getData('alumni') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
								  		</div>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="kepegawaian" role="tabpanel" aria-labelledby="kepegawaian-tab">
								  	<div class="card">
								  		<div class="card-body row">
								  			@forelse($link->getData('kepegawaian') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
								  		</div>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab">
								  	<div class="card">
								  		<div class="card-body row">
								  			@forelse($link->getData('perencanaan') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
								  		</div>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
								  	<div class="card">
								  		<div class="card-body row">
								  			@forelse($link->getData('lainnya') as $key => $value)
								  			<div class="col-md-2">
								  				<a href="{{$value->link}}">
									  				<button class="btn btn-info">
									  					{{ $value->judul_link }}
									  				</button>
								  				</a>
								  			</div>
								  			@empty
								  			Tidak Ada Link
								  			@endforelse
								  		</div>
								  	</div>
								  </div>
								</div>
							</div>
						</div>{{-- 
						<div class="col-md-3 no-padding relavent-story-list-wrap">
							<div class="single-relavent-post">
								<h6>Pencarian</h6>
								<br>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Pencarian">
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