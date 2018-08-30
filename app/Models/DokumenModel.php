<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenModel extends Model
{
    protected $table = 'dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $guarded = [];

    public function users() {
    	return $this->belongsTo('App\User','id_users');
    }
}
