<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
           'name'=>'required|max:255|string',
           'Age'=>'numeric',
           'date'=>'string',
           'phone'=>'numeric',
           'web'=>'string',
           'address'=>'String'
        ];
    }
    public function messages(): array
    {
        return [
           'name.string'=>'vui lang dien ten cho dung',
           'Age.numeric'=>'vui long nhap tuoi cho dung',
           'date.string'=>'vui long dien ten ngay thang',
           'phone.numeric'=>'vui long kiem tra lai so dien thoai',
           'web.string'=>'vui long kiem tra ki tu',
           'address.string'=>'vui long nhap lai dia chi'
        ];
    }
}
