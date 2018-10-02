<?php
namespace  App\Repositories\WithDraw;

use App\Models\WithDraw;

class  WithDrawRepository implements WithDrawRepositoryInterface
{
    public function  save($data)
    {
        $withDraw =  new WithDraw();

        $withDraw->date_request= date('Y-m-d H:i:s');

        if (isset($data['money'])) {
            $withDraw->money = (int)$data['money'];
        }
        if (isset($data['money_current'])) {
            $withDraw->money_current = (int)$data['money_current'];
        }
        if (isset($data['note'])) {
            $withDraw->note = $data['note'];
        }
        if (isset($data['bank'])) {
            $withDraw->bank_id = $data['bank'];
        }
        if (isset($data['user_id'])) {
            $withDraw->user_id = $data['user_id'];
        }
        if ($withDraw->save()) {
            return true;
        } else {
            return false;
        }

    }
}