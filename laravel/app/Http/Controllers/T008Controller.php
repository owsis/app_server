<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T008;
use App\Transformers\T008Transformer;

class T008Controller extends Controller
{
    public function get(T008 $t008)
    {
        $t008s = $t008::all();

        return fractal()
        ->collection($t008s)
        ->transformWith(new T008Transformer)
        ->addMeta([
            'data_count' => $t008::count()
        ])
        ->toArray();
    }
}
