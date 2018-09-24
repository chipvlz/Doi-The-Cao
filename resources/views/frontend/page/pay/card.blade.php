@extends('frontend.layouts.master')
@section('title')
    Đăng ký
@stop
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/card.css')}}">
@stop
@section('content')
    <section class="HomeContent innerFloat">
        <div class="MainContent row">
            <div class="SideBarLeft col-md-3">
                @include('frontend.partials.meu_left')
                <!-- end cssmenu -->
                <div class="support-left">
                    <p>Chăm sóc khách hàng</p>
                    <p class="mobile" style="font-size:18px;text-transform: lowercase;">1243253</p>
                </div>
            </div>
            <!-- end SideBarLeft -->
            <div class="BlockContent col-md-5">
                <div class="GoldRecharge">
                    <div class="BlockBank row">
                        <h5 style="text-align: left; padding-left: 90px">Nhà mạng</h5>
                        <ul>
                            <li>
                                <a data-cost="VTT" data-name="Viettel" href="javascript:void(0)" class="active">
                                    <img src="{{asset('frontend/assets/img/card-viettel.jpg')}}" width="100px"  height="100px"><span style="color:#FFFFFF;" class="lbl"></span></a>
                            </li>
                            <li>
                                <a data-cost="VNP" data-name="Viettel" href="javascript:void(0)">
                                    <img src="{{asset('frontend/assets/img/card-vinaphone.jpg')}}" width="100px"  height="100px"><span style="color:#FFFFFF;" class="lbl"></span></a>
                            </li>
                            <li>
                                <a data-cost="VMS" data-name="Viettel" href="javascript:void(0)">
                                    <img src="{{asset('frontend/assets/img/card-mobifone.jpg')}}" width="100px"  height="100px"><span style="color:#FFFFFF;" class="lbl"></span></a>
                            </li>

                        </ul>
                    </div>
                    <!-- end BlockBank -->
                    <div class="clearfix"></div>
                    <div id="muaTheGate" class="InfoGoldCharge" style="display: block;">
                        <form action="{{URL::route('pay.add-card')}}" method="post" id="form-add-card">
                            {{csrf_field()}}
                            <input type="hidden" value="VTT" id="provider_id" name="provider_id">
                        <div class="form-horizontal">
                            <div class="form-group" id="card-code-class">
                                <label for="" class="control-label col-sm-4">
                                    Mã thẻ
                                </label>
                                <div class="col-sm-8">
                                    <input name="card_code" type="text" id="card-code" class="form-control isNumber text-left">
                                    <p class="text-danger" id="error-card-code"></p>
                                </div>
                            </div>
                            <div class="form-group" id="card-seri-class">
                                <label for="ca" class="control-label col-sm-4">
                                    Seri thẻ
                                </label>
                                <div class="col-sm-8">
                                    <input name="card_seri" type="text" id="card-seri" class="form-control isNumber text-left">
                                    <p class="text-danger" id="error-card-seri"></p>
                                </div>
                            </div>
                            <div class="form-group" id="price-class">
                                <label for="" class="control-label col-sm-4">
                                    Mệnh giá
                                </label>
                                <div class="col-sm-8">
                                    <div class="selectpicker">
                                        <span class="arrow-up"></span>
                                        <select name="card_price" id="price">
                                            <option value="999">Mệnh giá</option>
                                            <option value="10000">10,000</option>
                                            <option value="20000">20,000</option>
                                            <option value="50000">50,000</option>
                                        </select>
                                    </div>
                                    <p class="text-danger" id="error-price"></p>
                                </div>
                            </div>
                            <div class="form-group" id="game-class">
                                <label for="" class="control-label col-sm-4">
                                   Game
                                </label>
                                <div class="col-sm-8">
                                    <div class="selectpicker">
                                        <span class="arrow-up"></span>
                                        <select name="game" id="game">
                                            <option value="999">Game</option>
                                            <option value="1">Game Xanh</option>
                                            <option value="2">Game Đỏ</option>
                                        </select>
                                    </div>
                                    <p class="text-danger" id="error-game"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <input type="submit" name="" id="add-card" value="Đồng ý mua"  class="RegNow">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- end InfoGold -->
                </div>
            </div>
            <!-- endn BlockContent -->
            <div class="BlockContent col-md-4">
                <h3><span>
      <span id="ctl00_ctl00_ctl00_ContentPlaceHolder1_tilteName_tilteName_lbCrumb">Bảng chiết khấu</span>
      </span>
                </h3>
                <div class="clearfix"></div>
                <div class="clearfix">
                    <table class="table text-center">
                        <tbody>
                        <tr class="active bold header">
                            <td>STT</td>
                            <td>Loại thẻ</td>
                            <td>Chiết khấu</td>
                        </tr>
                        <tr class="split">
                            <td>
                                1
                            </td>
                            <td>
                                <img src="{{asset('frontend/assets/img/Viettel.jpg')}}" style="width:43px;height:20px">
                                Viettel
                            </td>
                            <td>
                                3.80 %
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                <img src="{{asset('frontend/assets/img/Mobifone.jpg')}}" style="width:43px;height:20px">
                                Mobifone
                            </td>
                            <td>
                                5.30 %
                            </td>
                        </tr>
                        <tr class="split">
                            <td>
                                3
                            </td>
                            <td>
                                <img src="{{asset('frontend/assets/img/vinaphone.png')}}" style="width:43px;height:20px">
                                Vinaphone
                            </td>
                            <td>
                                5.60 %
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')
    <script src="{{asset('frontend/assets/js/master/card.js')}}"></script>
@stop