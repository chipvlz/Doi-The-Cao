@extends('frontend.layouts.master')
@section('title')
    Bảng giá
@stop
@section('link')
    <style>
        .BlockContent {
             margin-bottom: 0px;
            font-family: "roboto-light";
            margin-top: 50px;
        }
        i.fa.fa-phone {
            font-size: 23px;
            padding-right: 4px;
            vertical-align: middle;
        }
    </style>
@stop
@section('content')
    <div class="row">
        <div class="BlockContent col-md-8">
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
                        <td>Game</td>
                        <td>Tỷ giá quy đổi</td>
                        <td>Link</td>
                    </tr>
                    <tr class="split">
                        <td>1</td>
                        <td>
                            <img src="{{asset('frontend/assets/img/manvip.PNG')}}" width="70px" height="70px" alt="">
                        </td>
                        <td><b class="text-danger">70%</b></td>
                        <td><a href="//manvip.club" target="_blank"><b class="text-success">manvip.club</b></a></td>
                    </tr>

                    <tr class="split">
                        <td>2</td>
                        <td>
                            <img src="{{asset('frontend/assets/img/ngonclub.jpg')}}" width="70px" height="70px" alt="">
                        </td>
                        <td><b class="text-danger">70%</b></td>
                        <td><a href="//ngon.club" target="_blank"><b class="text-success">ngon.club</b></a></td>
                    </tr>
                    <tr class="split">
                        <td>3</td>
                        <td>
                            <img src="{{asset('frontend/assets/img/pocvip.jpg')}}" width="70px" height="70px" alt="">
                        </td>
                        <td><b class="text-danger">70%</b></td>
                        <td><a href="//pocvip.com" target="_blank"><b class="text-success">pocvip.com</b></a></td>
                    </tr>
                    <tr class="split">
                        <td>4</td>
                        <td>
                            <img src="{{asset('frontend/assets/img/boza.jpg')}}" width="70px" height="70px" alt="">
                        </td>
                        <td><b class="text-danger">70%</b></td>
                        <td><a href="//boza.club" target="_blank"><b class="text-success">boza.club</b></a></td>
                    </tr>
                    </tbody>
                </table>
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
                <div class="alert alert-danger">
                    <a style="text-decoration: none ;color: #ffffff"  href="https://www.facebook.com/doithevzon" target="_blank"><span> <i class="fa fa-facebook-square" aria-hidden="true"></i> <strong>ĐẠI LÝ ĐỔI THẺ CP-GROUP</strong></span></a>
                </div>
            </div>
        </div>
        <div class="BlockContent col-md-4">
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
        </div>
        
    </div>
@stop