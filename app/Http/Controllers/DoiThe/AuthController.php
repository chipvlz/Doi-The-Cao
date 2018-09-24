<?php

namespace App\Http\Controllers\DoiThe;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Support\Helper;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function __construct(UserRepositoryInterface $users)
    {
        $this->user = $users;
        View::share('helper', new Helper());
    }

    public function  loginForm()
    {
        return view('doithe.page.user.login');
    }

    public function login(Request $request)
    {
        $dataRequest = $request->except(['_token']);
        $response = [];
        if ($this->user->findAttribute('phone', $dataRequest['phone'])) {
            if (\Auth::attempt(['phone' => $dataRequest['phone'], 'password' => $dataRequest['password']])) {
                return redirect()->back()->with('success', 'Bạn đăng nhập thành công !');
            } else {
                return redirect()->back()->withErrors('Lỗi đăng nhập!')->withInput();
            }
        } else {
            return redirect()->back()->withErrors('Số điện thoại:'.$dataRequest['phone']." chưa tồn tại trong hệ thống !")->withInput();
        }

    }
}
