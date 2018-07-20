<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T102_1 extends Model
{
    protected $table = 't102s_1';

    protected $fillable = [
        'order_id',
        'code_user',
        'name_user',
        'phone_user',
    ];
}
