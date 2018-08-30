<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProfilModel as Profil;
use App\Models\VideoModel as Video;
use App\Models\KontenModel as Konten;
use App\Models\LinkTerkaitModel as LinkTerkait;
use App\Models\DokumenModel as Dokumen;
use App\Models\MajalahModel as Majalah;
use App\Models\VisitorModel as Visitor;

class HomeController extends Controller
{
    public function index() {
        $title   = 'Beranda';
        $video   = Video::with('users')->limit(4)->orderBy('tanggal_upload','desc')->get();
        $konten  = new Konten;
        $link    = new LinkTerkait;
        $dokumen = Dokumen::with('users')->limit(4)->orderBy('tanggal_upload','desc')->get();
        $majalah = Majalah::with('users')->limit(4)->orderBy('tanggal_majalah','desc')->get();
    	return view('Main.page.home',compact('title','video','konten','link','dokumen','majalah'));
    }

    public function tentang($url) {
        $data = Profil::where('halaman',$url)->where('menu','tentang')->firstOrFail();
    	$title = $data->judul_profil;
    	return view('Main.page.tentang',compact('title','data'));
    }

    // public function visiMisi($url) {
    //     $data = Profil::where('halaman',$url)->where('menu','tentang')->firstOrFail();
    //     $title = $data->judul_profil;
    //     return view('Main.page.visi-dan-misi',compact('title','data'));
    // }

    public function pendaftaran($url) {
        $data = Profil::where('halaman',$url)->where('menu','pendaftaran')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.pendaftaran',compact('title','data'));
    }

    public function informasi($url) {
        $data = Profil::where('halaman',$url)->where('menu','informasi')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.informasi-publik',compact('title','data'));
    }

    public function akademik($url) {
        $data = Profil::where('halaman',$url)->where('menu','akademik')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.akademik',compact('title','data'));
    }

    public function penelitian($url) {
        $data = Profil::where('halaman',$url)->where('menu','penelitian')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.penelitian',compact('title','data'));
    }

    public function kerjaSama($url) {
        $data = Profil::where('halaman',$url)->where('menu','kerja-sama')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.kerja-sama',compact('title','data'));
    }

    public function fakultas($url) {
        $data = Profil::where('halaman',$url)->where('menu','fakultas')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.fakultas',compact('title','data'));
    }

    public function lembaga($url) {
        $data = Profil::where('halaman',$url)->where('menu','lembaga')->firstOrFail();
        $title = $data->judul_profil;
        return view('Main.page.lembaga',compact('title','data'));
    }

    public function kegiatan() {
    	$title = 'Kegiatan';
        $data = Konten::with('users')->where('kategori','kegiatan')->orderBy('tanggal_konten','desc')->orderBy('tanggal_konten','desc')->paginate(10);
        $more = Konten::with('users')->where('kategori','kegiatan')->limit(4)->orderBy('counter','desc')->get();
    	return view('Main.page.kegiatan',compact('title','data','more'));
    }

    public function video() {
        $title = 'Video';
        $data = Video::orderBy('tanggal_upload','desc')->paginate(10);
        return view('Main.page.video',compact('title','data'));
    }

    public function berita() {
        $title = 'Berita';
        $data = Konten::with('users')->where('kategori','berita')->orderBy('tanggal_konten','desc')->paginate(10);
        $more = Konten::with('users')->where('kategori','berita')->limit(4)->orderBy('counter','desc')->get();
        return view('Main.page.berita',compact('title','data','more'));
    }

    public function pengumuman() {
        $title = 'Pengumuman';
        $data = Konten::with('users')->where('kategori','pengumuman')->orderBy('tanggal_konten','desc')->paginate(10);
        $more = Konten::with('users')->where('kategori','pengumuman')->limit(4)->orderBy('counter','desc')->get();
        return view('Main.page.pengumuman',compact('title','data','more'));
    }

    public function downloadDokumen($file) {
        downloadDocs($file);
    }

