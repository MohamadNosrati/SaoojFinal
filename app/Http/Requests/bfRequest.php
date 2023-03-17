<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bfRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "imageBefore"=>"required|mimes:jpg,png,svg,webp|min:100|max:10000",
            "imageAfter"=>"required|mimes:jpg,png,svg,webp|min:100|max:10000",
            "altBeforeFa"=>"required|string|min:3|max:100",
            "altBeforeEn"=>"required|string|min:3|max:100",
            "altAfterFa"=>"required|string|min:3|max:100",
            "altAfterEn"=>"required|string|min:3|max:100",
            "project"=>"required",
        ];
    }
}
