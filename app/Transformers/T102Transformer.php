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
            'branchcode'  => $t102->branchcode,
            'order_id'    => $t102->order_id,
            'jum_tiket'     => $t102->jum_tiket,
            'total_tiket'   => $t102->total_tiket,
            'status_tiket'  => $t102->status_tiket,
            'code_user'   => $t102->code_user,
            'name_user'   => $t102->name_user,
            'phone_user'  => $t102->phone_user,
        ];
    }
}
