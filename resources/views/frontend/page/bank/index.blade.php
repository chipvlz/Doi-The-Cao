@extends('frontend.layouts.master')
@section('title')
    Tài khoản ngân hàng
@stop
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/card.css')}}">
    <style>
        .GoldRecharge .BlockBank ul li {
            float: left;
            margin-bottom: 14px;
            margin-right: 14px;
        }
        .homenetwork {
            display: block;
            overflow: hidden;
            margin: 10px 0 0;
        }
        p.game-check {
            position: absolute;
            top: 0px;
            color: red;
            display: none;
        }
        .BlockBank {
            text-align: center;
            margin-left: -112px;
            margin-top: 27px;
        }

        .homenetwork a {
            display: inline-block;
            vertical-align: top;
            width: 31.9%;
            margin-bottom: 1.5%;
            border-radius: 3px;
            border: 1px solid #e4e4e4;
            line-height: 38px;
            text-indent: 7px;
        }
        .alert-danger {
            border-radius: 0px !important;
        }
        .InfoGoldCharge {
            margin-top: 0px !important;
        }


        @media (max-width: 480px) {


            .BlockBank {
                text-align: center;
                margin-left: 0px;
            }
            .GoldRecharge .BlockBank ul {
                padding: 0px;
                margin-left: 0px;
            }
            .GoldRecharge .BlockBank ul {
                padding: 0px;
                margin-left: 0px;
            }
        }
    </style>
@stop
@section('content')
    <section class="HomeContent innerFloat">
        @include('frontend.partials.message')
        <div class="SideBar">
            <h2 class="HotNew">
                <span>Liên Hệ</span>
            </h2>
            <div class="alert alert-danger">
                <a href="tel:{{config('constant.phone_contact')}}" style="text-decoration: none ;color: #ffffff"><span> <i class="fa fa-phone"></i> <strong>{{config('constant.phone_contact')}}</strong></span></a>
            </div>
            <!-- ADS SLIDER -->
            <div id="adsSliderWrapper">
                <ul id="adsSlider" class="ListAdvertiser innerFloat">
                    <li>
                        <a href='#' target='_blank'>
                            <img src="{{asset('frontend/assets/img/Gate_245X340.png')}}" />
                        </a>
                    </li>

                    <li>
                        <a href='#' target='_blank'>
                            <img src="{{asset('frontend/assets/img/Gate_245X341.png')}}" />
                        </a>
                    </li>


                </ul>
                <div class="paginator ds"></div>
            </div>
            <!-- END OF ADS SLIDER -->
        </div>
        <!-- end SideBar -->



        <div class="BlockContent col-md-8">
            <div class="GoldRecharge">
                <div class="content-enter">
                    <div class="contact-md hidden-md hidden-lg">
                        <h2 class="HotNew" style="position: relative;
                            text-transform: uppercase;
                            font-size: 16px;
                            border-bottom: 1px solid #ececec;
                            line-height: 25px;">
                            <span style="border-bottom: 2px solid #e02729;">Tài Khoản Ngân Hàng</span>
                        </h2>
                    </div>
                    <div class="SideBar" style="float: left !important;">
                        <h2 class="HotNew">
                            <span>Tài Khoản Ngân Hàng</span>
                        </h2>
                    </div>
                    <!-- end BlockBank -->
                    <div class="clearfix"></div>
                    <div id="muaTheGate" class="InfoGoldCharge" style="display: block;">
                        <form action="{{URL::route('bank.post-index')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-horizontal">
                                <div class="content-change-choose-game">
                                    <div class="form-group {{($errors->has('bank_number'))?"has-error":""}}">
                                        <label for="" class="control-label col-sm-4">
                                            <b>Số Tài Khoản</b>
                                        </label>
                                        <div class="col-sm-8">
                                            <input name="bank_number" type="text" id="bank_number" value="{{old('bank_number')}}" required class="form-control isNumber text-left">
                                            <p class="text-danger"> {{$errors->first('bank_number')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group {{($errors->has('fullname'))?"has-error":""}}">
                                        <label for="" class="control-label col-sm-4">
                                            <b>Họ Tên Chủ Tài Khoản</b>
                                        </label>
                                        <div class="col-sm-8">
                                            <input name="fullname" required type="text" id="card-code" value="{{old('fullname')}}" class="form-control isNumber text-left">
                                            <p class="text-danger">{{$errors->first('fullname')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group" id="price-class">
                                        <div class="money-telco">
                                            <label for="" class="control-label col-sm-4">
                                                <b>Ngân Hàng</b>
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="selectpicker">
                                                    <span class="arrow-up"></span>
                                                    <select name="bank_name" required id="bank_name">
                                                        <option value="999">Ngân Hàng</option>
                                                        @forelse(config('constant.bank')  as $k=>$v)
                                                        <option  value="{{$k}}" {{(old('bank_name')==$k)?"selected":""}}>{{$v}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <p class="text-danger" id="error-price"></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group" id="card-code-class">
                                    <label for="" class="control-label col-sm-4">
                                        <b>Chi Nhánh</b>
                                    </label>
                                    <div class="col-sm-8">
                                        <input name="bank_branch" required type="text" id="bank_branch" value="{{old('bank_branch')}}" class="form-control isNumber text-left">
                                        <p class="text-danger" id="error-card-code"></p>
                                    </div>
                                </div>
                                <div class="form-group" id="card-seri-class">
                                    <label for="ca" class="control-label col-sm-4">
                                        <b>Mật Khẩu Cấp 2</b>
                                    </label>
                                    <div class="col-sm-8">
                                        <input name="password_two" required type="text" id="card-seri" value="{{old('password_two')}}" class="form-control isNumber text-left">
                                        <p class="text-danger" id="error-card-seri"></p>
                                        <p><a href="{{URL::route('user.password-two')}}" class="text-danger"><b>Tạo mật khẩu cấp 2 nếu chưa có</b></a></p>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        @if(\Auth::check())
                                            <input type="submit" name="" id="add-card" value="Đồng ý mua"  class="RegNow">
                                        @else
                                            <input type="button" name="" onclick="return confirm('Vui lòng đăng nhập !')" value="Thêm Mới"  class="RegNow">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="contact-md hidden-md hidden-lg">
                            <h2 class="HotNew" style="position: relative;
                            text-transform: uppercase;
                            font-size: 16px;
                            border-bottom: 1px solid #ececec;
                            line-height: 25px;">
                                <span style="border-bottom: 2px solid #e02729;">Liên Hệ</span>
                            </h2>
                            <div class="alert alert-danger">
                                <a href="tel:{{config('constant.phone_contact')}}" style="text-decoration: none ;color: #ffffff"><span> <i class="fa fa-phone"></i> <strong>{{config('constant.phone_contact')}}</strong></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end InfoGold -->
            </div>
        </div>
        <!-- end TopService -->
    </section>
@stop
@section('script')

@stop