<?php

namespace  App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
        protected $connection="frontend";
        protected $table = "users";
}