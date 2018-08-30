<?php

namespace App\Http\Controllers\Petugas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VideoModel as Video;
use Auth;

class VideoController extends Controller
{
    public function video() {
    	$title = 'Video | Petugas';
    	$page = 'video';
    	$data = Video::with('users')->get();
    	return view('Pengurus.Petugas.page.video.main',compact('title','page','data'));
    }

    public function tambahVideo() {
    	$title = 'Form Video | Petugas';
    	$page = 'video';
    	return view('Pengurus.Petugas.page.video.form-video',compact('title','page'));
    }

    public function editVideo($id) {
        $title = 'Form Video | Petugas';
        $page = 'video';
        $row = Video::where('id_video',$id)->firstOrFail();
        return view('Pengurus.Petugas.page.video.form-video',compact('title','page','row'));
    }

    public function delete($id) {
        Video::where('id_video',$id)->delete();
        return redirect('/admin/data-video')->with('message','Berhasil Menghapus Video');
    }

    public function save(Request $request) {
        $judul_video = $request->judul_video;
        $link        = $request->link_video;
        $isi_video   = $request->isi_video;
        $id          = $request->id_video;
        $array = [
            'tanggal_upload'   => date('Y-m-d'),
            'judul_video'      => $judul_video,
            'judul_slug_video' => str_slug($judul_video,'-'),
            'link_video'       => $link,
            'isi_video'        => $isi_video,
            'id_users'         => Auth::id()
        ];
        if ($id == '') {
            Video::create($array);
            $message = 'Berhasil Input Data';
        } else {
            Video::where('id_video',$id)->update($array);
            $message = 'Berhasil Update Data';
        }
        return redirect('/admin/data-video')->with('message',$message);
    }
}
