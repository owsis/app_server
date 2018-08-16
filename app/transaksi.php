<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 't101s';
//    protected $primaryKey = 'booking_no';
    protected $filltable  = ['booking_no','name_customer', 'phone_customer', 'code_unit', 'type_payment', 'price_unit', 'dp', 'kpr', 'referral_from'];
}
