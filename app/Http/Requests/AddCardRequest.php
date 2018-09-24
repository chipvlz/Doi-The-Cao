<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddCardRequest extends Request
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
            'card_code' => 'required|max:255',
            'telco'=> 'required',
            'card_seri' => 'required|max:255',



        ];
    }
    public function messages()
    {
        return [
            'card_code.required' => 'Bạn chưa nhập mã số thẻ!',
            'card_seri.required' => 'Bạn chưa nhập số seri!',
            'telco.required'=> 'Bạn chưa chọn nhà mạng!',

        ];
    }
}
