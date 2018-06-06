<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\T101;
use App\User;
use App\T004;
use App\Transformers\T101Transformer;

class T101Controller extends Controller
{
    public function get(T101 $t101, User $t002, $revCode)
    {
        $rev_code = $t002::where('reveral_code', $revCode)->get();

        $t101s = $t101::where('reveral_code', $rev_code[0]->id)->get();

        return fractal()
        ->collection($t101s)
        ->transformWith(new T101Transformer)
        ->addMeta([
            'data_count' => $t101::where('reveral_code', $rev_code[0]->id)->count(),
            'kumulatif' => $t101::where('reveral_code', $rev_code[0]->id)->sum('harga_trans')
        ])
        ->toArray();
    }

    public function getPembeli(T101 $t101, T004 $t004, $email)
    {
        $emailCust = $t004::where('email', $email)->get();

        $t101s = $t101::where('code_customer', $emailCust[0]->code_customer)->get();

        return fractal()
        ->collection($t101s)
        ->transformWith(new T101Transformer)
        ->addMeta([
            'data_count' => $t101::where('code_customer', $emailCust[0]->code_customer)->count()
        ])
        ->toArray();
    }

    public function post(Request $req, T101 $t101, $revCode, $unitCode)
    {
        $rev_code = \App\User::where('reveral_code', $revCode)->get();
        $unit_code = \App\T003::where('code_unit', $unitCode)
        ->update([
            'status_unit' => 'close'
        ]);

        $this->validate($req, [
            'branchcode'    => 'required',
            'booking_no'    => 'required',
            'code_customer' => 'required',
            'name_customer' => 'required',
            'code_unit'     => 'required',
            'type_unit'     => 'required',
            'price_unit'    => 'required',
            'first_payment' => 'required',
            'type_payment'  => 'required',
            'dp'            => 'required',
            'kpr'           => 'required',
            'cash'          => 'required'
        ]);

        $t101s = $t101->create([
            'branchcode'    => $req->branchcode,
            'booking_no'    => $req->booking_no,
            'code_customer' => $req->code_customer,
            'name_customer' => strtoupper($req->name_customer),
            'code_unit'     => $req->code_unit,
            'type_unit'     => $req->type_unit,
            'price_unit'    => $req->price_unit,
            'first_payment' => $req->first_payment,
            'type_payment'  => $req->type_payment,
            'harga_trans'   => $req->harga_trans,
            'dp'            => $req->dp,
            'kpr'           => $req->kpr,
            'cash'          => $req->cash,
            'reveral_code'  => $rev_code[0]->id,
            'status'        => $req->status
        ]);

        return response()->json($t101s);
    }
}
