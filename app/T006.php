<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T006 extends Model
{
    protected $table = 't006s';

    protected $fillable = [
        'type_unit',
        'code_unit',
        'code_payment',
        'price'
    ];
}
