<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T004;
use App\Transformers\T004Transformer;

class T004Controller extends Controller
{
    public function get(T004 $t004)
    {
        $t004s = $t004->all();

        return fractal()
        ->collection($t004s)
        ->transformWith(new T004Transformer)
        ->addMeta([
            'data-count' => $t004->count()
        ])
        ->toArray();
    }

    public function post(Request $req, T004 $t004)
    {
        $this->validate($req, [
            'branchcode' => 'required',
            'code_customer' => 'required',
            'name' => 'required',
            'address' => 'required',
            'city_code' => 'required',
            'email' => 'required|email',
            'ktp' => 'required',
            'npwp' => 'required',
            'phone' => 'required'
        ]);

        $t004s = $t004->create([
            'branchcode' => $req->branchcode,
            'code_customer' => $req->code_customer,
            'name' => strtoupper($req->name),
            'address' => strtoupper($req->address),
            'city_code' => strtoupper($req->city_code),
            'email' => $req->email,
            'ktp' => $req->ktp,
            'npwp' => $req->npwp,
            'phone' => $req->phone
        ]);

        return response()->json($t004s, 201);
    }
}
