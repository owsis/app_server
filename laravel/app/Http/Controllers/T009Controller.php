<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T009;
use App\Transformers\T009Transformer;

class T009Controller extends Controller
{
    public function get(T009 $t009)
    {
        $t009s = $t009::all();

        return fractal()
        ->collection($t009s)
        ->transformWith(new T009Transformer)
        ->includeClusters()
        ->addMeta([
            'data_count' => $t009::count()
        ])
        ->toArray();
    }
}
