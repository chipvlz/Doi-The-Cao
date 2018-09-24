<?php

namespace App\Http\Controllers\DoiThe;

use App\Models\Bank;
use App\Repositories\Bank\BankRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BankController extends Controller
{
    public function __construct(BankRepositoryInterface $bank)
    {
        $this->bank = $bank;
    }

    public function index()
    {
        if(\Auth::check()) {
            $userId = \Auth::user()->id;
            $bankForUser = $this->bank->getBankForUser($userId);
            return view('doithe.page.bank.index', compact('bankForUser'));
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện !');
        }
    }


    public function addBank()
    {
        return view('doithe.page.bank.add_bank');
    }

    public function delete($id)
    {
        $bank = Bank::where('user_id', \Auth::user()->id)
                        ->where('id', $id)->first();
        if ($bank) {
            $bank->delete();
            return redirect()->back()->with('success', 'Xóa tài khoản ngân hàng thành công !');
        } else {
            return redirect()->back()->withErrors('Không tìm thấy ngân hàng!');
        }
    }
}
