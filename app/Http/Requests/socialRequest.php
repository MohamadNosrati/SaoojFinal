<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class socialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "icon"=>"required|min:5|max:1000000",
            "link"=>"required|min:5|max:1000",
            "team_id"=>"required"
        ];
    }
}
