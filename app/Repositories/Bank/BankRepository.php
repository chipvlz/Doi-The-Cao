<?php
namespace  App\Repositories\Bank;

use App\Models\Bank;

class  BankRepository implements BankRepositoryInterface
{
    public function save($data)
    {
        $bank = new Bank();

        if (isset($data['bank_number'])) {
            $bank->bank_number = $data['bank_number'];
        }
        if (isset($data['bank_name'])) {
            $bank->bank_name = $data['bank_name'];
        }
        if (isset($data['fullname'])) {
            $bank->fullname = $data['fullname'];
        }
        if (isset($data['bank_branch'])) {
            $bank->bank_branch = $data['bank_branch'];
        }
        if (isset($data['user_id'])) {
            $bank->user_id = $data['user_id'];
        }
        if ($bank->save()) {
            return true;
        } else {
            return false;
        }
    }
    public function checkBankForUser($bank,$userId)
    {
        return Bank::where('bank_name', $bank)
                    ->where('user_id', $userId)
                    ->count();
    }

    public function checkBankExitsUser($userId)
    {
        return Bank::where('user_id', $userId)
            ->count();
    }

}