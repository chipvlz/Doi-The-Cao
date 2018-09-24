<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    protected $connection="frontend";
    protected $table = "user_game_id";
}
