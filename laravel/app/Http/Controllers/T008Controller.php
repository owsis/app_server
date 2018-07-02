<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T008;
use App\Transformers\T008Transformer;

class T007Controller extends Controller
{
    public function get(T008 $t008)
    {
        $t008s = $t008::all();

        return fractal()
        ->collection($t008s)
        ->transformWith(new T007Transformer)
        ->addMeta([
            'data_count' => $t008::count()
        ])
        ->toArray();
    }

    public function post(Request $req, T007 $t008)
    {
        $this->validate($req, [
            'branchcode'    => 'required',
            'name'          => 'required',
            'disc'          => 'required'
        ]);

        $t008s = $t008->create([
            'branchcode'    => $req->branchcode,
            'name'          => $req->name,
            'disc'          => $req->note
        ]);

        return response()->json($t008s, 201);
    }
}
