<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class harga extends Model
{
    protected $table = 't006s';
    protected $filltable  = ['type_unit', 'code_unit', 'code_payment', 'dp', 'kpr', 'disc','price'];
}
