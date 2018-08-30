@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Konten Pengumuman</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Form Konten Pengumuman</h5>
          </div>
      <form method="POST" action="{{url('/admin/konten/save')}}" enctype="multipart/form-data">
            <div class="card-body">
              @csrf
              <div class="form-group">
                <label for="" class="form-label">Judul Konten</label>
                <input type="text" class="form-control" name="judul_konten" value="{{isset($row)?$row->judul_konten:''}}" placeholder="Isi Judul Konten" required="required">
              </div>
              <div class="form-group">
                <label for="" class="form-label">Isi Konten</label>
                <textarea name="isi_konten" class="form-control">{{isset($row)?$row->isi_konten:''}}</textarea>
              </div>
              <div class="form-group">
                <label for="" class="form-label">Foto Konten</label>
                <input type="file" name="foto_konten" class="form-control">
              </div>
            </div>
            <input type="hidden" name="kategori" value="kegiatan">
            <input type="hidden" name="id_konten" value="{{isset($row)?$row->id_konten:''}}">
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
      </form>
        </div>
      </div>
    </section>
@endsection