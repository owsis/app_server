<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T101 extends Model
{
    protected $table = 't101s';

    protected $fillable = [
        'branchcode',
        'booking_no',
        'code_customer',
        'name_customer',
        'code_unit',
        'type_unit',
        'first_payment',
        'type_payment',
        'dp',
        'kpr',
        'cash',
        'reveral_code'
    ];

    public function t002()
    {
        return $this->hasOne(\App\User::class);
    }
}
