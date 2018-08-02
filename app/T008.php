<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T008 extends Model
{
    protected $table = 't008s';

    protected $fillable = [
        'branchcode',
        'name',
        'type',
        'category',
        'img1',
        'img2',
        'img3',
    ];
}
