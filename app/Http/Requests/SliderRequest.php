<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "image"=>"required|mimes:jpg,png,svg,webp|min:100|max:10000",
            "altFa"=>"required|string|min:3|max:100",
            "altEn"=>"required|string|min:3|max:100",
            "titleFa"=>"required|string|min:3|max:200",
            "titleEn"=>"required|string|min:3|max:200",
            "textFa"=>"required|string|min:10|max:2000",
            "textEn"=>"required|string|min:10|max:2000",
            "publish"=>"required"
        ];
    }
}
