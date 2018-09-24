<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddPasswordTwoRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Repositories\Email\EmailRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class  UserController extends  Controller
{

    public function  __construct(UserRepositoryInterface $users, EmailRepositoryInterface $email)
    {
        $this->user = $users;
        $this->email = $email;
    }

    public function  register()
    {
//        if(\Auth::attempt(['email'=>"kienkienutc95@gmail.com", 'password'=>'21354437568fdhfdj'], true)){
//            return view('frontend.page.users.register');
//        }
        return view('frontend.page.users.register');

    }

    public function  profile()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $userProfile = $this->user->find($userId);
            return view('frontend.page.users.profile', compact('userProfile'));
        } else {
            return redirect()->route('user.login')->withErrors('Vui lòng đăng nhập vào hệ thống!');
        }
    }
    public function  passwordTwo()
    {
        if (Auth::check()) {
            if(!empty(\Auth::user()->password_two)) {
                return redirect()->back()->withErrors('Mật khẩu cấp 2 đã được tạo!');
            } else {
                return view('frontend.page.users.password_two');
            }

        } else {
            return redirect()->route('user.login')->withErrors('Vui lòng đăng nhập vào hệ thống!');
        }
    }

    public function processPasswordTwo(AddPasswordTwoRequest $request)
    {
        $dataRequest = $request->only('password_new_confirm');
        $dataRequest['password_two'] = $dataRequest['password_new_confirm'];
        unset($dataRequest['password_new_confirm']);
        $userId = Auth::user()->id;
        if ($this->user->update($userId, $dataRequest)) {
            return redirect('/')->with('success','Thêm mật khẩu cấp 2 thành công!');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm mật khẩu cấp 2!');

        }

    }

    public function  updateProfile(UpdateProfileRequest $request)
    {
        $dataRequest = $request->except('_token');
        $userId = Auth::user()->id;
        if ($this->user->update($userId, $dataRequest)) {
            return redirect()->back()->with('success','Cập nhật thành công!');

        } else {
            return redirect()->back()->withErrors('Lỗi cập nhật thông tin cá nhân!');

        }
    }

    public function  resetPassword()
    {
        return view('frontend.page.users.reset_password');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if (\Auth::check()) {
            $passwordCurrent = $request->get('password_current');
            $dataRequest = $request->except('_token');
            $dataRequest['password'] = $dataRequest['password_new'];
            $userId = \Auth::user()->id;
              if (Hash::check($passwordCurrent, Auth::user()->password)) {
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
    public function  changePasswordForget(ForgetPasswordRequest $request)
    {
        $dataRequest = $request->except('_token');
        $dataRequest['password'] = $dataRequest['password_new'];
        if ($this->user->update($dataRequest['id'], $dataRequest)) {
            return redirect()->route('user.login')->with('success', 'Đổi mật khẩu thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi đổi mật khẩu !');
        }


    }
    public  function  postRegister(RegisterRequest $request)
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
}
?>
