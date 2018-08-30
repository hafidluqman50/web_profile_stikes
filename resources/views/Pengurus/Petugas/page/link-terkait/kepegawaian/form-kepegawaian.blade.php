@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Link Akademik</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h5 class="title">Form Link Akademik</h5>
      		</div>
			     <form method="POST" action="{{url('/petugas/link/save')}}">
	      		<div class="card-body">
      				@csrf
              <div class="form-group">
                <label for="" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul_link" value="{{isset($row)?$row->judul_link:''}}" placeholder="Isi Judul" required="required">
              </div>
              <div class="form-group">
                <label for="" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" value="{{isset($row)?$row->link:''}}" placeholder="Isi Link" required="required">
              </div>
	      		</div>
      			<input type="hidden" name="kategori" value="kepegawaian">
            <input type="hidden" name="id_link_terkait" value="{{isset($row)?$row->id_link_terkait:''}}">
	      		<div class="card-footer">
	      			<button type="submit" class="btn btn-primary">Simpan</button>
	      		</div>
		    	</form>
      	</div>
      </div>
    </section>
@endsection