<?php

namespace App\Http\Controllers;

use App\T102;
use App\T102_1;
use App\Transformers\T102Transformer;
use App\Transformers\T102_1Transformer;
use App\User;
use Illuminate\Http\Request;

class T102Controller extends Controller {

  public function getOrder(T102 $t102, $code_u, $type_u) {
    $t102s = $t102::where('code_user', $code_u)->where('type_unit', $type_u)->where('status_utj', 'SETTLEMENT')->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => $t102::where('code_user', $code_u)->where('status_utj', 'SETTLEMENT')->count(),
      // 'total_saldo' => $t102::where('code_user', $code_u)->where('status_saldo', 'order')->sum('nominal'),
    ])
    ->toArray();

  }

  public function getAvailable(T102 $t102, $code_u) {
    $t102s = $t102::where('code_user', $code_u)->where('status_saldo', 'available')->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102Transformer)
    ->addMeta([
      'data_count' => $t102::where('code_user', $code_u)->count(),
                // 'total_jum_tiket' => $t102::where('code_user', $code_u)->where('status_tiket', 'aktif')->sum('jum_tiket'),
    ])
    ->toArray();

  }

  public function post(Request $req, T102 $t102, User $t002) {
    $this->validate($req, [
      'order_id'  => 'required|unique:t102s',
      'type_unit' => 'required',
      'nominal'   => 'required',
      'code_user' => 'required',
      'name_user' => 'required',
    ]);

    $t102s = $t102->create([
      'order_id'  => $req->order_id,
      'type_unit' => $req->type_unit,
      'nominal'   => $req->nominal,
      'code_user' => $req->code_user,
      'name_user' => $req->name_user,
    ]);

    return response()->json($t102s);
  }

  public function exeOrder(T102 $t102, $code_u) {
    $t102s = $t102::where('code_user', $code_u)->where('status_saldo', 'order')->update(['status_saldo' => 'pending']);

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

  public function delete(T102 $t102, $code_u) {
    $t102s = $t102::where('order_id', $code_u)->delete();
    return response()->json($t102s, 200);
  }

  public function getMidtrans(T102_1 $t102_1, $codeUser) {
    $t102s = $t102_1::where('code_user', $codeUser)->get();

    return fractal()
    ->collection($t102s)
    ->transformWith(new T102_1Transformer)
    ->addMeta([
      'data_count' => $t102_1::where('code_user', $codeUser)->count(),
    ])
    ->toArray();

  }

  public function postMidtrans(Request $req, T102_1 $t102_1, T102 $t102, $code_u) {
    $this->validate($req, [
      'order_id' => 'required',
      'code_user' => 'required',
      'name_user' => 'required',
    ]);

    $t102_1s = $t102_1->create([
      'order_id' => $req->order_id,
      'code_user' => $req->code_user,
      'name_user' => $req->name_user,
    ]);

    $t102::where('code_user', $code_u)->where('status_saldo', 'order')->update(['status_saldo' => 'pending']);

    return response()->json($t102_1s);
  }
}
