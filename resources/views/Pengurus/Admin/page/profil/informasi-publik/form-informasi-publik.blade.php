@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Menu Informasi Publik</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h5 class="title">Form Menu Informasi Publik</h5>
      		</div>
			     <form method="POST" action="{{url('/admin/profil/save')}}">
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
              <div class="form-group">
                <label for="" class="form-label">Halaman</label>
                <select name="halaman" id="" class="form-control" required>
                  <option selected disabled>=== Pilih Halaman ===</option>
                  <option value="tanggal-penting" @if(isset($row)){{$row->halaman=='tanggal-penting'?'selected':''}}@endif>Tanggal Penting</option>
                  <option value="penelitian" @if(isset($row)){{$row->halaman=='penelitian'?'selected':''}}@endif>Penelitian</option>
                  <option value="foto-kegiatan" @if(isset($row)){{$row->halaman=='foto-kegiatan'?'selected':''}}@endif>Foto Kegiatan</option>
                  <option value="testimoni" @if(isset($row)){{$row->halaman=='testimoni'?'selected':''}}@endif>Testimoni</option>
                  <option value="beasiswa" @if(isset($row)){{$row->halaman=='beasiswa'?'selected':''}}@endif>Beasiswa</option>
                  <option value="statistik" @if(isset($row)){{$row->halaman=='statistik'?'selected':''}}@endif>Statistik</option>
                  <option value="seminar-dan-pelatihan" @if(isset($row)){{$row->halaman=='seminar-dan-pelatihan'?'selected':''}}@endif>Seminar Dan Pelatihan</option>
                  <option value="alur-pendaftaran" @if(isset($row)){{$row->halaman=='alur-pendaftaran'?'selected':''}}@endif>Alur Pendaftaran</option>
                  <option value="facebook" @if(isset($row)){{$row->halaman=='facebook'?'selected':''}}@endif>Medsos > Facebook</option>
                  <option value="twitter" @if (isset($row)){{$row->halaman=='twitter'?'selected':''}}@endif>Medsos > Twitter</option>
                </select>
              </div>
	      		</div>
      			<input type="hidden" name="menu" value="informasi">
            <input type="hidden" name="id_profil" value="{{isset($row)?$row->id_profil:''}}">
	      		<div class="card-footer">
	      			<button type="submit" class="btn btn-primary">Simpan</button>
	      		</div>
		    	</form>
      	</div>
      </div>
    </section>
@endsection