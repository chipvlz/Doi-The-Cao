<?php
namespace App\Http\Controllers;

use App\Http\Requests\AddCardRequest;
use App\Models\UserGame;
use App\Repositories\CustomerPhone\CustomerPhoneRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Support\Helper;
use Illuminate\Http\Request;

class  PayCardController extends  Controller
{
    public function  __construct(CustomerPhoneRepositoryInterface $customerPhone)
    {
        $this->customerPhone = $customerPhone;

    }

    public  function  card()
    {
        if (\Auth::check()) {
            return view('frontend.page.pay.card');
        } else {
            return redirect()->route('user.login');
        }
    }

    public function sms()
    {
        if (\Auth::check()) {
            $userId = \Auth::user()->id;

            return view('frontend.page.pay.sms');
        } else {
            return redirect()->route('user.login');
        }
    }

    public function addCard(AddCardRequest $request)
    {
        if (\Auth::check()) {
           $dataRequest = $request->except('_token');
            $arr = array (
            'username' => 'fontend',
            'password' => '123!@#',
            'cardCode' => $dataRequest['card_code'],
            'cardSerial' => $dataRequest['card_seri'],
            'price' => (int)$dataRequest['card_price'],
            'issuer' => $dataRequest['telco'],
            'transRef' => bin2hex(openssl_random_pseudo_bytes(16)),
            'accountId' => \Auth::user()->id,
            );
          $payCard = Helper::addCard($arr);
          if ($payCard['status']==100) {
              return redirect()->back()->with('success', $payCard['description']);
          } else {
              return redirect()->back()->withErrors( $payCard['description'])->withInput();
          }
        } else {
            return redirect()->route('user.login');
        }
    }

    public function addPhone(Request $request)
    {
        try {
            $dataRequest = $request->except(['_token']);
            $date = date('Ymd_his', time());
            $transCode = "AD_" . $date;
            $dataRequest['trans_code'] = $transCode;
            $dataRequest['operator'] = Helper::checkOperator($dataRequest['phone']);
            $dataRequest['user_id_frontend'] = \Auth::user()->id;
            $response = [];
            $id = $this->customerPhone->save($dataRequest);
            if ($id) {
                $response['id'] = $id;
                $response['status'] = 1;
                $response['message'] = 'Thêm mới thành công !';
            } else {
                $response['status'] = 0;
                $response['message'] = 'Lỗi xử lý thêm mới !';
            }
        } catch (\Exception $ex) {
            $response['status'] = 0;
            $response['message'] = 'Lỗi Xử lý!';
        }

        return response()->json($response);
    }

    public function updateSim(Request $request)
    {
        try {
            $dataRequest = $request->except(['_token']);
            $dataRequest['operator'] = Helper::checkOperator($dataRequest['phone']);
            $response = [];
            if ($this->customerPhone->update($dataRequest['id'], $dataRequest)) {
                $response['status'] = 1;
                $response['message'] = 'Cập nhật thành công !';
            } else {
                $response['status'] = 0;
                $response['message'] = 'Lỗi xử lý cập nhật !';
            }
        } catch (\Exception $ex) {
            $response['status'] = 0;
            $response['message'] = 'Lỗi Xử lý cập nhật !';
        }

        return response()->json($response);
    }
}