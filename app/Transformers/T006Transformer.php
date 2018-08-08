<?php

namespace App\Transformers;

use App\T006;
use League\Fractal\TransformerAbstract;

class T006Transformer extends TransformerAbstract
{
     public function transform(T006 $t006)
     {
          return [
          'type_unit'      => $t006->type_unit,
          'code_unit'      => $t006->code_unit,
          'code_payment'   => $t006->code_payment,
          'price'          => $t006->price,
          ];
     }
}
