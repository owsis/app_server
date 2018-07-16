<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;

class T002Controller extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        //cek create atau update
        if ($this->method() == 'PATCH') {
            $nip_rule = 'required|string|size:5|unique:employees,nip' . $this->get('id');
        } else {
            $nip_rule = 'required|string|size:5|unique:employees,nip';
        }
        return [
            'nip' => $nip_rule,
            'nama ' => 'required|string|max:35|min:5 ',
            'tgl_lahir ' => 'required|date ',
            'gender ' => 'required|in:L,P ',
            'foto ' => 'sometimes|image|max:500|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG ',
        ];
    }

}
