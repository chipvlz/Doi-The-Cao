<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{

    public function  tablePrice()
    {
        return view('frontend.page.page.table-price');
    }
}
