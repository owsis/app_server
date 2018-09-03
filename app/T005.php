<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T005 extends Model {
    protected $table = 't005s';

    protected $fillable = [
        'code_key',
        'name_key',
        'nom_key'
    ];
}
