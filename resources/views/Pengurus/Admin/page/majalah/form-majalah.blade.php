@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Majalah</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Form Majalah</h5>
          </div>
      <form method="POST" action="{{url('/admin/majalah/save')}}" enctype="multipart/form-data">
            <div class="card-body">
              @csrf
              <div class="form-group">
                <label for="" class="form-label">Judul Majalah</label>
                <input type="text" class="form-control" name="judul_majalah" value="{{isset($row)?$row->judul_majalah:''}}" placeholder="Isi Judul Majalah" required="required">
              </div>
              <div class="form-group">
                <label for="" class="form-label">File Majalah</label>
                <input type="file" name="file_majalah" class="form-control">
              </div>
            </div>
            <input type="hidden" name="id_majalah" value="{{isset($row)?$row->id_majalah:''}}">
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
      </form>
        </div>
      </div>
    </section>
@endsection