<?php
namespace  App\Repositories\PayPhone;

use App\Models\PayPhone;

class  PayPhoneRepository implements PayPhoneRepositoryInterface
{
    public function save($data)
    {
        $payPhone = new  PayPhone();

        if (isset($data['phone'])) {
            $payPhone->phone = $data['phone'];
        }
        if (isset($data['money'])) {
            $payPhone->money = $data['money'];
        }
        if (isset($data['user_id'])) {
            $payPhone->user_id = $data['user_id'];
        }
        if ($payPhone->save()) {
            return true;
        } else {
            return false;
        }
    }
}