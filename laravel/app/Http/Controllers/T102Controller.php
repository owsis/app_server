<?php

namespace App\Http\Controllers;

use App\T102;
use App\User;
use Illuminate\Http\Request;

class T102Controller extends Controller
{
    public function post(Request $req, T102 $t102, User $t002)
    {
        $this->validate($req, [
            'branchcode'=> 'required',
            'order_id'  => 'required',
            'jum_nup'   => 'required',
            'total_nup' => 'required',
            'code_nup'  => 'required',
        ]);

        $t102s = $t102->create([
            'branchcode'=> $req->branchcode,
            'order_id'  => $req->order_id,
            'jum_nup'   => $req->jum_nup,
            'total_nup' => $req->total_nup,
            'code_nup'  => $req->code_nup,
        ]);

        return response()->json($t102s);
    }
}
