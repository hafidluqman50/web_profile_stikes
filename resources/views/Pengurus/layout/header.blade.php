@php
$level = Auth::user()->level==1?'admin':(Auth::user()->level==0?'petugas':'');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ $title }}</title>

  <link rel="shortcut icon" href="{{asset('frontend-assets/logo.jpg')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend-assets/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend-assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/datatables/dataTables.bootstrap4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="true">
          <i class="nav-icon fa fa-user"></i>&nbsp;&nbsp;&nbsp;{{ Auth::user()->nama }}
          <i class="nav-icon fa fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ url('/'.$level.'/ubah-profile') }}" class="dropdown-item">
            <span class="fa fa-cogs"></span>
            Ubah Profil
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ url('/logout') }}" class="dropdown-item">
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="{{asset('backend-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Stikes Dirgahayu</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('/'.$level.'/dashboard')}}" class="nav-link @if(isset($page)){{$page=='dashboard'?'active':''}}@endif">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(Auth::user()->level==1)
          <li class="nav-item has-treeview {{isset($active)?'menu-open':''}}">
            <a href="#" class="nav-link {{isset($active)?$active:''}}">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Profil
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-tentang') }}" class="nav-link @if(isset($page)){{$page=='tentang'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Tentang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-informasi') }}" class="nav-link @if(isset($page)){{$page=='informasi-publik'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Informasi Publik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/data-menu-pendaftaran')}}" class="nav-link" @if (isset($page)){{$page=='pendaftaran'?'active':''}}@endif>
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Pendaftaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-akademik') }}" class="nav-link @if(isset($page)){{$page=='akademik'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Akademik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-penelitian') }}" class="nav-link @if(isset($page)){{$page=='penelitian'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Penelitian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-kerja-sama') }}" class="nav-link @if(isset($page)){{$page=='kerja-sama'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kerja Sama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-prodi') }}" class="nav-link @if(isset($page)){{$page=='prodi'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-mahasiswa-alumni') }}" class="nav-link @if(isset($page)){{$page=='mahasiswa-alumni'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Mahasiswa Dan Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/data-menu-lembaga') }}" class="nav-link @if(isset($page)){{$page=='lembaga'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lembaga</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{ url('/'.$level.'/dokumen-peraturan') }}" class="nav-link @if(isset($page)){{$page=='dokumen-peraturan'?'active':''}}@endif">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Dokumen Dan Peraturan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{isset($class)?'menu-open':''}}">
            <a href="#" class="nav-link {{isset($class)?$class:''}}">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Konten
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/data-berita') }}" class="nav-link @if(isset($page)){{$page=='berita'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>
                  Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/data-kegiatan') }}" class="nav-link @if(isset($page)){{$page=='kegiatan'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>
                    Kegiatan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/data-pengumuman') }}" class="nav-link @if(isset($page)){{$page=='pengumuman'?'active':''}}@endif">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>
                  Pengumuman
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/'.$level.'/data-video') }}" class="nav-link @if(isset($page)){{$page=='video'?'active':''}}@endif">
              <i class="nav-icon fa fa-camera"></i>
              <p>
                Video
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/'.$level.'/data-majalah')}}" class="nav-link @if(isset($page)){{$page=='majalah'?'active':''}}@endif">
              <i class="nav-icon fa fa-paperclip"></i>
              <p>
                Majalah
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{isset($link)?'menu-open':''}}">
            <a href="#" class="nav-link {{isset($link)?$link:''}}">
              <i class="nav-icon fa fa-link"></i>
              <p>
                Link Terkait
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-jurnal') }}" class="nav-link @if(isset($page)){{$page=='jurnal'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Jurnal
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-pendaftaran') }}" class="nav-link @if(isset($page)){{$page=='pendaftaran'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Pendaftaran
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-informasi-publik') }}" class="nav-link @if(isset($page)){{$page=='informasi-publik'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Informasi Publik
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-alumni') }}" class="nav-link @if(isset($page)){{$page=='alumni'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Alumni
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-perencanaan') }}" class="nav-link @if(isset($page)){{$page=='perencanaan'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Perencanaan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-akademik') }}" class="nav-link @if(isset($page)){{$page=='akademik'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Akademik
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-kepegawaian') }}" class="nav-link @if(isset($page)){{$page=='kepegawaian'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Kepegawaian
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/'.$level.'/link-lainnya') }}" class="nav-link @if(isset($page)){{$page=='lainnya'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Lainnya
                  </p>
                </a>
              </li>
            </ul>
          </li>
          @if(Auth::user()->level==1)
          <li class="nav-item has-treeview {{isset($info)?'menu-open':''}}">
            <a href="#" class="nav-link {{isset($info)?$info:''}}">
              <i class="nav-icon fa fa-info"></i>
              <p>
                Info Footer
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/info-footer/alamat') }}" class="nav-link @if(isset($page)){{$page=='info-alamat'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Info Alamat
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/info-footer/tautan') }}" class="nav-link @if(isset($page)){{$page=='info-tautan'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Info Tautan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/info-footer/sosmed') }}" class="nav-link @if(isset($page)){{$page=='info-sosmed'?'active':''}}@endif">
                  <i class="nav-icon fa fa-circle-o"></i>
                  <p>
                    Info Sosmed
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/users') }}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">