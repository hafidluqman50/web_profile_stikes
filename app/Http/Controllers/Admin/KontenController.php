<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KontenModel as Konten;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;

class KontenController extends Controller
{
    public function berita() {
    	$title = 'Berita | Admin';
    	$page = 'berita';
    	$class = 'active';
    	$data = Konten::with('users')->where('kategori','berita')->get();
    	return view('Pengurus.Admin.page.konten.berita.main',compact('title','page','class','data'));
    }

    public function tambahBerita() {
        $title = 'Form Berita | Admin';
        $page = 'berita';
        $class = 'active';
        return view('Pengurus.Admin.page.konten.berita.form-berita',compact('title','page','class'));
    }

    public function editBerita($id) {
        $title = 'Form Agenda | Admin';
        $page  = 'berita';
        $class = 'active';
        $row = Konten::where('id_konten',$id)->where('kategori','berita')->firstOrFail();
        return view('Pengurus.Admin.page.konten.berita.form-berita',compact('title','page','class','row'));   
    }

    public function pengumuman() {
    	$title = 'Pengumuman | Admin';
    	$page = 'pengumuman';
    	$class = 'active';
    	$data = Konten::with('users')->where('kategori','pengumuman')->get();
    	return view('Pengurus.Admin.page.konten.pengumuman.main',compact('title','page','class','data'));
    }

    public function tambahPengumuman() {
        $title = 'Form Pengumuman | Admin';
        $page = 'pengumuman';
        $class = 'active';
        return view('Pengurus.Admin.page.konten.pengumuman.form-pengumuman',compact('title','page','class'));
    }

    public function editPengumuman($id) {
        $title = 'Form Pengumuman | Admin';
        $page  = 'pengumuman';
        $class = 'active';
        $row = Konten::where('id_konten',$id)->where('kategori','pengumuman')->firstOrFail();
        return view('Pengurus.Admin.page.konten.pengumuman.form-pengumuman',compact('title','page','class','row'));   
    }

    public function kegiatan() {
    	$title = 'Kegiatan | Admin';
    	$page = 'kegiatan';
    	$class = 'active';
    	$data = Konten::with('users')->where('kategori','kegiatan')->get();
    	return view('Pengurus.Admin.page.konten.kegiatan.main',compact('title','page','class','data'));
    }

    public function tambahKegiatan() {
        $title = 'Form Kegiatan | Admin';
        $page = 'kegiatan';
        $class = 'active';
        return view('Pengurus.Admin.page.konten.kegiatan.form-kegiatan',compact('title','page','class'));
    }

    public function editKegiatan($id) {
        $title = 'Form Kegiatan | Admin';
        $page  = 'kegiatan';
        $class = 'active';
        $row = Konten::where('id_konten',$id)->where('kategori','kegiatan')->firstOrFail();
        return view('Pengurus.Admin.page.konten.kegiatan.form-kegiatan',compact('title','page','class','row'));   
    }

    public function delete($ktg,$id) {
        $get = Konten::where('id_konten',$id)->where('kategori',$ktg);
        $first = $get->firstOrFail();
        if ($first->foto_konten != '-') {
            if(file_exists(public_path('frontend-assets/foto_'.$first->kategori.'/'.$first->foto_konten))){
                unlink(public_path('frontend-assets/foto_'.$first->kategori.'/'.$first->foto_konten));
            }
        }
        $get->delete();
        return redirect('/admin/data-'.$ktg)->with('message','Berhasil Hapus Konten');
    }

    public function save(Request $request) {
        $judul    = $request->judul_konten;
        $tanggal  = date('Y-m-d');
        $isi      = $request->isi_konten;
        $kategori = $request->kategori;
        $foto     = $request->foto_konten;
        // dd($kategori);
        if ($foto != '') {
            $img = Image::make($foto);
            $photo = uniqid($kategori.'_').'.jpg';
            $img->resize(750,439);
            $img->save('frontend-assets/foto_'.$kategori.'/'.$photo);
        }
        $id       = $request->id_konten;
        if ($id == '') {
            $array = [
                'judul_konten'      => $judul,
                'judul_slug_konten' => str_slug($judul,'-'),
                'tanggal_konten'    => $tanggal,
                'foto_konten'       => $photo,
                'isi_konten'        => $isi,
                'kategori'          => $kategori,
                'counter'           => 0,
                'id_users'          => Auth::id()
            ];
            Konten::create($array);
            $message = 'Berhasil Input Konten';
        } else {
            if ($foto != '') {
                $get = Konten::where('kategori',$kategori)->where('id_konten',$id)->firstOrFail()->foto_konten;
                if (file_exists(public_path('frontend-assets/foto_'.$kategori.'/'.$get))) {
                    unlink(public_path('frontend-assets/foto_'.$kategori.'/'.$get));
                }
                $array = [
                    'judul_konten'      => $judul,
                    'judul_slug_konten' => str_slug($judul,'-'),
                    'tanggal_konten'    => $tanggal,
                    'foto_konten'       => $photo,
                    'isi_konten'        => $isi,
                    'kategori'          => $kategori,
                    'id_users'          => Auth::id()
                ];
            }
            else {
                $array = [
                    'judul_konten'      => $judul,
                    'judul_slug_konten' => str_slug($judul,'-'),
                    'tanggal_konten'    => $tanggal,
                    'isi_konten'        => $isi,
                    'kategori'          => $kategori,
                    'id_users'          => Auth::id()
                ];
            }
            Konten::where('id_konten',$id)->update($array);
            $message = 'Berhasil Update Konten';
        }
        return redirect('/admin/data-'.$kategori)->with('message',$message);
    }
}
