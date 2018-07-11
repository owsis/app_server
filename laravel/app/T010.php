<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\T009;

class T010 extends Model
{
    protected $table = 't010s';

    public function developer()
    {
        return $this->belongsTo(T009::class);
    }
}
