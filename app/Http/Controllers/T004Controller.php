<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T004;
use App\Transformers\T004Transformer;

class T004Controller extends Controller
{
    public function get(T004 $t004)
    {
        $t004s = $t004::all();

        return fractal()
        ->collection($t004s)
        ->transformWith(new T004Transformer)
        ->addMeta([
            'data_count' => $t004::count()
        ])
        ->toArray();
    }

    public function post(Request $req, T004 $t004)
    {
        $this->validate($req, [
            'code_payment' => 'required',
            'name_payment' => 'required',
        ]);

        $t004s = $t004->create([
            'code_payment' => $req->code_payment,
            'name_payment' => strtoupper($req->name_payment),
        ]);

        return response()->json($t004s, 201);
    }
}
