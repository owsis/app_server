<?php

namespace App\Transformers;

use App\T009;
use App\Transformer\T010Transformer;
use League\Fractal\TransformerAbstract;

class T009Transformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'cluster'
    ];

    public function transform(T009 $t009)
    {
        return [
            'code_developer' => $t009->code_developer,
            'name_developer' => $t009->name_developer,
            'address' => $t009->address,
            'phone1' => $t009->phone1,
            'phone2' => $t009->phone2,
        ];
    }

    public function includeClusters(T009 $t009)
    {
        $clusters = $t009->clusters;

        return $this->collection($clusters, new T010Transformer);
    }
}
