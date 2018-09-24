<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddBankRequest extends Request
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
            'bank_number'=> 'required',
            'fullname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required'=>"Vui lòng nhập họ tên tài khoản!",
            'bank_number.required'=>"Vui lòng nhập số tài khoản !",
        ];
    }
}
