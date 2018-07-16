<?php

namespace App\Transformers;

use App\T006;
use League\Fractal\TransformerAbstract;

class T006Transformer extends TransformerAbstract
{
     public function transform(T006 $t006)
     {
          return [
          'branchcode'     => $t006->branchcode,
          'name_payment'   => $t006->name_payment,
          'note_payment'   => $t006->note_payment,
          'dp'             => $t006->dp,
          'kpr'            => $t006->kpr,
          'disc'           => $t006->disc
          ];
     }
}
