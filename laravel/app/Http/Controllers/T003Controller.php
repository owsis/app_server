<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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
}
