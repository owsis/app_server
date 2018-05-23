<?php

namespace App\Transformers;

use App\T005;
use League\Fractal\TransformerAbstract;

class T005Transformer extends TransformerAbstract
{
     public function transform(T005 $t005)
     {
          return [
          'branchcode'     => $t005->branchcode,
          'nominal'        => $t005->nominal,
          'nominal_format' => number_format($t005->nominal, 0)
          ];
     }
}
