<?php

namespace App\Http\Controllers;

use App\T003;
use App\Transformers\T003Transformer;

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

    public function getBlock(T003 $t003, $type)
    {
        $t003s = $t003::where('type_unit', $type)->get();

        return fractal()
            ->collection($t003s)
            ->transformWith(new T003Transformer)
            ->toArray();

    }
}
