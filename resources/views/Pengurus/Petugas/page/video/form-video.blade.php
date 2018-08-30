@extends('Pengurus.layout.layout-app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Video</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Form Video</h5>
          </div>
          <form method="POST" action="{{url('/petugas/video/save')}}">
                <div class="card-body">
                  @csrf
                  <div class="form-group">
                    <label for="" class="form-label">Judul Video</label>
                    <input type="text" class="form-control" name="judul_video" value="{{isset($row)?$row->judul_video:''}}" placeholder="Isi Judul Konten" required="required">
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">Link Video</label>
                    <input type="text" name="link_video" class="form-control" value="{{isset($row)?$row->link_video:''}}" placeholder="Isi Link Video" required="required">
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">Isi Video</label>
                    <textarea name="isi_video" class="form-control">{{isset($row)?$row->isi_video:''}}</textarea>
                  </div>
                </div>
                <input type="hidden" name="id_video" value="{{isset($row)?$row->id_video:''}}">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
          </form>
        </div>
      </div>
    </section>
@endsection