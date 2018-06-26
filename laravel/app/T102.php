<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T102 extends Model
{
    protected $table = 't102s';

    protected $fillable = [
        'branchcode',
        'order_id',
        'jum_nup',
        'total_nup',
        'code_user',
        'name_user',
        'phone_user',
    ];
}
