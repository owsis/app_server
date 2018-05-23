<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T006 extends Model
{
    protected $table = 't006s';

    protected $fillable = [
        'branchcode',
        'name_payment',
        'note_payment'
    ];
}
