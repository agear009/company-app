<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateadministratorRequest extends FormRequest
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
                'levelUser' =>'required|max:255|min:3',
                'keterangan' =>'required|max:255|min:6'

            ];
        }
        public function messages():array
        {
            return[
                'levelUser.required' =>':attribute tidak boleh kosong',
                'keterangan.required' =>':attribute tidak boleh kosong',

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
