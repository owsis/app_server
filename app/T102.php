<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T102 extends Model {
    protected $table = 't102s';

    protected $fillable = [
        'order_id',
        'code_key',
        'nominal',
        'code_user',
        'name_user',
        'status_utj',
        'status_use',
    ];
}
