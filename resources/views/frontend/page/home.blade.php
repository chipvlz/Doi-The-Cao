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
            <a href="tel:01202125678" style="text-decoration: none ;color: #ffffff"><span> <i class="fa fa-phone"></i> <strong>0120.212.5678</strong></span></a>
        </div>
        <div class="alert alert-success">
            <a style="text-decoration: none ;color: #ffffff"  href="https://www.facebook.com/doithevzon" target="_blank"><span> <i class="fa fa-facebook-square" aria-hidden="true"></i> <strong>ĐẠI LÝ ĐỔI THẺ CP-GROUP</strong></span></a>
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
                            <span style="border-bottom: 2px solid #e02729;">Nạp Thẻ</span>
                        </h2>
                    </div>
                    <div class="SideBar" style="float: left !important;">
                        <h2 class="HotNew">
                            <span>Nạp Thẻ</span>
                        </h2>
                    </div>
                <!-- end BlockBank -->
                <div class="clearfix"></div>
                <div id="muaTheGate" class="InfoGoldCharge" style="display: block;">
                    <form action="{{URL::route('pay.add-card')}}" method="post" id="form-add-card">
                        {{csrf_field()}}
                        <input type="hidden" value="" id="provider_id" name="game-telco">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="control-label col-sm-4">
                                    <b>Chọn game</b>
                                </label>
                                <div class="col-sm-8">
                                    <div class="content-game">
                                        <div class="BlockBank row">
                                            <ul>
                                                @forelse($game as $item)
                                                <li>
                                                    <a data-cost="{{$item->key}}" data-name="{{$item->key}}" href="javascript:void(0)" class="game-telco">
                                                        <img src="{{$item->icon}}" width="100px"  height="100px"><span style="color:#FFFFFF;" class="lbl"></span></a>
                                                </li>
                                                @empty
                                                @endforelse

                                            </ul>
                                            <input type="hidden" name="" id="check-select-game" value="0">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="content-change-choose-game">
                            <div class="form-group">
                                <label for="" class="control-label col-sm-4">
                                   <b> Nhà mạng</b>
                                </label>
                                <div class="col-sm-8">
                                    <div class="homenetwork" id="cardnetwork">
                                        {{--<a href="javascript:void(0)">--}}
                                            {{--<input type="radio"  name="telco" class="telco" id="viettel">--}}
                                            {{--<label for="viettel">--}}
                                                {{--<img src="{{asset('frontend/assets/img/vtt.PNG')}}" class="img-telco" alt="">--}}
                                            {{--</label>--}}
                                        {{--</a>--}}
                                        <a href="javascript:void(0)">
                                            <input type="radio" name="telco" class="telco" id="vinaphone">
                                            <label for="vinaphone">
                                                <img src="{{asset('frontend/assets/img/vnp.PNG')}}"  class="img-telco" alt="">
                                            </label>
                                        </a>
                                        <a href="javascript:void(0)" >
                                            <input type="radio" name="telco" class="telco" value="VMS"  class="img-telco" id="mobifone">
                                            <label for="mobifone">
                                                <img src="{{asset('frontend/assets/img/vms.PNG')}}" alt="">
                                            </label>
                                        </a>

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
                                            <option value="10000">10,000</option>
                                            <option value="20000">20,000</option>
                                            <option value="50000">50,000</option>
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
                            <div class="nick-game-home">
                            <div class="form-group" id="user-game-class">
                                <label for="" class="control-label col-sm-4">
                                    <b>Nick game</b>
                                </label>
                                <div class="col-sm-8">
                                    <input name="game_user" type="text" id="game-user" class="form-control isNumber text-left">
                                    <p class="text-danger" id="error-user-game-code"></p>
                                </div>
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
                    <div class="alert alert-danger" style="border-radius: 0px" id="danger">
                        <p><b>- Không hỗ trợ trường hợp chọn sai nhà mạng và mệnh giá.</b></p>
                        <p><b>- Nhập tên hiển thị nhân vật trong game. Không nhập tài khoản đăng nhập.</b></p>
                        <p>- Kiểm tra kỹ thẻ nhập vào đã chính xác chưa trước khi gửi lên hệ thống.</p>
                        <p> - Giữ lại thẻ trong quá trình chờ hệ thống xử lý.</p>
                        <p> - Tiền game sẽ được chuyển trực tiếp vào NickName yêu cầu sau khi duyệt thẻ thành công.</p>

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
                            <a href="tel:01202125678" style="text-decoration: none ;color: #ffffff"><span> <i class="fa fa-phone"></i> <strong>0120.212.5678</strong></span></a>
                        </div>
                        <div class="alert alert-success">
                            <a style="text-decoration: none ;color: #ffffff"  href="https://www.facebook.com/doithevzon" target="_blank"><span> <i class="fa fa-facebook-square" aria-hidden="true"></i> <strong>ĐẠI LÝ ĐỔI THẺ CP-GROUP</strong></span></a>
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
            $(document).on('click', '.game-telco', function () {
                var id = $(this).data('cost');
                var checkGame = $('#check-select-game').val();
                $('#provider_id').val(id);
                if (checkGame==0) {
                    $('.content-change-choose-game').load("/chon-game/" + id +" #telo-game");
                }
                $('.nick-game-home').load("/chon-game/" + id +" #nick-game");
            });
            $(document).on('click', '.telco', function () {
                $('#check-select-game').val(1);
                var gameId = $('#provider_id').val();
                if(gameId =="") {
                    alert("Bạn chưa chọn game cần nạp thẻ !");
                } else {
                    console.log('test');
                    var telco = $("input[name='telco']:checked").val();
                    $(".money-telco").load("/chon-telco/"+telco+"/"+gameId);
                }
            });
            //change price

            $(document).on('change', '#price', function () {
                var price = $('#price option:selected').val();
                if(price==999) {
                    $('#price-class').addClass('has-error');
                } else {
                    $('#price-class').removeClass('has-error');
                }
            })

            //add card
            $(document).on('click', '#add-card', function () {
                var gameId = $('#provider_id').val();
                var telco = $("input[name='telco']:checked").val();
                var price = $('#price option:selected').val();
                var cardCode = $('#card-code').val();
                var cardSeri = $('#card-seri').val();
                var gameUser = $('#game-user').val();
                if(gameId =="") {
                    alert("Bạn chưa chọn game cần nạp thẻ !");
                    return;
                }
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
                    return;
                } else {
                    $('#card-code-class').removeClass('has-error');
                }
                if(cardSeri=='') {
                    alert("Bạn chưa nhập seri thẻ cần nạp thẻ !");
                    $('#card-seri-class').addClass('has-error');
                    return;
                }else {
                    $('#card-seri-class').removeClass('has-error');
                }
                if(gameUser=='') {
                    alert("Bạn chưa nhập user game cần nạp thẻ !");
                    $('#user-game-class').addClass('has-error');
                    return;
                }else {
                    $('#user-game-class').removeClass('has-error');
                }

                $('#form-add-card').submit();
            });
        })

    </script>
@stop