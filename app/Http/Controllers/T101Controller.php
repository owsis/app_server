<?php

namespace App\Http\Controllers;

use App\T003;
use App\T005;
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

    public function getPenjual($refFrom)
    {
        $t101s = T101::join('t004s', function($join) {
            $join->on('t004s.type_unit', '=', 't101s.type_unit');
            $join->on('t004s.code_payment', '=', 't101s.type_payment');
        })
        ->select([
            't101s.*',
            't004s.name_payment'
        ])
        ->where('referral_from', $refFrom)
        ->get();

        return fractal()
        ->collection($t101s)
        ->transformWith(new T101Transformer)
        ->addMeta([
            'data_count' => T101::where('referral_from', $refFrom)->count(),
        ])
        ->toArray();
    }

    public function getBeli($code)
    {
        $t101s = T101::join('t005s', 't005s.code_key', '=', 't101s.code_key' )
        ->join('t002s', 't002s.referral_code', '=', 't101s.referral_from')
        ->join('t008s', 't008s.type_unit', '=', 't101s.type_unit')
        ->where([
            'code_customer' => $code,
            'status' => 'BOOKED'
        ])
        ->get();

        return fractal()
        ->collection($t101s)
        ->transformWith(new T101Transformer)
        ->addMeta([
            'data_count' => T101::join('t005s', 't005s.code_key', '=', 't101s.code_key' )
            ->join('t002s', 't002s.referral_code', '=', 't101s.referral_from')
            ->join('t008s', 't008s.type_unit', '=', 't101s.type_unit')
            ->where([
                'code_customer' => $code,
                'status' => 'BOOKED'
            ])
            ->count(),
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

    public function post(Request $req, $refFrom)
    {
        $ref_from = User::where('referral_from', $refFrom)->get();

        $t102s = T102::where('order_id', $req->order_id_key)->get();

        $this->validate($req, [
            'branchcode'     => 'required',
            'booking_no'     => 'required',
            'code_customer'  => 'required',
            'name_customer'  => 'required',
            'phone_customer' => 'required',
            'code_unit'      => 'required',
            'type_unit'      => 'required',
            'price_unit'     => 'required',
            'type_payment'   => 'required',
            'dp'             => 'required',
            'kpr'            => 'required',
            'cash'           => 'required',
        ]);

        $t101s = T101::create([
            'branchcode'     => $req->branchcode,
            'booking_no'     => $req->booking_no,
            'code_customer'  => $req->code_customer,
            'name_customer'  => strtoupper($req->name_customer),
            'phone_customer' => $req->phone_customer,
            'code_unit'      => $req->code_unit,
            'type_unit'      => $req->type_unit,
            'block_unit'     => $req->block_unit,
            'price_unit'     => $req->price_unit,
            'order_id_key'   => $req->order_id_key,
            'code_key'       => $t102s[0]->code_key,
            'type_payment'   => $req->type_payment,
            'dp'             => $req->dp,
            'kpr'            => $req->kpr,
            'cash'           => $req->cash,
            'referral_from'  => $ref_from[0]->referral_from,
            'status'         => 'BOOKED'
        ]);


        T102::where('order_id', $req->order_id_key)->update([
            'status_use' => $req->code_unit
        ]);

        T003::where('code_unit', $req->code_unit)->update([
            'code_customer' => $req->code_customer,
            'name_customer' => $req->name_customer,
            'status_unit' => 'close'
        ]);

        return response()->json($t101s);
    }
}
