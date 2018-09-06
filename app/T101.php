<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class T101 extends Model
{
    protected $table = 't101s';

    protected $fillable = [
        'branchcode',
        'booking_no',
        'order_id',
        'code_customer',
        'name_customer',
        'phone_customer',
        'code_unit',
        'type_unit',
        'block_unit',
        'price_unit',
        'order_id_key',
        'code_key',
        'type_payment',
        'dp',
        'kpr',
        'cash',
        'referral_from',
        'utj_id',
        'status',
    ];

    public function t002()
    {
        return $this->hasOne(T002::class);
    }
}
