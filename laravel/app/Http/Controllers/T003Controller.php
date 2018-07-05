<?php

namespace App\Http\Controllers;

use App\T003;
use App\T003_1;
use App\Transformers\T003Transformer;
use App\Transformers\T003_1Transformer;

class T003Controller extends Controller
{
    public function get(T003 $t003)
    {
        $t003s = $t003->all();

        return fractal()
            ->collection($t003s)
            ->transformWith(new T003Transformer)
            ->toArray();
    }

    public function getBlock(T003_1 $t003_1, $type)
    {
        $t003s_1 = $t003_1::where('type_unit', $type)->get();

        return fractal()
        ->collection($t003s_1)
        ->transformWith(new T003_1Transformer)
        ->addMeta([
            'data_count' => $t003_1::where('type_unit', $type)->count()            
        ])
        ->toArray();

    }
}
