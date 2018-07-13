<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T102 extends Model
{
    protected $table = 't102s';

    protected $fillable = [
        'branchcode',
        'order_id',
        'jum_tiket',
        'total_tiket',
        'status_tiket',
        'code_user',
        'name_user',
        'phone_user',
    ];
}
