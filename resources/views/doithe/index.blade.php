@extends('doithe.layouts.master')
@section('content')
    <div class="main-slider">
        <div class="container content clearfix ng-scope">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('doithe/assets/img/slider04-compressed.jpg')}}" alt="Los Angeles" style="width: 100%;">
                    </div>

                    <div class="item">
                        <img src="{{asset('doithe/assets/img/slider03-compressed.jpg')}}" alt="Chicago">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">

                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">

                </a>
            </div>
        </div>
    </div>
    <div class="news clearfix ng-scope">
        <div class="col-md-8">
            <div class="title-news-sale">
                <a href="javascript:void(0);">Chiết khấu đổi thẻ:</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nhà mạng</th>
                    <th class="text-right">Phí giao dịch</th>
                    <th class="text-right">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @forelse($telco as $telcos)
                <tr>
                    <td>
                       {{$telcos->name}}
                    </td>
                    <td class="text-right ng-binding">{{$telcos->rate}}%</td>
                    <td class="text-right">
                        @if($telcos->status==1)
                        <span class="btn btn-success btn-xs">Hoạt động</span>
                        @elseif($telcos->status==0)
                            <span class="btn btn-danger btn-xs">Bảo trì</span>
                        @endif
                    </td>
                </tr>
                    @empty
                @endforelse

                </tbody>
            </table>
        </div>
        <div class="col-md-4 hidden-xs">
            <div class="title-news-sale">
                <a href="javascript:void(0);">Tin tức - Khuyến mại
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

            <ul class="list-unstyled">
                <li>
                    <a class="info-news clearfix" href="javascript:void(0);">
                        <div class="info-news-left">
                            <p class="day">
                                <span>02</span>
                            </p>
                            <p class="month">
                                <span>th.06</span>
                            </p>
                        </div>
                        <div class="info-news-right">
                            <span>[03/06/2016] Mobifone khuyến mại 50% giá trị thẻ nạp</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="info-news clearfix" href="javascript:void(0);">
                        <div class="info-news-left">
                            <p class="day">
                                <span>09</span>
                            </p>
                            <p class="month">
                                <span>th.05</span>
                            </p>
                        </div>
                        <div class="info-news-right">
                            <span>[15/5-15/6] TRẢI NGHIỆM DỊCH VỤ - NHẬN NGAY ƯU ĐÃI 100K</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="info-news clearfix" href="javascript:void(0);">
                        <div class="info-news-left">
                            <p class="day">
                                <span>06</span>
                            </p>
                            <p class="month">
                                <span>th.05</span>
                            </p>
                        </div>
                        <div class="info-news-right">
                            <span>QUY ĐỊNH PHÍ THAM GIA CHƯƠNG TRÌNH TRẢ GÓP 0%</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @stop
