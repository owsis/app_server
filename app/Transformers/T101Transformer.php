<?php

namespace App\Transformers;

use App\T101;
use App\Transformers\T002Transformer;
use League\Fractal\TransformerAbstract;

class T101Transformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'reveral_code',
    ];

    public function transform(T101 $t101)
    {
        return [
            'branchcode'    => $t101->branchcode,
            'booking_no'    => $t101->booking_no,
            'code_customer' => $t101->code_customer,
            'name_customer' => $t101->name_customer,
            'code_unit'     => $t101->code_unit,
            'type_unit'     => $t101->type_unit,
            'block_unit'    => $t101->block_unit,
            'img_unit'      => $t101->img1,
            'price_unit'    => $t101->price_unit,
            'order_id_key'  => $t101->order_id_key,
            'name_key'      => $t101->name_key,
            'type_payment'  => $t101->type_payment,
            'name_payment'  => $t101->name_payment,
            'dp'            => $t101->dp,
            'kpr'           => $t101->kpr,
            'cash'          => $t101->cash,
            'referral_from' => $t101->name,
            'status'        => $t101->status,
        ];
    }

    public function includeT002(T101 $t101)
    {
        $reveral_code = $t101->t002;

        return $this->item($reveral_code, new T002Transformer);
    }
}
