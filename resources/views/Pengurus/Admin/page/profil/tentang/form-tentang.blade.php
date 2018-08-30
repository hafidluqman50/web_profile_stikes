@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Menu Tentang</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h5 class="title">Form Menu Tentang</h5>
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
                <label for="" class="form-label">Pilih Halaman</label>
                <select name="halaman" class="form-control" id="" required="required">
                  <option selected disabled>=== Pilih Halaman ===</option>
                  <option value="sambutan-ketua" @if(isset($row)){{$row->halaman=='sambutan-ketua'?'selected':''}}@endif>Sambutan Ketua</option>
                  <option value="profile-ketua-dan-wakil" @if(isset($row)){{$row->halaman=='profile-ketua-dan-wakil'?'selected':''}}@endif>Profile Ketua Dan Wakil</option>
                  <option value="senat" @if(isset($row)){{$row->halaman=='senat'?'selected':''}}@endif>Senat</option>
                  <option value="stikes" @if(isset($row)){{$row->halaman=='stikes'?'selected':''}}@endif>Visi Dan Misi > Visi Dan Misi STIKES</option>
                  <option value="d3-keperawatan" @if(isset($row)){{$row->halaman=='d3-keperawatan'?'selected':''}}@endif>Visi Dan Misi > Visi Dan Misi D3 Keperawatan</option>
                  <option value="s1-farmasi" @if(isset($row)){{$row->halaman=='s1-farmasi'?'selected':''}}@endif>Visi Dan Misi > Visi Dan Misi S1 Farmasi</option>
                  <option value="struktur-organisasi" @if(isset($row)){{$row->halaman=='struktur-organisasi'?'selected':''}}@endif>Struktur Organisasi</option>
                  <option value="arti-logo" @if(isset($row)){{$row->halaman=='arti-logo'?'selected':''}}@endif>Arti Logo</option>
                  <option value="sejarah" @if(isset($row)){{$row->halaman=='sejarah'?'selected':''}}@endif>Sejarah</option>
                  <option value="daftar-nama-dosen" @if(isset($row)){{$row->halaman=='daftar-nama-dosen'?'selected':''}}@endif>Daftar Nama Dosen</option>
                </select>
              </div>
	      		</div>
      			<input type="hidden" name="menu" value="tentang">
            <input type="hidden" name="id_profil" value="{{isset($row)?$row->id_profil:''}}">
	      		<div class="card-footer">
	      			<button type="submit" class="btn btn-primary">Simpan</button>
	      		</div>
		    	</form>
      	</div>
      </div>
    </section>
@endsection