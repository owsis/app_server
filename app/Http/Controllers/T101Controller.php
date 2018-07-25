<?php

namespace App\Http\Controllers;

use App\T101;
use App\Transformers\T101Transformer;
use App\User;
use Illuminate\Http\Request;

class T101Controller extends Controller
{
    public function getUnitOrder(T101 $t101, $code)
    {
        $t101s = $t101::where('code_customer', $code)->where('status', 'ORDER')->get();

        return fractal()
            ->collection($t101s)
            ->transformWith(new T101Transformer)
            ->addMeta([
                'data_count' => $t101::where('code_customer', $code)->where('status', 'ORDER')->count(),
            ])
            ->toArray();
    }

    public function getPembeli(T101 $t101, $phone)
    {
        $t101s = $t101::where('phone_customer', $phone)->get();

        return fractal()
            ->collection($t101s)
            ->transformWith(new T101Transformer)
            ->addMeta([
                'data_count' => $t101::where('phone_customer', $phone)->count(),
            ])
            ->toArray();
    }

    public function post(Request $req, T101 $t101, $refFrom, $unitCode, $codeUser)
    {
        $ref_from = \App\User::where('referral_from', $refFrom)->get();
        $unit_code = \App\T003::where('code_unit', $unitCode)
            ->update([
                'status_unit' => 'close',
            ]);
        $code_user = \App\User::where('code', $codeUser)->get();
        \App\User::where('code', $codeUser)->update([
            'saldo' => $code_user[0]->saldo - $req->first_payment
        ]);

        $this->validate($req, [
            'branchcode'     => 'required',
            'booking_no'     => 'required',
            'code_customer'  => 'required',
            'name_customer'  => 'required',
            'phone_customer' => 'required',
            'code_unit'      => 'required',
            'type_unit'      => 'required',
            'price_unit'     => 'required',
            'first_payment'  => 'required',
            'type_payment'   => 'required',
            'dp'             => 'required',
            'kpr'            => 'required',
            'cash'           => 'required',
        ]);

        $t101s = $t101->create([
            'branchcode'     => $req->branchcode,
            'booking_no'     => $req->booking_no,
            'code_customer'  => $req->code_customer,
            'name_customer'  => strtoupper($req->name_customer),
            'phone_customer' => $req->phone_customer,
            'code_unit'      => $req->code_unit,
            'type_unit'      => $req->type_unit,
            'price_unit'     => $req->price_unit,
            'first_payment'  => $req->first_payment,
            'type_payment'   => $req->type_payment,
            'harga_trans'    => $req->harga_trans,
            'dp'             => $req->dp,
            'kpr'            => $req->kpr,
            'cash'           => $req->cash,
            'referral_from'  => $ref_from[0]->referral_from,
            'tiket'          => $req->tiket,
            'total_tiket'    => $req->total_tiket,
            'status'         => $req->status,
        ]);

        return response()->json($t101s);
    }
}
