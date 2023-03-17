<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "image"=>"required|mimes:jpg,png,svg,webp|min:250|max:10000",
            "altFa"=>"required|string|min:3|max:25",
            "altEn"=>"required|string|min:3|max:25",
            "PNameFa"=>"required|string|min:3|max:100|unique:projects",
            "PNameEn"=>"required|string|min:3|max:100|unique:projects",
            "category_id"=>"required",
            "publish"=>"required"
        ];
    }
}
