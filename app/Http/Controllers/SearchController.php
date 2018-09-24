<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\PayCard;
use App\Models\UserGame;
use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $param = [];
        $dataGame = Game::where('status',1)->get();
        $param['start_date'] = ($request->has('start_date'))?date('Y-m-d', strtotime($request->get('start_date'))):date('Y-m-d');
        $param['end_date'] = ($request->has('end_date'))?date('Y-m-d', strtotime($request->get('end_date'))):date('Y-m-d');


        if(\Auth::check()) {
            $limit = 1;
            $stt = ($request->get('page', '1') - 1) * $limit;
            $dataPayCard = PayCard::select('*')
                ->where(\DB::raw('date(`created_at`)'), '>=', $param['start_date'])
                ->where(\DB::raw('date(`created_at`)'), '<=', $param['end_date'])
                ->where('user_id', \Auth::user()->id);
            $data = [
                'total'=>$dataPayCard->sum('price'),
                'record'=>$dataPayCard->paginate($limit)
            ];

            return view('frontend.page.search.index', compact('stt','data'));
        } else {
            return redirect('/dang-nhap')->withErrors('Vui lòng đăng nhập để thực hiện tra cứu !');
        }

    }

}
