<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T006;
use App\Transformers\T006Transformer;

class T006Controller extends Controller
{
    public function get(T006 $t006, $code)
    {
        $t006s = $t006::where('code_unit', $code)->get();

        return fractal()
        ->collection($t006s)
        ->transformWith(new T006Transformer)
        ->toArray();
    }

    public function post(Request $req, T006 $t006)
    {
        $this->validate($req, [
            'branchcode'    => 'required',
            'name'          => 'required',
            'note'          => 'required'
        ]);

        $t006s = $t006->create([
            'branchcode'    => $req->branchcode,
            'name_payment'  => $req->name,
            'note_payment'  => $req->note
        ]);

        return response()->json($t006s, 201);
    }
}
