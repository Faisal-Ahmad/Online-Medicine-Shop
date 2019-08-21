<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerrequest extends FormRequest
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
                'name'=>'required',
                'contact'=>'required|min:11|max:11',
                'email'=>'required',
                'address'=>'required',
                'password'=>'required|min:5'
        ];
    }
    public function messages (){

        return [

            "uname.required"=> "Name Required",
            "contact.required"=> "Contact Required",
            "contact.min"=> "Number must 11 digits",
            "contact.max"=> "Number must 11 digits",
            "email.required"=> "Email Required",
            "address.required"=> "Address Required",
            "password.required"=> "Password Required",
            "password.min"=> "Password Minimum 5 word"
        ];
    }
}
