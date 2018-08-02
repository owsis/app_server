<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T102 extends Model
{
    protected $table = 't102s';

    protected $fillable = [
        'order_id',
        'nominal',
        'status_saldo',
        'code_user',
        'name_user',
        'phone_user',
    ];
}
