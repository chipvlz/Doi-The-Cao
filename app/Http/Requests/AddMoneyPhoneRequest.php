<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddMoneyPhoneRequest extends Request
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
            'phone' => 'required|max:11',
            'card_price'=> 'required|not_in:999',




        ];
    }
    public function messages()
    {
        return [
            'phone.required' => 'Bạn chưa số điện thoại!',
            'phone.max' => 'Bạn chưa nhập sai số điện thoại!',
            'card_price.not_in'=> 'Bạn chưa chọn mệnh giá !!',

        ];
    }
}
