<?php
namespace  App\Repositories\User;

use App\Models\User;

class  UserRepository implements UserRepositoryInterface
{
    public  function  all()
    {

    }

    public function  save($data)
    {
        $user = new User();

        if (isset($data['phone'])) {
            $user->phone = $data['phone'];
        }
        if (isset($data['password'])) {
            $user->password = bcrypt($data['password']);
        }
        if (isset($data['fullname'])) {
            $user->fullname = $data['fullname'];
        }
        if (isset($data['email'])) {
            $user->email = $data['email'];
        }
        if (isset($data['address'])) {
            $user->address = $data['address'];
        }
        return $user->save();
    }

    public function  update($id, $data)
    {
        $user =  User::find($id);
        if ($user) {
            if (isset($data['phone'])) {
                $user->phone = $data['phone'];
            }
            if (isset($data['password'])) {
                $user->password = bcrypt($data['password']);
            }
            if (isset($data['fullname'])) {
                $user->fullname = $data['fullname'];
            }
            if (isset($data['email'])) {
                $user->email = $data['email'];
            }
            if (isset($data['password_two'])) {
                $user->password_two = bcrypt($data['password_two']);
            }
            if (isset($data['token'])) {
                $user->token = $data['token'];
            }
            if (isset($data['token_date'])) {
                $user->token_date = $data['token_date'];
            }
            if (isset($data['address'])) {
                $user->address = $data['address'];
            }
            if (isset($data['money'])) {
                $user->money = $data['money'];
            }
            if (isset($data['money_bank'])) {
                $user->money_bank = $data['money_bank'];
            }
            return $user->save();
        } else {
            return false;
        }
    }
    public  function  find($id)
    {
        return User::find($id);
    }
    public function delete($id)
    {

    }


    public function findAttribute($att, $val)
    {
        return User::where($att, $val)->first();
    }
}

?>