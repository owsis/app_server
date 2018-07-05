<?php

namespace App\Transformers;

use App\T003_1;
use League\Fractal\TransformerAbstract;

class T003_1Transformer extends TransformerAbstract
{
    public function transform(T003_1 $t003_1)
    {
        return [
            'branchcode' => $t003_1->branchcode,
            'name_unit' => $t003_1->name_unit,
            'type_unit' => $t003_1->type_unit,
            'block' => $t003_1->block_unit
        ];
    }
}
