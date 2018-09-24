<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    protected $connection="frontend";
    protected $table = "exchange_rate";
}
