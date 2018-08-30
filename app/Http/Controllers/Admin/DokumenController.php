<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DokumenModel as Dokumen;
use Auth;

class DokumenController extends Controller
{
    public function dokumen() {
    	$title = 'Dokumen | Admin';
    	$page = 'dokumen-peraturan';
    	$data = Dokumen::with('users')->get();
    	return view('Pengurus.Admin.page.dokumen-peraturan.main',compact('title','page','data'));
    }

    public function tambahDokumen() {
    	$title = 'Form Dokumen | Admin';
    	$page = 'dokumen-peraturan';
    	return view('Pengurus.Admin.page.dokumen-peraturan.form-dokumen-peraturan',compact('title','page'));
    }

    public function editDokumen($id) {
    	$title = 'Form Dokumen | Admin';
    	$page = 'dokumen-peraturan';
    	$row = Dokumen::where('id_dokumen',$id)->firstOrFail();
    	return view('Pengurus.Admin.page.dokumen-peraturan.form-dokumen-peraturan',compact('title','page','row'));
    }

    public function delete($id) {
        $get = Dokumen::where('id_dokumen',$id);
        $file = $get->firstOrFail()->nama_file;
        if (file_exists(public_path('/dokumen/'.$file))) {
            unlink(public_path('/dokumen/'.$file));
        }
        $get->delete();
        return redirect('/admin/dokumen-peraturan')->with('message','Berhasil Hapus Dokumen');
    }

    public function save(Request $request) {
        $judul = $request->judul_dokumen;
        $file = $request->file_dokumen;
        $tanggal = date('Y-m-d');
        $id = $request->id_dokumen;
        if ($file !='') {
            $fileName = uniqid('dokumen_').$file->getClientOriginalName();
            $file->move(public_path('/dokumen'),$fileName);
        }
        if ($id == '') {
            $array = [
                'tanggal_upload' => $tanggal,
                'judul_dokumen'  => $judul,
                'nama_file'      => $fileName,
                'id_users'       => Auth::id()
            ];
            Dokumen::create($array);
            $message = 'Berhasil Input Dokumen';
        } else {
            if ($file == '') {  
                $array=[
                    'tanggal_upload' => $tanggal,
                    'judul_dokumen'  => $judul,
                    'id_users'       => Auth::id()
                ];
            } else {
                $array=[
                    'tanggal_upload' => $tanggal,
                    'judul_dokumen'  => $judul,
                    'nama_file'      => $fileName,
                    'id_users'       => Auth::id()
                ];
            }
            Dokumen::where('id_dokumen',$id)->update($array);
            $message = 'Berhasil Update Dokumen';
        }
        return redirect('/admin/dokumen-peraturan')->with('message',$message);
    }
}
