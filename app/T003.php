<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T003 extends Model
{
    protected $table = 't003s';

    protected $fillable = [
        'status_unit',
        'code_customer',
        'name_customer'
    ];
}
