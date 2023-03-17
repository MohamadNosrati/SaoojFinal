<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "videoId"=>"required|numeric",
            "video"=>"required|string",
            "startFa"=>"Date",
            "endFa"=>"Date",
            "project_id"=>"required",
            "textFa"=>"required|string|min:100|max:2000",
            "textEn"=>"required|string|min:100|max:2000",
            "area"=>"required|numeric",
        ];
    }
}
