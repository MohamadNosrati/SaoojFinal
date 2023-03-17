<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class commentEnRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
//            "fullName"=>"required|max:100",
////            "email"=>"required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|max:200",
//            "text"=>"required|max:1000"
        ];
    }
}
