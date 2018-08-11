<?php

namespace App\Http\Controllers;

use App\T003;
use App\T003_1;
use App\Transformers\T003Transformer;
use App\Transformers\T003_1Transformer;

class T003Controller extends Controller
{
    public function get(T003 $t003, $type, $block)
    {
        $t003s = $t003::where('type_unit', $type)->where('block_unit', $block)->get();

        return fractal()
            ->collection($t003s)
            ->transformWith(new T003Transformer)
            ->addMeta([
                'data_count' => $t003::where('type_unit', $type)->where('block_unit', $block)->count(),
            ])
            ->toArray();
    }

    public function getBlock(T003_1 $t003_1, $type)
    {
        $t003s_1 = $t003_1::where('type_unit', $type)->get();

        return fractal()
            ->collection($t003s_1)
            ->transformWith(new T003_1Transformer)
            ->addMeta([
                'data_count' => $t003_1::where('type_unit', $type)->count(),
            ])
            ->toArray();

    }

    public function update() {
      App\T006::where('price', '469411765')->update([
        'code_payment' => '5'
      ]);

      App\T006::where('price', '483636364')->update([
        'code_payment' => '4'
      ]);

    }
}
