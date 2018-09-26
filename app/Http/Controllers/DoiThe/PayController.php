<?php

namespace App\Http\Controllers\DoiThe;

use App\Models\HistoryTopUp;
use App\Models\User;
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
    public function topUp(Request $request)
    {
        $dataRequest = $request->except('_token');
        $moneyRequest = (int)$dataRequest['money'];
        $user = User::find(\Auth::user()->id);
        $moneyCurrent = (int)$user->money;
        if ($moneyCurrent>=$moneyRequest) {
            $user->money -= $moneyRequest;
            if ($user->save()) {
                $historyTopUp = new HistoryTopUp();
                $historyTopUp->user_id = \Auth::user()->id;
                $historyTopUp->phone = $dataRequest['phone'];
                $historyTopUp->money = $moneyRequest;
                if ($historyTopUp->save()) {
                    return redirect()->back()->with('success','Nạp tiền điện thoại thành công vui lòng chờ xử lý !');
                } else {
                    return redirect()->back()->withErrors('Lỗi xử lý!')->withInput();
                }
            } else {
                return redirect()->back()->withErrors('Lỗi xử lý!')->withInput();
            }
        } else {
            return redirect()->back()->withErrors('Số tiền hiện tại không đủ để thực hiện giao dịch!')->withInput();
        }

    }

}
