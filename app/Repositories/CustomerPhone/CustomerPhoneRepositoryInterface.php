<?php
namespace  App\Repositories\CustomerPhone;

interface  CustomerPhoneRepositoryInterface
{
    public  function  all();

    public function  save($data);

    public function  update($id, $data);

    public function delete($id);

    public  function  find($id);

    public function findAttribute($att, $val);

}
?>