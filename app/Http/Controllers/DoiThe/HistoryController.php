<?php

namespace App\Http\Controllers\DoiThe;

use App\Repositories\WithDraw\WithDrawRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function __construct(WithDrawRepositoryInterface $withDraw)
    {
        $this->withDraw = $withDraw;
    }

    public function historyBank(Request $request)
    {
        return view('doithe.page.history.history_bank');
    }
}
