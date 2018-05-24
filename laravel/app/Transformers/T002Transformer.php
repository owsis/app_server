<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class T002Transformer extends TransformerAbstract
{
     public function transform(User $t002)
     {
          return [
          'id' => $t002->id,
          'branchcode' => $t002->branchcode,
          'code' => $t002->code,
          'email' => $t002->email,
          'api_token' => $t002->api_token,
          'name' => $t002->name,
          'address' => $t002->address,
          'phone' => $t002->phone,
          'ktp' => $t002->ktp,
          'npwp' => $t002->npwp,
          'reveral_code' => $t002->reveral_code 
          ];
     }
}
