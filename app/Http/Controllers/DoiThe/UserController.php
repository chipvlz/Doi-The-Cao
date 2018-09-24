<?php

namespace App\Http\Controllers\DoiThe;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function  __construct(UserRepositoryInterface $users)
    {
        $this->user = $users;
    }
    public function register()
    {
        return view('doithe.page.user.register');
    }

    public  function  postRegister(Requests\RegisterRequest $request)
    {
        try {
            $dataRequest = $request->except('_token');
            if ($this->user->save($request->except('_token'))) {
                return redirect('/')->with('success', 'Bạn đăng ký thành công!');
            } else {
                return redirect()->back()->withErrors('Đăng ký lỗi!');
            }
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
    public function  passwordTwo()
    {
        if (\Auth::check()) {
            if(!empty(\Auth::user()->password_two)) {
                return redirect()->back()->withErrors('Mật khẩu cấp 2 đã được tạo!');
            } else {
                return view('doithe.page.user.password_two');
            }

        } else {
            return redirect()->route('user.login')->withErrors('Vui lòng đăng nhập vào hệ thống!');
        }
    }
    public function processPasswordTwo(Requests\AddPasswordTwoRequest $request)
    {
        $dataRequest = $request->only('password_new_confirm');
        $dataRequest['password_two'] = $dataRequest['password_new_confirm'];
        unset($dataRequest['password_new_confirm']);
        $userId = \Auth::user()->id;
        if ($this->user->update($userId, $dataRequest)) {
            return redirect('/')->with('success','Thêm mật khẩu cấp 2 thành công!');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm mật khẩu cấp 2!');

        }

    }
    public function  resetPassword()
    {
        return view('doithe.page.user.reset_password');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if (\Auth::check()) {
            $passwordCurrent = $request->get('password_current');
            $dataRequest = $request->except('_token');
            $dataRequest['password'] = $dataRequest['password_new'];
            $userId = \Auth::user()->id;
            if (\Hash::check($passwordCurrent, Auth::user()->password)) {
                if ($this->user->update($userId, $dataRequest)) {
                    Auth::logout();
                    return redirect()->route('user.login')->with('success','Cập nhật mật khẩu thành công!');
                } else {
                    return redirect()->back()->withErrors('Lỗi cập nhât mật khẩu!');
                }

            } else {
                return redirect()->back()->withErrors('Mật khẩu hiện tại người dùng không đúng!');
            }
        } else {
            return redirect()->route('user.login');
        }
    }
}
