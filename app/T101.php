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
        'code_customer',
        'name_customer',
        'phone_customer',
        'code_unit',
        'type_unit',
        'price_unit',
        'first_payment',
        'type_payment',
        'harga_trans',
        'dp',
        'kpr',
        'cash',
        'referral_from',
        'tiket',
        'total_tiket',
        'status',
        'status_fp'
    ];

    public function t002()
    {
        return $this->hasOne(T002::class);
    }
}
