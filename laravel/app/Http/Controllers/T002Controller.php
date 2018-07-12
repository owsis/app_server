<?php

namespace App\Http\Controllers;

use App\T002_1;
use App\Transformers\T002Transformer;
use App\Http\Controllers\T002ControllerRequest;
use App\User;
use Auth;
use Validator;
use Illuminate\Http\Request;

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

    public function register(Request $request, User $t002, T002_1 $t002_1, $refFrom)
    {
        $ref_from = $t002_1::where('referral_code', $refFrom)->get();

        $this->validate($request, [
            'branchcode' => 'required',
            'code'       => 'required',
            'email'      => 'required|email|unique:t002s',
            'password'   => 'required|min:6',
            'name'       => 'required',
            'address'    => 'required',
            'phone'      => 'required|unique:t002s',
            'ktp'        => 'required',
            'image_ktp'  => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'npwp'       => 'required',
        ]);

        $t002s = $t002->create([
            'branchcode'    => $request->branchcode,
            'code'          => $request->code,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'api_token'     => bcrypt($request->email),
            'name'          => strtoupper($request->name),
            'address'       => strtoupper($request->address),
            'phone'         => $request->phone,
            'ktp'           => $request->ktp,
            'image_ktp'     => $request->file('image_ktp')->store('images_ktp'),
            'npwp'          => $request->npwp,
            'referral_code' => $request->ktp,
            'referral_from' => $ref_from[0]->referral_code,
        ]);

        $t002_1->create([
            'email'         => $request->email,
            'name'          => strtoupper($request->name),
            'referral_code' => $request->ktp,
        ]);

        return fractal($t002s, new T002Transformer())
            ->respond(201, []);
    }

    public function registerUpload(Type $var = null)
    {
        # code...
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

    public function getTiket(User $t002, $code_u)
    {
        $t002s = $t002::where('code', $code_u)->get();

        return fractal()
            ->collection($t002s)
            ->transformWith(new T002Transformer)
            ->addMeta([
                'total_jum_tiket' => $t002::where('code', $code_u)->sum('tiket'),
            ])
            ->toArray();

    }
}
