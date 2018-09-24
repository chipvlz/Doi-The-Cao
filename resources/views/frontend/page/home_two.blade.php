@extends('frontend.layouts.master')
@section('title')
    Trang chủ
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
                            <span style="border-bottom: 2px solid #e02729;">Đổi Thẻ</span>
                        </h2>
                    </div>
                    <div class="SideBar" style="float: left !important;">
                        <h2 class="HotNew">
                            <span>Đổi Thẻ</span>
                        </h2>
                    </div>
                    <!-- end BlockBank -->
                    <div class="clearfix"></div>
                    <div id="muaTheGate" class="InfoGoldCharge" style="display: block;">
                        <form action="{{URL::route('pay.add-card')}}" method="post" id="form-add-card">
                            {{csrf_field()}}
                            <input type="hidden" value="{{old('game-telco')}}" id="provider_id" name="game-telco">
                            <div class="form-horizontal">
                                <div class="content-change-choose-game">
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-4">
                                            <b> Nhà mạng</b>
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="homenetwork" id="cardnetwork">
                                              @forelse($telco  as $tel)
                                                <a href="javascript:void(0)">
                                                    <input type="radio" name="telco" {{(old('telco')==$tel->name)?"checked":""}} class="telco" value="{{$tel->name}}" id="{{$tel->name}}">
                                                    <label for="{{$tel->name}}">
                                                        <img src="{{$tel->image}}"  class="img-telco" alt="">
                                                    </label>
                                                </a>
                                                  @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="price-class">
                                        <div class="money-telco">
                                            <label for="" class="control-label col-sm-4">
                                                <b>Mệnh giá</b>
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="selectpicker">
                                                    <span class="arrow-up"></span>
                                                    <select name="card_price" id="price">
                                                        <option value="999">Mệnh giá</option>
                                                        @forelse($price  as $pr)
                                                            <option {{(old('card_price')==$pr->money)?"selected":""}} value="{{$pr->money}}">{{number_format($pr->money)}}</b></option>
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
                                        <b>Mã thẻ</b>
                                    </label>
                                    <div class="col-sm-8">
                                        <input name="card_code" type="text" id="card-code" value="{{old('card_code')}}" class="form-control isNumber text-left">
                                        <p class="text-danger" id="error-card-code"></p>
                                    </div>
                                </div>
                                <div class="form-group" id="card-seri-class">
                                    <label for="ca" class="control-label col-sm-4">
                                        <b>Seri thẻ</b>
                                    </label>
                                    <div class="col-sm-8">
                                        <input name="card_seri" type="text" id="card-seri" value="{{old('card_seri')}}" class="form-control isNumber text-left">
                                        <p class="text-danger" id="error-card-seri"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        @if(\Auth::check())
                                            <input type="button" name="" id="add-card" value="Đồng ý mua"  class="RegNow">
                                        @else
                                            <input type="button" name="" onclick="return confirm('Vui lòng đăng nhập !')" value="Đồng ý mua"  class="RegNow">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="sale-card">
                            <h3 class="u-text-gradient-h3"> Bảng chiết khấu</h3>
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead style="background: #3c763d;color: #fff;">
                                <tr>
                                    <th class="text-center">Mạng</th>
                                    <th class="text-center">Chiết Khấu</th>
                                    <th class="text-center">Tình Trạng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($rate as $rates)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{$rates->image}}" width="51" height="24" alt="{{$rates->image}}">
                                        <br>
                                        {{$rates->telco}}
                                    </td>
                                    <td class="text-center"><b>{{$rates->rate}}%</b></td>
                                    <td class="text-center">
                                        @if ($rates->status==1)
                                        <span class="btn btn-success btn-sm">Hoạt động</span>
                                            @else
                                            <span class="btn btn-warning btn-sm">Bảo trì</span>

                                        @endif
                                    </td>
                                </tr>
                                    @empty
                                @endforelse
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="alert alert-danger" style="border-radius: 0px" id="danger">
                            <p><b>- Không hỗ trợ trường hợp chọn sai nhà mạng và mệnh giá.</b></p>
                            <p> - Giữ lại thẻ trong quá trình chờ hệ thống xử lý.</p>
                        </div>
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
    <script>
        $(document).ready(function () {
            //add card
            $(document).on('click', '#add-card', function () {

                var telco = $("input[name='telco']:checked").val();
                var price = $('#price option:selected').val();
                var cardCode = $('#card-code').val();
                var cardSeri = $('#card-seri').val();

                if(typeof telco === "undefined") {
                    alert("Bạn chưa chọn nhà mạng cần nạp thẻ !");
                    return;
                }
                if(price==999) {
                    alert("Bạn chưa chọn mệnh giá cần nạp thẻ !");
                    $('#price-class').addClass('has-error');
                    return;
                }
                if(cardCode=='') {
                    alert("Bạn chưa nhập mã thẻ cần nạp thẻ !");
                    $('#card-code-class').addClass('has-error');
                    $('#card-code-class').focus();
                    return;
                } else {
                    $('#card-code-class').removeClass('has-error');
                }
                if(cardSeri=='') {
                    alert("Bạn chưa nhập seri thẻ cần nạp thẻ !");
                    $('#card-seri-class').addClass('has-error');
                    $('#card-seri-class').focus();
                    return;
                }else {
                    $('#card-seri-class').removeClass('has-error');
                }
                $('#form-add-card').submit();
            });
        })

    </script>
@stop