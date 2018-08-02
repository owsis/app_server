<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\T010;

class T009 extends Model
{
    protected $table = 't009s';

    public function clusters()
    {
        return $this->hasMany(T010::class);
    }
}
