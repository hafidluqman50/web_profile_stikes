@extends('Main.layout.layout-app')

@section('content')
<div class="site-main-container">
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">Dokumen</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12 post-list">
					<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
						<h4 class="cat-title">Dokumen</h4>
						<div class="single-latest-post">
							
						<table class="mg-top-15 table table-bordered table-hover" id="dokumen">
							<thead class="thead-dark">
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Tanggal Upload</th>
									<th scope="col">Judul Dokumen</th>
									<th scope="col">Input By</th>
									<th scope="col">#</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data as $key => $value)
								<tr>
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
							@endforeach
							</tbody>
						</table>
						</div>
					</div>
					<!-- End latest-post Area -->
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('js')
<script>
	$(function(){
		$('#dokumen').DataTable();
	});
</script>
@endsection