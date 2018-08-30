<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MajalahModel as Majalah;
use Auth;

class MajalahController extends Controller
{
    public function majalah() {
    	$title = 'Majalah | Admin';
    	$page = 'majalah';
    	$data = Majalah::with('users')->get();
    	return view('Pengurus.Admin.page.majalah.main',compact('title','page','data'));
    }

    public function tambahMajalah() {
    	$title = 'Form Majalah | Admin';
    	$page = 'majalah';
    	return view('Pengurus.Admin.page.majalah.form-majalah',compact('title','page'));
    }

    public function editMajalah($id) {
    	$title = 'Form Majalah | Admin';
    	$page = 'majalah';
    	$row = Majalah::where('id_majalah',$id)->firstOrFail();
    	return view('Pengurus.Admin.page.majalah.form-majalah',compact('title','page','row'));
    }

    public function delete($id) {
    	$get = Majalah::where('id_majalah',$id);
    	$first = $get->firstOrFail();
    	$filePath = public_path('/majalah/'.$first->file_majalah);
    	$fotoPath = public_path('/majalah/'.$first->foto_majalah);
    	if (file_exists($filePath) && file_exists($fotoPath)) {
    		unlink($filePath);
    		unlink($fotoPath);
    	}
    	$get->delete();
    	return redirect('/admin/data-majalah')->with('message','Berhasil Hapus Majalah');
    }

    public function save(Request $request) {
		$judul    = $request->judul_majalah;
		$tanggal  = date('Y-m-d');
		$file     = $request->file_majalah;
		$foto_majalah = uniqid('majalah_').'.jpg';
		if ($file != '') {
			$fileName = uniqid('majalah_').$file->getClientOriginalName();
			$file->move(public_path('/majalah/'),$fileName);
			pdfThumb(public_path('/majalah/'.$fileName),$foto_majalah);
		}
		$id       = $request->id_majalah;
		if ($id == '') {
			$array = [
				'judul_majalah'      => $judul,
				'judul_slug_majalah' => str_slug($judul,'-'),
				'tanggal_majalah'    => $tanggal,
				'foto_majalah'       => $foto_majalah,
				'file_majalah'       => $fileName,
				'id_users'           => Auth::id()
			];
			Majalah::create($array);
			$message = 'Berhasil Input Majalah';
		} else {
			if ($file == '') {
				$array = [
					'judul_majalah'      => $judul,
					'judul_slug_majalah' => str_slug($judul,'-'),
					'tanggal_majalah'    => $tanggal,
					'id_users'           => Auth::id()
				];
			} else {
		    	$get = Majalah::where('id_majalah',$id);
		    	$first = $get->firstOrFail();
		    	$filePath = public_path('/majalah/'.$first->file_majalah);
		    	$fotoPath = public_path('/majalah/'.$first->foto_majalah);
		    	if (file_exists($filePath) && file_exists($fotoPath)) {
		    		unlink($filePath);
		    		unlink($fotoPath);
		    	}
				$array = [
					'judul_majalah'      => $judul,
					'judul_slug_majalah' => str_slug($judul,'-'),
					'tanggal_majalah'    => $tanggal,
					'foto_majalah'       => $foto_majalah,
					'file_majalah'       => $fileName,
					'id_users'           => Auth::id()
				];
			}
			Majalah::where('id_majalah',$id)->update($array);
			$message = 'Berhasil Update Majalah';
		}
		return redirect('/admin/data-majalah')->with('message',$message);
    }
}
