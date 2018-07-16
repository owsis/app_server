<?php

namespace App\Transformers;

use App\T007;
use League\Fractal\TransformerAbstract;

class T007Transformer extends TransformerAbstract
{
     public function transform(T007 $t007)
     {
          return [
          'branchcode'     => $t007->branchcode,
          'nup'            => $t007->nup,
          'price'          => $t007->price,
          'code_user'      => $t007->code_user,
          'status_nup'     => $t007->status_nup
          ];
     }
}
