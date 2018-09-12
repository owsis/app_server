<?php

namespace App\Http\Controllers;

use App\T102;
use App\T102_1;
use App\Transformers\T102Transformer;
use App\Transformers\T102_1Transformer;
use App\User;
use Illuminate\Http\Request;

class T102Controller extends Controller {

  public function cekKey($code_u, $code_k) {
    $t102s = T102::where([
    	'code_key'   => $code_k,
      'code_user'  => $code_u,
      'status_key' => 'SETTLEMENT',
      'status_use' => '1'
    ])
    ->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => T102::where([
	    	'code_key'   => $code_k,
        'code_user'  => $code_u,
        'status_key' => 'SETTLEMENT',
	      'status_use' => '1'
      ])
      ->count(),
      // 'total_saldo' => $t102::where('code_user', $code_u)->where('status_saldo', 'order')->sum('nominal'),
    ])
    ->toArray();

  }

  public function keyAvailable($code_u) {
    $t102s = T102::where([
      'code_user'  => $code_u,
      'status_key' => 'SETTLEMENT',
      'status_use' => '1'
    ])
    ->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => T102::where([
        'code_user'  => $code_u,
        'status_key' => 'SETTLEMENT',
	      'status_use' => '1'
      ])
      ->count(),
      // 'total_saldo' => $t102::where('code_user', $code_u)->where('status_saldo', 'order')->sum('nominal'),
    ])
    ->toArray();

  }

  public function keySettlement($code_u) {
    $t102s = T102::join('t005s', 't005s.code_key', '=', 't102s.code_key')
    ->select([
      't102s.*',
      't005s.name_key'
    ])
    ->where([
      'code_user'  => $code_u,
      'status_key' => 'SETTLEMENT',
    ])
    ->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => T102::where([
        'code_user'  => $code_u,
        'status_key' => 'SETTLEMENT',
      ])
      ->count(),
      // 'total_saldo' => $t102::where('code_user', $code_u)->where('status_saldo', 'order')->sum('nominal'),
    ])
    ->toArray();

  }

  public function pendKey($code_u) {
    $t102s = T102::join('t005s', 't005s.code_key', '=', 't102s.code_key')
    ->select([
      't102s.*',
      't005s.name_key'
    ])
    ->where([
    	'code_user' => $code_u,
    	'status_key' => 'PENDING'
  	])
    ->orderBy('t102s.created_at', 'DESC')
  	->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => T102::join('t005s', 't005s.code_key', '=', 't102s.code_key')
      ->where([
	    	'code_user' => $code_u,
	    	'status_key' => 'PENDING'
	  	])
      ->count(),
                // 'total_jum_tiket' => $t102::where('code_user', $code_u)->where('status_tiket', 'aktif')->sum('jum_tiket'),
    ])
    ->toArray();

  }

  public function userKey($code)
  {
    $t102s = T102::where('code_user', $code)->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => T102::where('code_user', $code)->count(),
                // 'total_jum_tiket' => $t102::where('code_user', $code_u)->where('status_tiket', 'aktif')->sum('jum_tiket'),
    ])
    ->toArray();
  }

  public function post(Request $req, T102 $t102) {
    $this->validate($req, [
      'order_id'  => 'required|unique:t102s',
      'code_key'  => 'required',
      'nominal'   => 'required',
      'code_user' => 'required',
      'name_user' => 'required',
    ]);

    $t102s = $t102->create([
	    'order_id'   => $req->order_id,
	    'code_key'   => $req->code_key,
	    'nominal'    => $req->nominal,
	    'code_user'  => $req->code_user,
	    'name_user'  => $req->name_user,
	    'status_use' => '1',
    ]);

    return response()->json($t102s);
  }

  public function update(Request $req, T102 $t102, $orderId) {
    $this->validate($req, [
      'nominal' => 'required',
    ]);

    $t102s = $t102::where('order_id', $orderId)->update([
      'nominal' => $req->nominal,
    ]);

    return response()->json($t102s);

  }

  public function deleteKey($code_u) {
    $t102s = T102::where('order_id', $code_u)->delete();
    return response()->json($t102s, 200);
  }

}
