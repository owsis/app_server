<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T102 extends Model {
    protected $table = 't102s';

    protected $fillable = [
        'order_id',
        'type_unit',
        'nominal',
        'status_utj',
        'code_user',
        'name_user',
    ];
}
