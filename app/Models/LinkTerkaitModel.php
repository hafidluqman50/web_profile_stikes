<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkTerkaitModel extends Model
{
    protected $table = 'link_terkait';
    protected $primaryKey = 'id_link_terkait';
    protected $guarded = [];

    public function getData($ktg) {
    	$get = self::where('kategori',$ktg)->get();
    	return $get;
    }
}
