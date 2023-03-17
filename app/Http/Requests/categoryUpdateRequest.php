<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class categoryUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }
    public function rules()
    {
        return [
            "image"=>"mimes:jpg,png,svg,webp|min:100|max:10000",
            "altFa"=>"required|string|min:3|max:100",
            "altEn"=>"required|string|min:3|max:100",
            "nameFa"=>"required|string|min:3|max:100",
            "nameEn"=>"required|string|min:3|max:100",
        ];
    }
}
