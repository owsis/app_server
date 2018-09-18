<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\T101;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 't002s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'email', 
        'password',
        'api_token',
        'name',
        'address',
        'phone',
        'ktp',
        'npwp',
        'image_ktp',
        'image_fp',
        'referral_code',
        'referral_from',
        'tiket',
        'saldo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function t101()
    {
        return $this->belongsTo(T101::class);
    }
}
