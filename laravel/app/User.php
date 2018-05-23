<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'branchcode',
        'code',
        'email', 
        'password',
        'api_token',
        'name',
        'address',
        'phone',
        'ktp',
        'npwp',
        'reveral_code'
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
        return $this->belongsTo(\App\T101::class);
    }
}