    public function cariKonten(Request $request) {
        $s        = $request->cari;
        $kategori = $request->kategori;
        $title = ucwords($kategori);
        $data = Konten::with('users')->where('kategori',$kategori)->where('judul_konten','like','%'.$s.'%')->orderBy('tanggal_konten','desc')->paginate(10);
        $more = Konten::with('users')->where('kategori',$kategori)->limit(4)->orderBy('counter','desc')->get();
        return view('Main.page.'.$kategori,compact('title','data','more'));
    }

    public function kegiatanDetail($slug) {
        $konten = Konten::with('users')->where('kategori','kegiatan')->where('judul_slug_konten',$slug);
        $row = $konten->firstOrFail();
        $get = Visitor::where('id_konten',$row->id_konten)->where('ip_address',$_SERVER['REMOTE_ADDR']);
        if ($get->count() == 0) {
            Visitor::create(['id_konten'=>$row->id_konten,'ip_address'=>$_SERVER['REMOTE_ADDR']]);
            $konten->update(['counter'=>$get->count()]);
        }
        $title = $row->judul_konten;
        $more = Konten::with('users')->where('kategori','kegiatan')->limit(4)->orderBy('counter','desc')->get();
        return view('Main.page.kegiatan-detail',compact('title','row','more'));
    }

    public function beritaDetail($slug) {
        $konten = Konten::with('users')->where('kategori','berita')->where('judul_slug_konten',$slug);
        $row = $konten->firstOrFail();
        $get = Visitor::where('id_konten',$row->id_konten)->where('ip_address',$_SERVER['REMOTE_ADDR']);
        if ($get->count() == 0) {
            Visitor::create(['id_konten'=>$row->id_konten,'ip_address'=>$_SERVER['REMOTE_ADDR']]);
            $konten->update(['counter'=>$get->count()]);
        }
        $title = $row->judul_konten;
        $more = Konten::with('users')->where('kategori','berita')->limit(4)->orderBy('counter','desc')->get();
        return view('Main.page.berita-detail',compact('title','row','more'));
    }

    public function pengumumanDetail($slug) {
        $konten = Konten::with('users')->where('kategori','pengumuman')->where('judul_slug_konten',$slug);
        $row = $konten->firstOrFail();
        $get = Visitor::where('id_konten',$row->id_konten)->where('ip_address',$_SERVER['REMOTE_ADDR']);
        if ($get->count() == 0) {
            Visitor::create(['id_konten'=>$row->id_konten,'ip_address'=>$_SERVER['REMOTE_ADDR']]);
            $konten->update(['counter'=>$get->count()]);
        }
        $title = $row->judul_konten;
        $more = Konten::with('users')->where('kategori','pengumuman')->limit(4)->orderBy('counter','desc')->get();
        return view('Main.page.pengumuman-detail',compact('title','row','more'));
    }

    public function videoDetail($slug) {
        $row = Video::with('users')->where('judul_slug_video',$slug)->firstOrFail();
        $title = $row->judul_video;
        return view('Main.page.video-detail',compact('title','row'));
    }

    public function cariVideo(Request $request) {
        $s     = $request->cari;
        $title = 'Video';
        $data  = Video::with('users')->where('judul_video','like','%'.$s.'%')->orderBy('tanggal_upload','desc')->paginate(10);
        return view('Main.page.video',compact('title','data'));
    }

    public function majalah() {
        $title = 'Majalah';
        $data = Majalah::orderBy('tanggal_majalah','desc')->paginate(40);
        return view('Main.page.majalah',compact('title','data'));
    }

    public function cariMajalah(Request $request) {
        $s     = $request->cari;
        $title = 'Majalah';
        $data  = Majalah::with('users')->where('judul_majalah','like','%'.$s.'%')->orderBy('tanggal_majalah','desc')->paginate(10);
        return view('Main.page.video',compact('title','data'));
    }

    public function dokumen() {
        $title = 'Dokumen';
        $data = Dokumen::with('users')->get();
        return view('Main.page.dokumen',compact('title','data'));
    }
}
