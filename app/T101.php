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
        'price_unit',
        'first_payment',
        'type_payment',
        'dp',
        'kpr',
        'cash',
        'referral_from',
        'status',
        'status_fp'
    ];

    public function t002()
    {
        return $this->hasOne(T002::class);
    }
}
