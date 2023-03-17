<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class generalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "serviceImage"=>"required|mimes:jpg,png,svg,webp|min:100|max:10000",
            "projectsImage"=>"required|mimes:jpg,png,svg,webp|min:100|max:10000",
            "altServiceImageFa"=>"required|string|min:3|max:100",
            "altServiceImageEn"=>"required|string|min:3|max:100",
            "altProjectsImageFa"=>"required|string|min:3|max:100",
            "altProjectsImageEn"=>"required|string|min:3|max:100",
        ];
    }
}
