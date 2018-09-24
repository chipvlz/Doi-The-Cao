<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ForgetPasswordRequest extends Request
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
            'password_new'=> 'required|max:24|min:6',
            'password_new_confirm' => 'required|same:password_new',
        ];
    }
}
