<?php

namespace App\Http\Controllers;

use App\T102;
use App\Transformers\T102Transformer;
use App\User;
use Illuminate\Http\Request;

class T102Controller extends Controller
{
    public function getPending(T102 $t102, $code_u)
    {
        $t102s = $t102::where('code_user', $code_u)->where('status_tiket', 'pending')->get();

        return fractal()
            ->collection($t102s)
            ->transformWith(new T102Transformer)
            ->addMeta([
                'data_count' => $t102::where('code_user', $code_u)->where('status_tiket', 'pending')->count(),
                'total_jum_tiket' => $t102::where('code_user', $code_u)->where('status_tiket', 'pending')->sum('jum_tiket'),
            ])
            ->toArray();

    }

    public function getAvailable(T102 $t102, $code_u)
    {
        $t102s = $t102::where('code_user', $code_u)->where('status_tiket', 'available')->get();

        return fractal()
            ->collection($t102s)
            ->transformWith(new T102Transformer)
            ->addMeta([
                'data_count' => $t102::where('code_user', $code_u)->count(),
                // 'total_jum_tiket' => $t102::where('code_user', $code_u)->where('status_tiket', 'aktif')->sum('jum_tiket'),
            ])
            ->toArray();

    }

    public function post(Request $req, T102 $t102, User $t002)
    {
        $this->validate($req, [
            'branchcode'   => 'required',
            'order_id'     => 'required|unique:t102s',
            'jum_tiket'    => 'required',
            'total_tiket'  => 'required',
            'status_tiket' => 'required',
            'code_user'    => 'required',
        ]);

        $t102s = $t102->create([
            'branchcode'   => $req->branchcode,
            'order_id'     => $req->order_id,
            'jum_tiket'    => $req->jum_tiket,
            'total_tiket'  => $req->total_tiket,
            'status_tiket' => $req->status_tiket,
            'code_user'    => $req->code_user,
            'name_user'    => $req->name_user,
            'phone_user'   => $req->phone_user,
        ]);

        return response()->json($t102s);
    }

    public function update(Request $req, T102 $t102, $orderId)
    {
        $this->validate($req, [
            'jum_tiket' => 'required',
            'total_tiket' => 'required',
        ]);

        $t102s = $t102::where('order_id', $orderId)->update([
            'jum_tiket' => $req->jum_tiket,
            'total_tiket' => $req->total_tiket,
        ]);

        return response()->json($t102s);

    }

    public function delete(T102 $t102, $code_u)
    {
        $t102s = $t102::where('order_id', $code_u)->delete();
        return response()->json($t102s, 200);
    }
}
