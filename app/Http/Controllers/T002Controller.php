<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Transformers\T002Transformer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class T002Controller extends Controller
{

    public function api()
    {
        return view('welcome');
    }

    public function marketings(User $t002)
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

    public function updateUser(User $t002, $code)
    {
        $t002s = $t002::where('code', $code)->get();

        return fractal()
            ->collection($t002s)
            ->transformWith(new T002Transformer)
            ->toArray();
    }

    public function updateData(Request $req, User $t002, $code)
    {

        $t002s = $t002::where('code', $code)->update([
            'email'         => $req->email,
            'name'          => strtoupper($req->name),
            'address'       => strtoupper($req->address),
            'phone'         => $req->phone,
            'phone2'        => $req->phone2,
            'ktp'           => $req->ktp,
            'npwp'          => $req->npwp
        ]);

        return response()->json($t002s);
    }

    public function register(Request $request, User $t002, $refFrom)
    {
        $ref_from = $t002::where('referral_code', $refFrom)->get();

        $this->validate($request, [
            'code'     => 'required',
            'email'    => 'required|email|unique:t002s',
            'password' => 'required|min:6',
            'name'     => 'required',
            'address'  => 'required',
            'phone'    => 'required|unique:t002s',
            'ktp'      => 'required',
            'npwp'     => 'required',
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
        $filename = 'KTP_' . time() . '.' . $img->getClientOriginalExtension();
        $path = $img->storeAs('images_ktp', $filename);

        $t002s = $t002::where('code', $code)->update([
            'image_ktp' => $filename,
        ]);
    }

    public function uploadFp(Request $req, User $t002, $code)
    {
        $t002s_id = $t002::where('code', $code)->get();

        $img = $req->file('image_fp');
        $filename = 'FP_' . time() . '-' . $t002s_id[0]->name . '.' . $img->getClientOriginalExtension();
        $path = $img->storeAs('images_fp', $filename);

        $t002s = $t002::where('code', $code)->update([
            'image_fp' => $filename,
        ]);
    }

    public function login(Request $request, User $t002)
    {
        if (!Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            return response()->json(['error' => 'Error'], 404);
        }
        $t002s = $t002->find(Auth::user()->id);
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
