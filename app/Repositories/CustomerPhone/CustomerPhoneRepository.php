<?php
namespace  App\Repositories\CustomerPhone;

use App\Models\CustomerPhone;

class CustomerPhoneRepository implements  CustomerPhoneRepositoryInterface
{
    public  function  all()
    {
        return CustomerPhone::all();
    }

    public function  save($data)
    {
        $customerPhone = new CustomerPhone();

        if (isset($data['phone'])) {
            $customerPhone->phone = $data['phone'];
        }
        if (isset($data['money'])) {
            $customerPhone->money = $data['money'];
        }
        if (isset($data['operator'])) {
            $customerPhone->operator = $data['operator'];
        }
        if (isset($data['operator_type'])) {
            $customerPhone->operator_type = $data['operator_type'];
        }
        if (isset($data['trans_code'])) {
            $customerPhone->trans_code = $data['trans_code'];
        }
        if (isset($data['user_id_frontend'])) {
            $customerPhone->user_id_frontend = $data['user_id_frontend'];
        }
        if (isset($data['pay_number'])) {
            $customerPhone->pay_number = $data['pay_number'];
        }
        $customerPhone->save();
        return $customerPhone->id;
    }

    public function  update($id, $data)
    {
        $customerPhone = CustomerPhone::find($id);
        if ($customerPhone) {
            if (isset($data['phone'])) {
                $customerPhone->phone = $data['phone'];
            }
            if (isset($data['money'])) {
                $customerPhone->money = $data['money'];
            }
            if (isset($data['operator'])) {
                $customerPhone->operator = $data['operator'];
            }
            if (isset($data['operator_type'])) {
                $customerPhone->operator_type = $data['operator_type'];
            }
            if (isset($data['trans_code'])) {
                $customerPhone->trans_code = $data['trans_code'];
            }
            if (isset($data['user_id_frontend'])) {
                $customerPhone->user_id_frontend = $data['user_id_frontend'];
            }
            if (isset($data['pay_number'])) {
                $customerPhone->pay_number = $data['pay_number'];
            }
            return $customerPhone->save();
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $customerPhone = CustomerPhone::find($id);
        if ($customerPhone) {
            return $customerPhone->delete();
        } else {
            return false;
        }
    }

    public  function  find($id)
    {
        return CustomerPhone::find($id);
    }
    public function findAttribute($att, $val)
    {
        return CustomerPhone::where($att, $val)->first();
    }
}