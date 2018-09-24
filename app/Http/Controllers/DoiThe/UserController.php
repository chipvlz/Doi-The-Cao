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
}
