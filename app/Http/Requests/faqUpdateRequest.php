<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class faqUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "image"=>"mimes:jpg,png,svg,webp|max:10000",
            "altFa"=>"required|string|min:3|max:25",
            "altEn"=>"required|string|min:3|max:25",
            "questionFa"=>"required|string|min:3|max:200",
            "questionEn"=>"required|string|min:3|max:200",
            "answerFa"=>"required|string|min:10|max:2000",
            "answerEn"=>"required|string|min:10|max:2000"
        ];
    }
}
