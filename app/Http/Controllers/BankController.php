<?php

namespace App\Http\Controllers;

use App\Models\PayPhone;
use App\Models\Price;
use App\Models\WithDraw;
use App\Repositories\Bank\BankRepositoryInterface;
use App\Repositories\PayPhone\PayPhoneRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\WithDraw\WithDrawRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class BankController extends Controller
{
    public function  __construct(
        BankRepositoryInterface $bank,
        WithDrawRepositoryInterface $withDraw,
        UserRepositoryInterface $user,
        PayPhoneRepositoryInterface $payPhone
    )
    {
        $this->bank= $bank;
        $this->withDraw = $withDraw;
        $this->user = $user;
        $this->payPhone = $payPhone;
    }

    public function  index()
    {
        if(\Auth::check()) {
            return view('frontend.page.bank.index');
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện !');
        }
    }

    public function  backPay()
    {
        if(\Auth::check()) {
            return view('doithe.page.pay.payment');
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện!');
        }
    }

    public function  processBackPay(Request $request)
    {
        if(\Auth::check()) {
            $dataRequest = $request->except('_token');
            $passwordCurrent = \Auth::user()->password_two;
            $moneyCurrent = (int)\Auth::user()->money;
            $moneyWithDraw = (int)config('constant.money_with_draw');
            $userId = \Auth::user()->id;
            $dataRequest['user_id'] = $userId;
            $dataRequest['money_current'] = $moneyCurrent;
            if($this->bank->checkBankExitsUser($userId)>0) {
                if (Hash::check($dataRequest['password_two'], $passwordCurrent)) {
                    if (($moneyCurrent > (int)$dataRequest['money']) && ($moneyCurrent - (int)$dataRequest['money']) >= $moneyWithDraw) {
                        if ($this->withDraw->save($dataRequest)) {
                            if ($this->user->update($userId, [
                                'money' => $moneyCurrent - (int)$dataRequest['money']
                            ])) {
                                return redirect()->back()->with("success", "Yêu cầu rút tiền được thực hiện , vui lòng chờ nhận kết quả!");
                            } else {
                                return redirect()->back()->withErrors("Lỗi rút tiền!")->withInput();
                            }
                        } else {
                            return redirect()->back()->withErrors("Lỗi rút tiền!")->withInput();
                        }
                    } else {
                        return redirect()->back()->withErrors("Số tiền của bạn không đủ để thực hiện rút tiền!")->withInput();
                    }
                } else {
                    return redirect()->back()->withErrors("Mật khẩu cấp 2 không đúng!")->withInput();
                }
            } else {
                return redirect()->back()->withErrors("Vui lòng nhập tài khoản ngân hàng trước khi rút tiền!")->withInput();
            }
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện!');
        }
    }

    public function  addBank(Requests\AddBankRequest $request)
    {
        $dataRequest = $request->except('_token');
        $passwordCurrent = \Auth::user()->password_two;
        $userId = \Auth::user()->id;
        $dataRequest['user_id'] = $userId;
            if (($this->bank->checkBankForUser($dataRequest['bank_name'], $userId))==0) {
                if ($this->bank->save($dataRequest)) {
                    return redirect()->back()->with("success", "Thêm mới ngân hàng thành công!");
                } else {
                    return redirect()->back()->withErrors("lỗi thêm mới ngân hàng!")->withInput();
                }
            } else {
                return redirect()->back()->withErrors("Ngân hàng:".$dataRequest['bank_name']." đã được thêm!")->withInput();
            }

    }
    public function  historyWithDraw(Request $request)
    {
        $param = [];
        $param['start_date'] = ($request->has('start_date'))?date('Y-m-d', strtotime($request->get('start_date'))):date('Y-m-d');
        $param['end_date'] = ($request->has('end_date'))?date('Y-m-d', strtotime($request->get('end_date'))):date('Y-m-d');

        if(\Auth::check()) {
            $limit = 10;
            $stt = ($request->get('page', '1') - 1) * $limit;
            $dataWithDraw = WithDraw::select('*')
                ->where(\DB::raw('date(`date_request`)'), '>=', $param['start_date'])
                ->where(\DB::raw('date(`date_request`)'), '<=', $param['end_date'])
                ->where('user_id', \Auth::user()->id)
                ->paginate($limit);

            return view('frontend.page.bank.with_draw', compact('stt','dataWithDraw'));
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện tra cứu !');
        }
    }

    public function addMoneyPhone()
    {
        if(\Auth::check()) {
            $price = Price::where('status',1)->get();
            return view('doithe.page.pay.topup', compact('price'));
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện tra cứu !');
        }
    }

    public function procesAddMoneyPhone(Requests\AddMoneyPhoneRequest $request)
    {
        $dataRequest = $request->except('_token');
        $dataRequest['user_id'] = \Auth::user()->id;
        $dataRequest['money'] = $dataRequest['card_price'];
        unset($dataRequest['card_price']);
        if ($this->payPhone->save($dataRequest)) {
            return redirect()->back()->with("success", "Gửi yêu cầu nạp tiền vào số điện thoại:".$dataRequest['phone']." thành công!");
        } else {
            return redirect()->back()->withErrors("lỗi xử lý!")->withInput();
        }
    }

    public function  historyPayPhone(Request $request)
    {
        $param = [];
        $param['start_date'] = ($request->has('start_date'))?date('Y-m-d', strtotime($request->get('start_date'))):date('Y-m-d');
        $param['end_date'] = ($request->has('end_date'))?date('Y-m-d', strtotime($request->get('end_date'))):date('Y-m-d');

        if(\Auth::check()) {
            $limit = 10;
            $stt = ($request->get('page', '1') - 1) * $limit;
            $dataPayPhone = PayPhone::select('*')
                ->where(\DB::raw('date(`created_at`)'), '>=', $param['start_date'])
                ->where(\DB::raw('date(`created_at`)'), '<=', $param['end_date'])
                ->where('user_id', \Auth::user()->id)
                ->paginate($limit);

            return view('frontend.page.bank.history_pay_phone', compact('stt','dataPayPhone'));
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện tra cứu !');
        }
    }
}
