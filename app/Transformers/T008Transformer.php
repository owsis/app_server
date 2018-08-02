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
            'name' => $t008->name,
            'type' => $t008->type,
            'category' => $t008->category,
            'img1' => $t008->img1,
            'img2' => $t008->img2,
            'img3' => $t008->img3,
        ];
    }
}
