<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Models\CustomerPhone;
use App\Models\ExchangeRate;
use App\Models\Game;
use App\Models\Price;
use App\Models\Rate;
use App\Models\Telco;
use App\Models\UserGame;
use App\Repositories\User\UserRepositoryInterface;
use App\Support\Helper;
use Illuminate\Support\Facades\Mail;

class  HomeController extends  Controller
{
    public  function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
        \View::share('helper', new Helper());
    }

    public function  index()
    {
//        $arr = array (
//            'username' => 'abc123',
//            'password' => '123!@#abc',
//            'cardCode' => '910103936818840',
//            'cardSerial' => '10000828349510',
//            'price' => '50000',
//            'issuer' => 'VTT',
//            'transRef' => '151259263832071750',
//            'accountId' => '54',
//            'userGame' => 'fb1476124832405555',
//            'signature' => '241e994b696ba135548c5b7b051b0aa3',
//        );
//        dd(Helper::addCard($arr));
        $game = Game::where('status',1)->get();

        return view('frontend.page.home', compact('game'));
    }

    public function  selectGame($id)
    {
        $data['telco'] =  [];
        $data['user_game'] = '';

            $dataTelCo = ExchangeRate::select(\DB::raw('DISTINCT telco'))
                ->where('game_id', $id)
                ->where('status',1)
                ->get();
            $data['telco'] = [];
            foreach ($dataTelCo as $item) {
                $aaRow = [];
                if ($item->telco == "VTT") {
                    $aaRow['image'] = "http://dailydoithe.com/frontend/assets/img/vtt.PNG";
                }
                if ($item->telco == "VNP") {
                    $aaRow['image'] = "http://dailydoithe.com/frontend/assets/img/vnp.PNG";
                }
                if ($item->telco == "VMS") {
                    $aaRow['image'] = "http://dailydoithe.com/frontend/assets/img/vms.PNG";
                }
                $aaRow['telco'] = $item->telco;
                $data['telco'][] = $aaRow;
            }
        if (\Auth::check()) {
                $userIdFrontend = \Auth::user()->id;
                $userGameInfo = UserGame::where('user_id', $userIdFrontend)
                                ->where('game_id', $id)
                                ->orderBy('created_at', 'DESC')
                                ->first();
            $data['user_game'] = ($userGameInfo)?$userGameInfo->game_user:'';
        }
        return view('frontend.page.home_select', compact('data'));
    }

    public function selectTelco($telco, $game)
    {
        $dataMoney = ExchangeRate::where('telco', $telco)
                    ->where('game_id', $game)
                    ->where('status', 1)
                    ->get();
        return view('frontend.page.page.price-telco', compact('dataMoney'));
    }

    public function  card()
    {
        return view('frontend.page.pay.card');
    }

    public function  indexTwo()
    {
        $game = Game::where('status',1)->get();
        $telco = Telco::where('status',1)->get();
        $price = Price::where('status',1)->get();
        $rate = Rate::all();
        return view('frontend.page.home_two', compact('game','telco', 'price', 'rate'));
    }
}