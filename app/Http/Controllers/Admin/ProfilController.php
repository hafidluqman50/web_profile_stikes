<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProfilModel as Profil;

class ProfilController extends Controller
{
    public function tentang() {
    	$title = 'Tentang | Admin';
    	$data = Profil::where('menu','tentang')->get();
        $page = 'tentang';
        $active = 'active';
    	return view('Pengurus.Admin.page.profil.tentang.main',compact('title','data','page','active'));
    }

    public function tambahTentang() {
        $title = 'Form Tentang | Admin';
        $page = 'tentang';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.tentang.form-tentang',compact('title','page','active'));
    }

    public function editTentang($id) {
        $title = 'Form Tentang | Admin';
        $page = 'tentang';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','tentang')->firstOrFail();
        return view('Pengurus.Admin.page.profil.tentang.form-tentang',compact('title','row','page','active'));
    }


    public function informasiPublik() {
        $title = 'Informasi Publik | Admin';
        $page = 'informasi-publik';
        $active = 'active';
        $data = Profil::where('menu','informasi')->get();
        return view('Pengurus.Admin.page.profil.informasi-publik.main',compact('title','data','page','active'));
    }

    public function tambahInformasiPublik() {
        $title = 'Form Informasi Publik | Admin';
        $page = 'informasi-publik';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.informasi-publik.form-informasi-publik',compact('title','page','active'));
    }

    public function editInformasiPublik($id) {
        $title = 'Form Informasi Publik | Admin';
        $page = 'informasi-publik';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','informasi')->firstOrFail();
        return view('Pengurus.Admin.page.profil.informasi-publik.form-informasi-publik',compact('title','row','page','active'));
    }


    public function akademik() {
        $title = 'Akademik | Admin';
        $page = 'akademik';
        $active = 'active';
        $data = Profil::where('menu','akademik')->get();
        return view('Pengurus.Admin.page.profil.akademik.main',compact('title','data','page','active'));
    }

    public function tambahAkademik() {
        $title = 'Form Akademik | Admin';
        $page = 'akademik';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.akademik.form-akademik',compact('title','page','active'));
    }

    public function editAkademik($id) {
        $title = 'Form Akademik | Admin';
        $page = 'akademik';
        $active = 'active';
        $row = Profil::where('id_profil')->where('menu','akademik');
        return view('Pengurus.Admin.page.profil.akademik.form-akademik',compact('title','row','page','active'));
    }


    public function penelitian() {
        $title = 'Penelitian | Admin';
        $page = 'penelitian';
        $active = 'active';
        $data = Profil::where('menu','penelitian')->get();
        return view('Pengurus.Admin.page.profil.penelitian.main',compact('title','data','page','active'));
    }

    public function tambahPenelitian() {
        $title = 'Form Penelitian | Admin';
        $page = 'penelitian';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.penelitian.form-penelitian',compact('title','page','active'));
    }

    public function editPenelitian($id) {
        $title = 'Form Penelitian | Admin';
        $page = 'penelitian';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','penelitian')->firstOrFail();
        return view('Pengurus.Admin.page.profil.penelitian.form-penelitian',compact('title','row','page','active'));
    }


    public function kerjaSama() {
        $title = 'Kerja Sama | Admin';
        $page = 'kerja-sama';
        $active = 'active';
        $data = Profil::where('menu','kerja-sama')->get();
        return view('Pengurus.Admin.page.profil.kerja-sama.main',compact('title','data','page','active'));
    }

    public function tambahKerjaSama() {
        $title = 'Form Kerja Sama | Admin';
        $page = 'kerja-sama';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.kerja-sama.form-kerja-sama',compact('title','page','active'));
    }

    public function editKerjaSama($id) {
        $title = 'Form Kerja Sama | Admin';
        $page = 'kerja-sama';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','kerja-sama')->firstOrFail();
        return view('Pengurus.Admin.page.profil.kerja-sama.form-kerja-sama',compact('title','row','active'));
    }


    public function fakultas() {
        $title = 'Fakultas | Admin';
        $page = 'fakultas';
        $active = 'active';
        $data = Profil::where('menu','fakultas')->get();
        return view('Pengurus.Admin.page.profil.fakultas.main',compact('title','data','page','active'));
    }

    public function tambahFakultas() {
        $title = 'Form Fakultas | Admin';
        $page = 'fakultas';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.fakultas.form-fakultas',compact('title','page','active'));
    }

    public function editFakultas($id) {
        $title = 'Form Fakultas | Admin';
        $page = 'fakultas';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','fakultas')->firstOrFail();
        return view('Pengurus.Admin.page.profil.fakultas.form-fakultas',compact('title','row','page','active'));
    }


    public function mahasiswa() {
        $title = 'Mahasiswa Alumni | Admin';
        $page = 'mahasiswa-alumni';
        $active = 'active';
        $data = Profil::where('menu','mahasiswa-alumni');
        return view('Pengurus.Admin.page.profil.mahasiswa-alumni.main',compact('title','data','active','page'));
    }

    public function tambahMahasiswa() {
        $title = 'Form Mahasiswa Alumni | Admin';
        $page = 'mahasiswa-alumni';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.mahasiswa-alumni.form-mahasiswa-alumni',compact('title','page','active'));
    }

    public function editMahasiswa($id) {
        $title = 'Form Mahasiswa Alumni | Admin';
        $page = 'mahasiswa-alumni';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','mahasiswa-alumni')->firstOrFail();
        return view('Pengurus.Admin.page.profil.mahasiswa-alumni.form-mahasiswa-alumni',compact('title','row','page','active'));
    }


    public function lembaga() {
        $title = 'Lembaga | Admin';
        $page = 'lembaga';
        $active = 'active';
        $data = Profil::where('menu','lembaga')->get();
        return view('Pengurus.Admin.page.profil.lembaga.main',compact('title','data','page','active'));
    }

    public function tambahLembaga() {
        $title = 'Form Lembaga | Admin';
        $page = 'lembaga';
        $active = 'active';
        return view('Pengurus.Admin.page.profil.lembaga.form-lembaga',compact('title','page','active'));
    }

    public function editLembaga($id) {
        $title = 'Form Lembaga | Admin';
        $page = 'lembaga';
        $active = 'active';
        $row = Profil::where('id_profil',$id)->where('menu','lembaga')->firstOrFail();
        return view('Pengurus.Admin.page.profil.lembaga.form-lembaga',compact('title','row','page','active'));
    }

    public function delete($menu,$id) {
        Profil::where('menu',$menu)->where('id_profil',$id)->delete();
        return redirect('/admin/data-menu-'.$menu)->with('message','Berhasil Hapus');
    }

    public function save(Request $request) {
        $judul   = $request->judul_profil;
        $halaman = $request->halaman != '' ? $request->halaman : '-';
        $konten  = $request->konten;
        $menu    = $request->menu;
        $id      = $request->id_profil;
        $array = [
            'judul_profil' => $judul,
            'halaman'      => $halaman,
            'konten'       => $konten,
            'menu'         => $menu
        ];

        if ($id == '') {
            Profil::create($array);
            $message = 'Berhasil Input Data';
        } else {
            Profil::where('id_profil',$id)->update($array);
            $message = 'Berhasil Update Data';
        }
        return redirect('/admin/data-menu-tentang')->with('message',$message);
    }
}
