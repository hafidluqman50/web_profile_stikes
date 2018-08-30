<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MajalahModel extends Model
{
    protected $table = 'majalah';
    protected $primaryKey = 'id_majalah';
    protected $guarded = [];

    public function users() {
    	return $this->belongsTo('App\User','id_users');
    }
}
