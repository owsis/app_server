<?php

namespace App\Transformers;

use App\T004;
use League\Fractal\TransformerAbstract;

class T004Transformer extends TransformerAbstract
{
     public function transform(T004 $t004)
     {
          return [
          'branchcode' => $t004->branchcode,
          'code_customer' => $t004->code_customer,
          'name' => $t004->name,
          'address' => $t004->address,
          'city_code' => $t004->city_code,
          'email' => $t004->email,
          'ktp' => $t004->ktp,
          'npwp' => $t004->npwp, 
          'phone' => $t004->phone,
          ];
     }
}
