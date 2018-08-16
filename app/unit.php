<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table = 't003s';
//    protected $primaryKey = 'booking_no';
    protected $filltable  = ['name_unit', 'code_unit', 'block_unit', 'no_unit', 'lt_unit', 'lb_unit', 'status_unit'];
}
