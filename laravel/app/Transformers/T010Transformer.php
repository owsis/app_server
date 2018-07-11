<?php

namespace App\Transformers;

use App\T010;
use League\Fractal\TransformerAbstract;

class T010Transformer extends TransformerAbstract
{
    public function transform(T010 $t010)
    {
        return [
            'code_developer' => $t010->code_developer,
            'branchcode' => $t010->branchcode,
            'name_cluster' => $t010->name_cluster,
            'code_cluster' => $t010->code_cluster,
            'img' => $t010->img,
        ];
    }
}
