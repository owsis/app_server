<?php

namespace App\Transformers;

use App\T102_1;
use League\Fractal\TransformerAbstract;

class T102_1Transformer extends TransformerAbstract
{

    public function transform(T102_1 $t102_1)
    {
        return [
            'order_id'   => $t102_1->order_id,
            'code_user'  => $t102_1->code_user,
            'name_user'  => $t102_1->name_user,
            'phone_user' => $t102_1->phone_user,
        ];
    }
}
