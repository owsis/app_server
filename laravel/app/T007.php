<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T007 extends Model
{
    protected $table = 't007s';

    protected $fillable = [
        'branchcode',
        'name',
        'disc'
    ];
}
