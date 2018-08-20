<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T004 extends Model {
	protected $table = 't004s';

	protected $fillable = [
		'type_unit',
		'code_payment',
		'name_payment',
		'dp',
		'kpr',
		'disc',
	];
}
