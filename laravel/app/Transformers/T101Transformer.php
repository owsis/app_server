<?php

namespace App\Transformers;

use App\T101;
use League\Fractal\TransformerAbstract;

class T002Transformer extends TransformerAbstract
{
     public function transform(T101 $t101)
     {
          return [
          'branchcode' => $t101->branchcode,
          'booking_no' => $t101->booking_no,
          'code_customer' => $t101->code_customer,
          'name_customer' => $t101->name_customer,
          'code_unit' => $t101->code_unit,
          'type_unit' => $t101->type_unit,
          'first_payment' => $t101->first_payment,
          'type_payment' => $t101->type_payment,
          ];
     }
}
