@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Menu Mahasiswa Alumni</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h5 class="title">Form Menu Mahasiswa Alumni</h5>
      		</div>
			     <form method="POST" action="{{url('/profil/save')}}">
	      		<div class="card-body">
      				@csrf
      				<div class="form-group">
      					<label for="" class="form-label">Judul</label>
      					<input type="text" class="form-control" name="judul_profil" value="{{isset($row)?$row->judul_profil:''}}" placeholder="Isi Judul" required="required">
      				</div>
              <div class="form-group">
                <label for="" class="form-label">Konten</label>
                <textarea name="konten" class="form-control" id="" cols="30" rows="10">{{isset($row)?$row->konten:''}}</textarea>
              </div>
	      		</div>{{-- 
            <select name="halaman" class="form-control" required="required">
              <option selected disabled>=== Pilih Halaman ===</option>
              <option value="kegiatan-mahasiswa" @if(isset($row)){{$row->halaman=='kegiatan-mahasiswa'?'selected':''}}@endif>Kegiatan Mahasiswa</option>
            </select> --}}
      			<input type="hidden" name="menu" value="mahasiswa-alumni">
            <input type="hidden" name="id_profil" value="{{isset($row)?$row->id_profil:''}}">
	      		<div class="card-footer">
	      			<button type="submit" class="btn btn-primary">Simpan</button>
	      		</div>
		    	</form>
      	</div>
      </div>
    </section>
@endsection