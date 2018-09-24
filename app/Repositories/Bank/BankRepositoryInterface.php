<?php
namespace  App\Repositories\Bank;

interface  BankRepositoryInterface
{
    public function  save($data);

    public function checkBankForUser($bank,$userId);

    public function checkBankExitsUser($userId);

    public function getBankForUser($userId);

}
?>