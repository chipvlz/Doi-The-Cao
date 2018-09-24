@extends('frontend.layouts.master')
@section('title')
    Tạo Mật Khẩu Cấp 2
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
                <form action="{{URL::route('user.post-password-two')}}" method="post">
                    {{csrf_field()}}
                    <h3><span>
                  Tạo Mật Khẩu Cấp 2
                  </span>
                    </h3>
                    <div class="clearfix"></div>
                    <div class="form-horizontal" data-toggle="validator" role="form">
                        <div class="form-group {{($errors->has('password_new'))?"has-error":""}}" id="password_new_class">
                            <label class="control-label col-sm-3 col-sm-offset-1">
                                Mật khẩu mới cấp 2
                            </label>
                            <div class="col-sm-7">
                                <input name="password_new" type="password" value="{{old('password_new')}}" maxlength="50" id="password_new" tabindex="101" class="form-control">
                                <p class="text-danger" id="password_new_message"> {{$errors->first('password_new')}}</p>
                            </div>
                        </div>
                        <div class="form-group {{($errors->has('password_new_confirm'))?"has-error":""}}" id="password_new_confirm_class">
                            <label class="control-label col-sm-3 col-sm-offset-1">
                                Nhập lại mật khẩu mới cấp 2
                            </label>
                            <div class="col-sm-7">
                                <input name="password_new_confirm" type="password" value="{{old('password_new_confirm')}}" maxlength="50" id="password_new_confirm" tabindex="102" class="form-control">
                                <p class="text-danger" id="password_new_confirm_message"> {{$errors->first('password_new_confirm')}}</p>
                            </div>
                        </div>
                        <div class="clearfix Mb30"></div>
                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-4">
                                <input type="submit" name="change-password" value="Thêm mới"  class="RegNow">
                            </div>
                        </div>
                    </div>
                </form>
                <label id="ctl00_ctl00_ctl00_ContentPlaceHolder1_contentMain_lblScriptsLogin"></label>
                <label id="ctl00_ctl00_ctl00_ContentPlaceHolder1_contentMain_VendorLink_lblScripts">
                </label>
            </div>
            <!-- endn BlockContent -->

        </div>
    </section>
@stop
