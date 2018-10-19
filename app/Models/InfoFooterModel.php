<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoFooterModel extends Model
{
	protected $table      = 'info_footer';
	protected $primaryKey = 'id_info_footer';
	protected $guarded    = [];
	public $timestamps    = false;
}
