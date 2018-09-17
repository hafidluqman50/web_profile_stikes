<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LinkTerkaitModel as LinkTerkait;

class LinkTerkaitController extends Controller
{
    public function jurnal() {
    	$title = 'Link Jurnal | Admin';
    	$page = 'jurnal';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','jurnal')->get();
    	return view('Pengurus.Admin.page.link-terkait.jurnal.main',compact('title','page','data','link'));
    }

    public function tambahJurnal() {
        $title = 'Form Jurnal | Admin';
        $page = 'jurnal';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.jurnal.form-jurnal',compact('title','page','link'));
    }

    public function editJurnal($id) {
        $title = 'Form Jurnal | Admin';
        $page = 'jurnal';
        $link = 'active';
        $row = LinkTerkait::where('kategori','jurnal')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.jurnal.form-jurnal',compact('title','page','link','row'));
    }

    public function pendaftaran() {
    	$title = 'Link Pendaftaran | Admin';
    	$page = 'pendaftaran';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','pendaftaran')->get();
    	return view('Pengurus.Admin.page.link-terkait.pendaftaran.main',compact('title','page','link','data'));
    }

    public function tambahPendaftaran() {
        $title = 'Form Pendaftaran | Admin';
        $page = 'pendaftaran';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.pendaftaran.form-pendaftaran',compact('title','page','link'));
    }

    public function editPendaftaran($id) {
        $title = 'Form Pendaftaran | Admin';
        $page = 'pendaftaran';
        $link = 'active';
        $row = LinkTerkait::where('kategori','pendaftaran')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.pendaftaran.form-pendaftaran',compact('title','page','link','row'));
    }

    public function informasiPublik() {
    	$title = 'Link Informasi Publik | Admin';
    	$page = 'informasi-publik';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','informasi-publik')->get();
    	return view('Pengurus.Admin.page.link-terkait.informasi-publik.main',compact('title','page','link','data'));
    }

    public function tambahInformasiPublik() {
        $title = 'Form Informasi Publik | Admin';
        $page = 'informasi-publik';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.informasi-publik.form-informasi-publik',compact('title','page','link'));
    }

    public function editInformasiPublik($id) {
        $title = 'Form Informasi Publik | Admin';
        $page = 'informasi-publik';
        $link = 'active';
        $row = LinkTerkait::where('kategori','informasi-publik')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.informasi-publik.form-informasi-publik',compact('title','page','link','row'));
    }

    public function perencanaan() {
    	$title = 'Link Perencanaan | Admin';
    	$page = 'perencanaan';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','perencanaan')->get();
    	return view('Pengurus.Admin.page.link-terkait.perencanaan.main',compact('title','page','link','data'));
    }

    public function tambahPerencanaan() {
        $title = 'Form Perencanaan | Admin';
        $page = 'perencanaan';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.perencanaan.form-perencanaan',compact('title','page','link'));
    }

    public function editPerencanaan($id) {
        $title = 'Form Perencanaan | Admin';
        $page = 'perencanaan';
        $link = 'active';
        $row = LinkTerkait::where('kategori','perencanaan')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.perencanaan.form-perencanaan',compact('title','page','link','row'));
    }

    public function alumni() {
    	$title = 'Link Alumni | Admin';
    	$page = 'alumni';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','alumni')->get();
    	return view('Pengurus.Admin.page.link-terkait.alumni.main',compact('title','page','data','link'));
    }

    public function tambahAlumni() {
        $title = 'Form Alumni | Admin';
        $page = 'alumni';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.alumni.form-alumni',compact('title','page','link','data'));
    }

    public function editAlumni($id) {
        $title = 'Form Alumni | Admin';
        $page = 'alumni';
        $link = 'active';
        $row = LinkTerkait::where('kategori','alumni')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.alumni.form-alumni',compact('title','page','link','row'));
    }

    public function akademik() {
    	$title = 'Link Akademik | Admin';
    	$page = 'akademik';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','akademik')->get();
    	return view('Pengurus.Admin.page.link-terkait.akademik.main',compact('title','page','link','data'));
    }

    public function tambahAkademik() {
        $title = 'Form Akademik | Admin';
        $page = 'akademik';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.akademik.form-akademik',compact('title','page','link'));
    }

    public function editAkademik($id) {
        $title = 'Form Kepegawaian | Admin';
        $page = 'akademik';
        $link = 'active';
        $row = LinkTerkait::where('kategori','akademik')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.akademik.form-akademik',compact('title','page','link','row'));
    }

    public function kepegawaian() {
    	$title = 'Link Kepegawaian | Admin';
    	$page = 'kepegawaian';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','kepegawaian')->get();
    	return view('Pengurus.Admin.page.link-terkait.kepegawaian.main',compact('title','page','link','data'));
    }

    public function tambahKepegawaian() {
        $title = 'Form Kepegawaian | Admin';
        $page = 'kepegawaian';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.kepegawaian.form-kepegawaian',compact('title','page','link'));
    }

    public function editKepegawaian($id) {
        $title = 'Form Kepegawaian | Admin';
        $page = 'kepegawaian';
        $link = 'active';
        $row = LinkTerkait::where('kategori','kepegawaian')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.kepegawaian.form-kepegawaian',compact('title','page','link','row'));
    }

    public function lainnya() {
    	$title = 'Link Lainnya | Admin';
    	$page = 'lainnya';
    	$link = 'active';
        $data = LinkTerkait::where('kategori','lainnya')->get();
    	return view('Pengurus.Admin.page.link-terkait.lainnya.main',compact('title','page','link','data'));
    }

    public function tambahLainnya() {
        $title = 'Form Lainnya | Admin';
        $page = 'lainnya';
        $link = 'active';
        return view('Pengurus.Admin.page.link-terkait.lainnya.form-lainnya',compact('title','page','link'));
    }

    public function editLainnya($id) {
        $title = 'Form Lainnya | Admin';
        $page = 'lainnya';
        $link = 'active';
        $row = LinkTerkait::where('kategori','lainnya')->where('id_link_terkait',$id)->firstOrFail();
        return view('Pengurus.Admin.page.link-terkait.lainnya.form-lainnya',compact('title','page','link','row'));
    }

    public function delete($ktg,$id) {
        LinkTerkait::where('kategori',$ktg)->where('id_link_terkait',$id)->delete();
        return redirect('/admin/link-'.$ktg)->with('message','Berhasil Hapus Link Terkait');
    }

    public function save(Request $request) {
        $judul = $request->judul_link;
        $link = $request->link;
        $kategori = $request->kategori;
        $id_link = $request->id_link_terkait;
        $array = [
            'judul_link' => $judul,
            'link'       => $link,
            'kategori'   => $kategori,
        ];
        if ($id_link == '') {
            LinkTerkait::create($array);
            $message = 'Berhasil Input Link Terkait';
        } else {
            LinkTerkait::where('id_link_terkait',$id_link)->update($array);
            $message = 'Berhasil Update Link Terkait';
        }
        return redirect('/admin/link-'.$kategori)->with('message',$message);
    }
}
