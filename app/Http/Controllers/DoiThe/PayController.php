<?php

namespace App\Http\Controllers\DoiThe;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    public function change()
    {
        if(\Auth::check()) {
            return view('doithe.page.pay.change');
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện!');
        }

    }

}
