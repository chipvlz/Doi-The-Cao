@extends('frontend.layouts.master')
@section('title')
     Nạp Tiền Điện Thoại
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
                            <span style="border-bottom: 2px solid #e02729;">Nạp Tiền Điện Thoại</span>
                        </h2>
                    </div>
                    <div class="SideBar" style="float: left !important;">
                        <h2 class="HotNew">
                            <span>Nạp Tiền Điện Thoại</span>
                        </h2>
                    </div>
                    <!-- end BlockBank -->
                    <div class="clearfix"></div>
                    <div id="muaTheGate" class="InfoGoldCharge" style="display: block;">
                        <p class="text-warning text-center" style="font-style: italic"><b>Vui lòng nhập số điện thoại và mệnh giá </b></p>
                        <form action="{{URL::route('bank.post-add-money-phone')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" id="card-code-class">
                                <label for="" class="control-label col-sm-4">
                                    <b>Số Điện Thoại</b>
                                </label>
                                <div class="col-sm-8">
                                    <input name="phone" type="text" required min="0" id="phone" value="{{old('phone')}}" class="form-control isNumber text-left">
                                    <p class="text-danger" ></p>
                                </div>
                            </div>
                            <div class="money-telco {{($errors->has('card_price'))?"has-error":""}}">
                                <label for="" class="control-label col-sm-4">
                                    <b>Mệnh giá</b>
                                </label>
                                <div class="col-sm-8">
                                    <div class="selectpicker {{($errors->has('card_price'))?"has-error":""}}">
                                        <span class="arrow-up"></span>
                                        <select name="card_price" id="price">
                                            <option value="999">Mệnh giá</option>
                                            @forelse($price as $item)
                                            <option value="{{$item->money}}" {{(old('card_price')== $item->money)?"selected":""}}>{{number_format($item->money)}}</option>
                                                @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <p class="text-danger" id="error-price">{{$errors->first('card_price')}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4">
                                    @if(\Auth::check())
                                        <input type="submit" name="" id="add-card" value="Nạp Tiền"  class="RegNow">
                                    @else
                                        <input type="button" name="" onclick="return confirm('Vui lòng đăng nhập !')" value="Đồng ý mua"  class="RegNow">
                                    @endif
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