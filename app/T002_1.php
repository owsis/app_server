<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T002_1 extends Model
{
    protected $table = 't002s_1';

    protected $fillable = [
        'referral_code',
        'email',
        'name'
    ];
}
