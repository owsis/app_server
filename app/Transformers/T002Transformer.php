<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class T002Transformer extends TransformerAbstract {
    public function transform(User $t002) {
        return [
            'id' => $t002->id,
            'branchcode' => $t002->branchcode,
            'code' => $t002->code,
            'email' => $t002->email,
            'api_token' => $t002->api_token,
            'name' => $t002->name,
            'address' => $t002->address,
            'phone' => $t002->phone,
            'ktp' => $t002->ktp,
            'image_ktp' => 'http://smile-in-properti.store/storage/app/images_ktp/' . $t002->image_ktp,
            'npwp' => $t002->npwp,
            'referral_code' => $t002->referral_code,
            'referral_from' => $t002->referral_from,
            'tiket' => $t002->tiket,
            'saldo' => $t002->saldo,
        ];
    }
}
