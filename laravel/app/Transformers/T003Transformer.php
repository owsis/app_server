<?php

namespace App\Transformers;

use App\T003;
use League\Fractal\TransformerAbstract;

class T003Transformer extends TransformerAbstract
{
     public function transform(T003 $t003)
     {
          return [
          'branchcode' => $t003->branchcode,
          'code' => $t003->code_unit,
          'type' => $t003->type_unit,
          'block' => $t003->block_unit,
          'no' => $t003->no_unit,
          'lt' => $t003->lt_unit,
          'lb' => $t003->lb_unit,
          'status' => $t003->status_unit,
          'price' => $t003->price,
          'price_format' => number_format($t003->price, 0)
          ];
     }
}
