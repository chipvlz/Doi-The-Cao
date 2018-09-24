@extends('frontend.layouts.master')
@section('title')
    Thông tin tài khoản
@stop
@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/card.css')}}">
@stop
@section('content')
    <section class="HomeContent innerFloat">
        <div class="MainContent row">

            <!-- end SideBarLeft -->
            <div class="BlockContent col-md-9">
                @include('frontend.partials.message')
                <h3><span>
      Thông tin tài khoản
      </span>
                </h3>
                <div class="clearfix"></div>
                <div class="clearfix" id="">
                    <table class="table TblNoBorder">
                        <tbody>
                        <tr class="header">
                            <td class="text-right">Số điện thoại</td>
                            <td>  <span id="phone-profile" class="ColorDo">{{Auth::user()->phone}}</span></td>
                        </tr>
                        <tr>
                            <td class="text-right">Email</td>
                            <td><b><span id="email-profile">{{Auth::user()->email}}</span></b></td>
                        </tr>
                        <tr class="split">
                            <td class="text-right">Ngày mở tài khoản</td>
                            <td><b><span id="date-profile">{{date('d-m-Y',strtotime(Auth::user()->created_at))}}</span></b></td>
                        </tr>

                        <tr class="last split">
                            <td class="text-right">Tình trạng tài khoản</td>
                            @if (Auth::user()->active==1)
                                <td class="text-success"><b><span id="active-profile">Active</span></b></td>
                            @else
                                <td class="text-danger"><b><span id="active-profile">InActive</span></b></td>
                            @endif
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end BgTblUserInfo -->

            </div>
            <!-- endn BlockContent -->

        </div>
    </section>
@stop
@section('script')
    <script src="{{asset('frontend/assets/js/user/update_profile.js')}}"></script>
@stop