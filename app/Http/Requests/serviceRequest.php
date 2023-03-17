<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class serviceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "image"=>"required|mimes:jpg,png,svg,webp|max:10000",
            "altFa"=>"required|string|min:3|max:25",
            "altEn"=>"required|string|min:3|max:25",
            "titleFa"=>"required|string|min:3|max:100",
            "titleEn"=>"required|string|min:3|max:100",
            "textFa"=>"required|string|min:10|max:500",
            "textEn"=>"required|string|min:10|max:500",
            "publish"=>"required"
        ];
    }
}
