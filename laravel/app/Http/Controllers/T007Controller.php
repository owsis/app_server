<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T007;
use App\Transformers\T007Transformer;

class T007Controller extends Controller
{
    public function get(T007 $t007)
    {
        $t007s = $t007::where('status_nup', 'available')->get();

        return fractal()
        ->collection($t007s)
        ->transformWith(new T007Transformer)
        ->addMeta([
            'data_count' => $t007::where('status_nup', 'available')->count()
        ])
        ->toArray();
    }

    public function post(Request $req, T007 $t007)
    {
        $this->validate($req, [
            'branchcode'    => 'required',
            'name'          => 'required',
            'disc'          => 'required'
        ]);

        $t007s = $t007->create([
            'branchcode'    => $req->branchcode,
            'name'          => $req->name,
            'disc'          => $req->note
        ]);

        return response()->json($t007s, 201);
    }
}
