<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T004 extends Model
{
    protected $table = 't004s';

    protected $fillable = [
        'branchcode',
        'code_customer',
        'name',
        'address',
        'city_code',
        'email',
        'ktp',
        'npwp',
        'phone'
    ];
}
