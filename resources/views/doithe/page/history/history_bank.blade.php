@extends('doithe.layouts.master')
@section('content')
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/card.css')}}">
    <style>
        label > input{ /* HIDE RADIO */
            visibility: hidden; /* Makes input not-clickable */
            position: absolute; /* Remove input from document flow */
        }
        label > input + img{ /* IMAGE STYLES */
            cursor:pointer;
            border:2px solid transparent;
        }

        label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
            border:2px solid #e02729;
        }
        label > input:checked + p.game-check {
            display: block;
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
            margin-top: 0px;
        }
        .show-money {
            text-align: center;
            margin-top: 20px;
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
                            <span>Tra cứu</span>
                        </h2>
                    </div>
                    <!-- end BlockBank -->
                    <div class="clearfix"></div>
                    <div id="muaTheGate" class="InfoGoldCharge" style="display: block;">
                        <div class="search-input">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-md-4">
                                        <lable for="">Từ ngày</lable>
                                        <input type="text" id="start-date" class="form-control" name="start_date">
                                    </div>
                                    <div class="col-md-4">
                                        <lable for="">Đến ngày</lable>
                                        <input type="text" class="form-control" id="end-date" name="end_date">
                                    </div>

                                    <div class="col-md-4">
                                        @if(\Auth::check())
                                            <button type="submit" style="margin-top: 20px; background: #3c763d" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Tra cứu</button>
                                        @else
                                            <input type="button" name="" style="margin-top: 20px; background: #3c763d" class="btn btn-success btn-sm"  onclick="return confirm('Vui lòng đăng nhập !')" value="Tra cứu">
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="show-money">
                            {{--<p> <span class="btn btn-danger">Tổng thẻ:{{number_format($data['total'])}} đ  </span> &nbsp; <i class="fa fa-exchange"> </i>  &nbsp;<span class="btn btn-success">Thực nhận:0 đ</span></p>--}}
                        </div>
                        <div class="content-search" style="margin-top: 30px">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead style="    background: #3c763d;color: #ffffff;">
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã Thẻ</th>
                                        <th>Seri Thẻ</th>
                                        <th>Nhà Mạng</th>
                                        <th>Mệnh Giá</th>
                                        <th>Thực Nhận</th>
                                        <th>Nội Dung</th>

                                        <th>Thời Gian</th>
                                        <th>Tình trạng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--@if(Auth::check())--}}
                                        {{--@forelse($data['record'] as $item)--}}
                                            {{--<tr>--}}
                                                {{--<td>{{++$stt}}</td>--}}
                                                {{--<td>{{$item->card_code}}</td>--}}
                                                {{--<td>{{$item->card_seri}}</td>--}}
                                                {{--<td>--}}
                                                    {{--@if($item->provider_code=="VTT")--}}
                                                        {{--<span class="btn btn-success btn-xs">VIETTEL</span>--}}
                                                    {{--@elseif($item->provider_code=="VNP")--}}
                                                        {{--<span class="btn btn-danger btn-xs">VINAPHONE</span>--}}
                                                    {{--@elseif($item->provider_code=="VMS")--}}
                                                        {{--<span class="btn btn-primary btn-xs">MOBIFONE</span>--}}
                                                    {{--@endif--}}

                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--@if($item->price==0)--}}
                                                        {{--<b class="text-danger">{{number_format($item->du_doan)}}</b>--}}
                                                    {{--@else--}}
                                                        {{--<b class="text-danger">{{number_format($item->price)}}</b>--}}
                                                    {{--@endif--}}

                                                {{--</td>--}}
                                                {{--<td></td>--}}
                                                {{--<td>{{$item->note}}</td>--}}
                                                {{--<td class="text-success">{{$item->created_at}}</td>--}}

                                                {{--<td>--}}
                                                    {{--@if($item->status==0)--}}
                                                        {{--<span class="btn btn-warning btn-xs">--}}
                                                        {{--Chờ xử lý--}}
                                                        {{--</span>--}}
                                                    {{--@elseif($item->status==2)--}}
                                                        {{--<span class="btn btn-success btn-xs">--}}
                                                        {{--Đổi thẻ thành công--}}
                                                        {{--</span>--}}
                                                    {{--@elseif($item->status==3)--}}
                                                        {{--<span class="btn btn-danger btn-xs">--}}
                                                        {{--Đổi thẻ không thành công--}}
                                                        {{--</span>--}}
                                                    {{--@endif--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                        {{--@empty--}}
                                            {{--<tr>--}}
                                                {{--<td colspan="9" class="text-center">Không tìm thấy dữ liệu cần tìm!</td>--}}
                                            {{--</tr>--}}
                                        {{--@endforelse--}}
                                    {{--@endif--}}
                                    </tbody>
                                </table>
                                <div class="pagination-pay-phone" style="text-align: center">
                                    {{--{{--}}
                                    {{--$data['record']->appends([--}}
                                            {{--'start_date'=>Request::get('start_date',date('Y-m-d')),--}}
                                            {{--'end_date'=>Request::get('end_date',date('Y-m-d')),--}}
                                        {{--])->links()--}}
                                    {{--}}--}}
                                </div>
                            </div>
                        </div>
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
            $('#start-date').datepicker({
                autoclose: true,
                dateFormat: 'yy-mm-dd'
            }).datepicker("setDate", new Date("{{date('Y', strtotime(Request::get('start_date',date('Y-m-d'))))}}", parseInt("{{date('m', strtotime(Request::get('start_date',date('Y-m-d'))))}}")-1,"{{date('d', strtotime(Request::get('start_date',date('Y-m-d'))))}}"));
            $('#end-date').datepicker({
                autoclose: true,
                dateFormat: 'yy-mm-dd'
            }).datepicker("setDate", new Date("{{date('Y', strtotime(Request::get('end_date',date('Y-m-d'))))}}", parseInt("{{date('m', strtotime(Request::get('end_date',date('Y-m-d'))))}}")-1,"{{date('d', strtotime(Request::get('end_date',date('Y-m-d'))))}}"));
        })

    </script>
@stop
