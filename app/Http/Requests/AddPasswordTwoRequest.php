<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddPasswordTwoRequest extends Request
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
            'password_new'=> 'required|max:16|min:6',
            'password_new_confirm' => 'required|same:password_new',
        ];
    }

    public function messages()
    {
        return [
            'password_new.required'=>"Vui lòng nhập mật khẩu cấp 2 !",
            'password_new.max'=>"Mật khẩu cấp 2 từ 6 đến 16 ký tự !",
            'password_new_confirm.required'=>"Vui lòng nhập lại mật khẩu cấp 2!",
            'password_new_confirm.same'=>"Nhập lại mật khẩu cấp 2 không đúng !"
        ];
    }
}
