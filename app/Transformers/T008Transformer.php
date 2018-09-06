<?php

namespace App\Transformers;

use App\T008;
use League\Fractal\TransformerAbstract;

class T008Transformer extends TransformerAbstract
{
    public function transform(T008 $t008)
    {
        return [
            'branchcode' => $t008->branchcode,
            'name_unit' => $t008->name_unit,
            'type_unit' => $t008->type_unit,
            'category_unit' => $t008->category_unit,
            'img1' => $t008->img1,
            'img2' => $t008->img2,
            'img3' => $t008->img3,
        ];
    }
}
