<?php

namespace App\Http\Controllers;

use App\T101;
use App\T102;
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

    public function getPenjual(T101 $t101, $refFrom)
    {
        $t101s = $t101::where('referral_from', $refFrom)->get();

        return fractal()
            ->collection($t101s)
            ->transformWith(new T101Transformer)
            ->addMeta([
                'data_count' => $t101::where('referral_from', $refFrom)->count(),
            ])
            ->toArray();
    }

    public function getPembeli(T101 $t101, $code)
    {
        $t101s = $t101::where('code_customer', $code)->where('status', 'BOOKED')->get();

        return fractal()
            ->collection($t101s)
            ->transformWith(new T101Transformer)
            ->addMeta([
                'data_count' => $t101::where('code_customer', $code)->where('status', 'BOOKED')->count(),
            ])
            ->toArray();
    }

    public function getOrder(T101 $t101, $code)
    {
        $t101s = $t101::where('code_customer', $code)->where('status_fp', 'PENDING FROM VT')->get();

        return fractal()
            ->collection($t101s)
            ->transformWith(new T101Transformer)
            ->addMeta([
                'data_count' => $t101::where('code_customer', $code)->where('status_fp', 'PENDING FROM VT')->count(),
            ])
            ->toArray();
    }

    public function post(Request $req, T101 $t101, $refFrom, $unitCode, $codeUser)
    {
        $ref_from = User::where('referral_from', $refFrom)->get();
        $utj_id = T102::where('type_unit', $req->type_unit)->where('status_pakai', '1')->where('status_utj', 'SETTLEMENT')->get();

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
            'dp'             => $req->dp,
            'kpr'            => $req->kpr,
            'cash'           => $req->cash,
            'referral_from'  => $ref_from[0]->referral_from,
            'utj_id'         => $utj_id[0]->order_id,
            'status'         => 'BOOKED'
        ]);

        T102::where('order_id', $utj_id[0]->order_id)->update([
            'status_pakai' => '0'
        ]);

        return response()->json($t101s);
    }
}
