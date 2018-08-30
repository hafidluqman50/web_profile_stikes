@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Dokumen</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h5 class="title">Form Dokumen</h5>
      		</div>
    			<form method="POST" action="{{url('/petugas/dokumen/save')}}" enctype="multipart/form-data">
    	      		<div class="card-body">
          				@csrf
          				<div class="form-group">
          					<label for="" class="form-label">Judul Dokumen</label>
          					<input type="text" class="form-control" name="judul_dokumen" value="{{isset($row)?$row->judul_dokumen:''}}" placeholder="Isi Judul Dokumen" required="required">
          				</div>
                  <div class="form-group">
                    <label for="" class="form-label">File Dokumen</label>
                    <input type="file" class="form-control" name="file_dokumen">
                  </div>
    	      		</div>
                <input type="hidden" name="id_dokumen" value="{{isset($row)?$row->id_dokumen:''}}">
    	      		<div class="card-footer">
    	      			<button type="submit" class="btn btn-primary">Simpan</button>
    	      		</div>
    			</form>
      	</div>
      </div>
    </section>
@endsection