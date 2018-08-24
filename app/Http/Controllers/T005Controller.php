<?php

namespace App\Http\Controllers;

use App\T005;
use App\Transformers\T005Transformer;
use Illuminate\Http\Request;

class T005Controller extends Controller {
    public function get(T005 $t005) {
        $t005s = $t005->all();

        return fractal()
            ->collection($t005s)
            ->transformWith(new T005Transformer)
            ->toArray();
    }

    public function post(Request $req, T005 $t005) {
        $this->validate($req, [
            'branchcode' => 'required',
            'type_unit' => 'required',
            'nominal' => 'required',
        ]);

        $t005s = $t005->create([
            'branchcode' => $req->branchcode,
            'type_unit' => $req->type_unit,
            'nominal' => $req->nominal,
        ]);

        return response()->json($t005s, 201);
    }
}
