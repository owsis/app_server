<?php

namespace App\Transformers;

use App\T102;
use League\Fractal\TransformerAbstract;

class T102Transformer extends TransformerAbstract {
    protected $availableIncludes = [
        'reveral_code',
    ];

    public function transform(T102 $t102) {
        return [
            'order_id'   => $t102->order_id,
            'type_unit'  => $t102->type_unit,
            'nominal'    => $t102->nominal,
            'status_utj' => $t102->status_utj,
            'code_user'  => $t102->code_user,
            'name_user'  => $t102->name_user,
        ];
    }
}
