@extends('Pengurus.layout.layout-app')

@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Konten Agenda</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h5 class="title">Data Konten Agenda</h5>
      		</div>
      		<div class="card-body">
            <a href="{{url('/petugas/data-agenda/tambah')}}">
              <button class="btn btn-primary">
                Tambah Data
              </button>
            </a>
            <br>
            <br>
		      	<table class="table table-bordered">
		      		<thead>
		      			<tr>
		      				<th scope="col">No.</th>
		      				<th scope="col">Tanggal Upload</th>
		      				<th scope="col">Judul Konten</th>
		      				<th scope="col">#</th>
		      			</tr>
		      		</thead>
		      		<tbody>

		      		</tbody>
		      	</table>	
      		</div>
      	</div>
      </div>
    </section>
@endsection