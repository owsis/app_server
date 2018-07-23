<?php

namespace App\Transformers;

use App\T102;
use League\Fractal\TransformerAbstract;

class T102Transformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'reveral_code',
    ];

    public function transform(T102 $t102)
    {
        return [
            'branchcode'   => $t102->branchcode,
            'order_id'     => $t102->order_id,
            'nominal'      => $t102->nominal,
            'status_tiket' => $t102->status_tiket,
            'code_user'    => $t102->code_user,
            'name_user'    => $t102->name_user,
            'phone_user'   => $t102->phone_user,
        ];
    }
}
