<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class teamRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "image"=>"required|mimes:jpg,png,svg,webp|min:50|max:10000",
            "altFa"=>"required|string|min:3|max:100",
            "altEn"=>"required|string|min:3|max:100",
            "nameFa"=>"required|string|min:3|max:100|unique:teams",
            "nameEn"=>"required|string|min:3|max:100|unique:teams",
            "jobFa"=>"required|string|min:3|max:100",
            "jobEn"=>"required|string|min:3|max:100",
            "textFa"=>"required|string|min:3|max:2000",
            "textEn"=>"required|string|min:3|max:2000",
        ];
    }
}
