<?php

namespace App\Http\Controllers;

use App\T002_1;
use App\Transformers\T002Transformer;
use App\Http\Controllers\T002ControllerRequest;
use App\T002;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class T002Controller extends Controller
{

    public function api()
    {
        return view('welcome');
    }

    public function marketings(T002 $t002)
    {
        $t002s = $t002->all();

        return fractal()
            ->collection($t002s)
            ->transformWith(new T002Transformer)
            ->addMeta([
                'data-count' => $t002->count(),
            ])
            ->toArray();
    }

    public function updateUser(T002 $t002, $code)
    {
        $t002s = $t002::where('code', $code)->get();

        return fractal()
            ->collection($t002s)
            ->transformWith(new T002Transformer)
            ->toArray();
    }

    public function updateData(Request $req, User $t002, $code)
    {
        $this->validate($req, [
            'email'      => 'required|email|unique:t002s',
            'name'       => 'required',
            'address'    => 'required',
            'phone'      => 'required|unique:t002s',
            'ktp'        => 'required',
            'npwp'       => 'required',
        ]);

        $t002s = $t002::where('code', $code)->update([
            'email'   => $req->email,
            'name'    => $req->name,
            'address' => $req->address,
            'phone'   => $req->phone,
            'ktp'     => $req->ktp,
            'npwp'    => $req->npwp
        ]);

        return fractal()
            ->collection($t002s)
            ->transformWith(new T002Transformer)
            ->toArray();
    }

    public function register(Request $request, User $t002, $refFrom)
    {
        $ref_from = $t002::where('referral_code', $refFrom)->get();

        $this->validate($request, [
            'code'       => 'required',
            'email'      => 'required|email|unique:t002s',
            'password'   => 'required|min:6',
            'name'       => 'required',
            'address'    => 'required',
            'phone'      => 'required|unique:t002s',
            'ktp'        => 'required',
            'npwp'       => 'required',
        ]);

        $t002s = $t002->create([
            'code'          => $request->code,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'api_token'     => bcrypt($request->email),
            'name'          => strtoupper($request->name),
            'address'       => strtoupper($request->address),
            'phone'         => $request->phone,
            'ktp'           => $request->ktp,
            'npwp'          => $request->npwp,
            'referral_code' => $request->ktp,
            'referral_from' => $ref_from[0]->referral_code,
        ]);

        return fractal($t002s, new T002Transformer())
            ->respond(201, []);
    }

    public function registerUpload(Request $req, User $t002, $code)
    {
        $img = $req->file('image_ktp');
        $filename = 'ktp_'.time().'.'.$img->getClientOriginalExtension();
        $path = $img->storeAs('images_ktp', $filename);

        $t002s = $t002::where('code', $code)->update([
            'image_ktp' => $filename
        ]);
    }

    public function login(Request $request, T002 $t002)
    {

        if (!Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            return response()->json(['error' => 'Error'], 404);
        }
        $t002s = $t002->find(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])->id);

        return fractal($t002s, new T002Transformer())
            ->respond(200, []);
    }

    public function getSaldo(User $t002, $code_u)
    {
        $t002s = $t002::where('code', $code_u)->get();

        return fractal()
            ->collection($t002s)
            ->transformWith(new T002Transformer)
            ->addMeta([
                'total_saldo' => $t002::where('code', $code_u)->sum('saldo'),
            ])
            ->toArray();

    }
}
