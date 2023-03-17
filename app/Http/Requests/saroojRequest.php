<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saroojRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "email"=>"required|string|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|min:5|max:50",
            "phone1"=>"required|string|min:8|max:15",
            "addressFa"=>"required|string|min:10|max:200",
            "addressEn"=>"required|string|min:10|max:200",
            "blogFa"=>"required|string|min:50|max:1000",
            "blogEn"=>"required|string|min:50|max:1000"
        ];
    }
}
