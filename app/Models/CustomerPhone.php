<?php

namespace  App\Models;
use Illuminate\Database\Eloquent\Model;
class CustomerPhone extends Model
{
    protected $connection="gach_the";
    protected $table = "customer_phone";
    public $timestamps=false;
}