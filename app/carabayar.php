<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carabayar extends Model
{
    protected $table = 't004s';
//    protected $primaryKey = 'booking_no';
    protected $filltable  = ['id', 'code_payment', 'name_payment'];
}
