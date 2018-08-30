<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class KontenModel extends Model
{
    protected $table = 'konten';
    protected $primaryKey = 'id_konten';
    protected $guarded = [];

    public function getKonten($ktg,$limit = 0){
    	$db = self::with('users')->where('kategori',$ktg);
    	// dd($db->get());
    	if ($limit == 0) {
    		$return = $db->orderBy('tanggal_konten','desc')->get();
    	} else {
    		$return = $db->limit($limit)->orderBy('tanggal_konten','desc')->get();
    	}
    	return $return;
    }

    public function users() {
    	return $this->belongsTo('App\User','id_users');
    }
}
