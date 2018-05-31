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
          'name'           => $t007->name,
          'disc'           => $t007->disc
          ];
     }
}
