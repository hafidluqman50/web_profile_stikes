<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id_video';
    protected $guarded = [];

    public function users() {
    	return $this->belongsTo('App\User','id_users');
    }
}
