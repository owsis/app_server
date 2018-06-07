<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T002_1 extends Model
{
    protected $table = 't002s_1';

    protected $fillable = [
        'branchcode',
        'refferal_code',
        'email',
        'name'
    ];
}
