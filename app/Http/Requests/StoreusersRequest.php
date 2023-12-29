<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreusersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user' =>'required|max:255|min:3',
            'password' =>'required|max:255|min:6',
            'name' =>'required|max:255|min:2',
            // 'gender' =>'required',
            'phone' =>'required|max:255|min:7',
            'email' =>'required|email:dns|max:200',
            'address' =>'required|max:255|min:10'
        ];
    }
    public function messages():array
    {
        return[
            'user.required' =>':attribute tidak boleh kosong',
            'password.required' =>'tidak boleh kosong',
            'name.required' =>':attribute tidak boleh kosong',
            'phone.required' =>'tidak boleh kosong',
            'email.required' =>'tidak boleh kosong',
            'address.required' =>'tidak boleh kosong'
        ];
    }
    public function message():array
    {
        return[

            'user'=>'userID',
            'name'=>'nama lengkap',

        ];
    }
}
