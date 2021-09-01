<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "image" => "required|min:0|max:40",
            "lastname" => "required|min:0|max:40",
            "firstname" => "required|min:0|max:40",
            "title" => "required|min:0|max:60",
            "description" => "required|min:0|max:400",
            "bday" => "required|min:0|max:40",
            "website" => "required|min:0|max:40",
            "phone"=> "required|min:0|max:40",
            "city" => "required|min:0|max:40",
            "age" => "required|min:0|max:3",
            "degree" => "required|min:0|max:40",
            "mail" => "required|min:0|max:40|email",
            "freelance" => "required|min:0|max:40",
            "description2" => "required|min:0|max:400"
        ];
    }
}
