<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoRequest extends FormRequest
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
            "startFa"=>"required|date",
            "endFa"=>"required|date",
            "project_id"=>"required|unique:infos",
            "textFa"=>"required|string|min:100|max:2000",
            "textEn"=>"required|string|min:100|max:2000",
            "area"=>"required|numeric",
        ];
    }
}
