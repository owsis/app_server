<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T003_1 extends Model
{
    protected $table = 't003s_1';

    protected $fillable = [
        'status_unit',
        'code_customer',
        'name_customer'
    ];
}
