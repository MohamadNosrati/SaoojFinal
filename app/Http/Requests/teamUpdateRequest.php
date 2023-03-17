<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class teamUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "image"=>"mimes:jpg,png,svg,webp|min:50|max:10000",
            "altFa"=>"required|string|min:3|max:100",
            "altEn"=>"required|string|min:3|max:100",
            "nameFa"=>"required|string|min:3|max:100",
            "nameEn"=>"required|string|min:3|max:100",
            "jobFa"=>"required|string|min:3|max:100",
            "jobEn"=>"required|string|min:3|max:100",
            "textFa"=>"required|string|min:3|max:2000",
            "textEn"=>"required|string|min:3|max:2000",
        ];
    }
}
