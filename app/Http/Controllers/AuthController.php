<?php
namespace App\Http\Controllers;

use App\Repositories\Email\EmailRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Support\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class  AuthController extends  Controller
{

    public function __construct(UserRepositoryInterface $users, EmailRepositoryInterface $email)
    {
        $this->user = $users;
        $this->email = $email;
        View::share('helper', new Helper());
    }

    public function login(Request $request)
    {
        $dataRequest = $request->except(['_token']);
        $response = [];
        if ($this->user->findAttribute('phone', $dataRequest['login-phone'])) {
            if (\Auth::attempt(['phone' => $dataRequest['login-phone'], 'password' => $dataRequest['login-password']])) {
                $response['status'] = 1;
                $response['message'] = "Đăng nhập thành công!";
            } else {
                $response['status'] = 0;
                $response['message'] = "Lỗi đăng nhập!";
            }
        } else {
            $response['status'] = 0;
            $response['message'] = "Số điện thoại chưa tồn tại!";
        }
        return response()->json($response);

    }

    public function  loginForm()
    {
        return view('frontend.page.login');
    }
    public function  logout()
    {
        \Auth::logout();
        return redirect()->back();
    }

    public function  processForgetPassword(Request $request) {
        $token = $request->get('token');
        $checkExistToken = $this->user->findAttribute('token', $token);
        if ($checkExistToken) {
            $dateNow = date('Y-m-d H:i:s');
            $dateToken = $checkExistToken->token_date;
            $hour =helper::calHourTwoDate($dateToken, $dateNow);
            if ($hour < 3) {
                $userId = $checkExistToken->id;
                return view('frontend.page.users.forget_password',compact('userId'));
//                if ($this->user->update($checkExistToken->id, ['token' => ''])) {
//
//                } else {
//                    return redirect('/');
//                }
            } else {
                return redirect()->route('user.login')->withErrors('Lỗi xử lý đổi mật khẩu!');
            }
        } else {
            return redirect()->route('user.login')->withErrors('Lỗi xử lý đổi mật khẩu!');
        }

    }

    public function forgetPassword(Request $request)
    {
        $email = $request->get('forget-email');
        $checkEmailExist = $this->user->findAttribute('email', $email);
        $response = [];
        if ($checkEmailExist) {
            $token = bin2hex(openssl_random_pseudo_bytes(16));
            $dateToken = date('Y-m-d H:i:s');
            $data = [
                'token'=>$token,
                'token_date' =>$dateToken,
                'fullname'=>$checkEmailExist->fullname
            ];
            if ($this->user->update($checkEmailExist->id, $data)) {
                $this->email->sendEmail($checkEmailExist->email, $data, 'mail.forget_password','Đặt lại mật khẩu');
                $response['status'] = 1;
                $response['message'] = 'Vui lòng kiểm tra email để đặt lại mật khẩu !';
            } else {
                $response['status'] = 0;
                $response['message'] = 'Lỗi xử lý !';
            }

        } else {
            $response['status'] = 0;
            $response['message'] = 'Email chưa tồn tại trên hệ thống !';
        }
        return response()->json($response);
    }
}