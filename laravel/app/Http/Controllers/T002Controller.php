<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use Auth;
use App\Transformers\T002Transformer;
use Illuminate\Http\JsonResponse;

class T002Controller extends Controller
{
    public function marketings(User $t002)
    {
        $t002s = $t002->all();
        
        return fractal()
        ->collection($t002s)
        ->transformWith(new T002Transformer)
        ->addMeta([
            'data-count' => $t002->count()
        ])
        ->toArray();
    }

    public function register(Request $request, User $t002)
    {
        $this->validate($request, [
            'branchcode' => 'required',
            'code' => 'required',
            'email' => 'required|email|unique:t002s',
            'password' => 'required|min:6',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'ktp' => 'required',
            'npwp' => 'required'
        ]);

        $t002s = $t002->create([
            'branchcode' => $request->branchcode,
            'code' => $request->code,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => bcrypt($request->email),
            'name' => strtoupper($request->name),
            'address' => strtoupper($request->address),
            'phone' => $request->phone,
            'ktp' => $request->ktp,
            'npwp' => $request->npwp,
            'reveral_code' => $request->ktp
        ]);

        return fractal($t002s, new T002Transformer())
        ->respond(201, []);
    }

    public function login(Request $request, User $t002)
    {
        
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Error'], 404);
        }
        $t002s = $t002->find(Auth::user()->id);

        return fractal($t002s, new T002Transformer())
        ->respond(200, []);
    }
}
