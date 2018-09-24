@extends('frontend.layouts.master')
@section('title')
    Đăng nhập
@stop
@section('content')
    <div class="container" id="containerContent">
        <section class="HomeContent innerFloat">
            <div class="wrapper" style="height:520px; margin-top: 50px;">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{URL::route('user.login')}}" method="post" id="form-login-page">
                        {{csrf_field()}}
                        @include('frontend.partials.message')
                        <div id="message-login-page" style="display:none;">
                            <div class="alert alert-danger alert-dismissible fade in" style="display:none;padding: 7px; border-radius: 0px;" id="message-login-error-page">
                                <span id="message-login-error-page"></span>
                            </div>
                        </div>
                    <div class="modal-body" id="frmLoginPage">
                        <h3 style="color:#e02729;">ĐĂNG NHẬP</h3>
                        <div id="dloginMessage" style="display:none;"></div>
                        <div class="form-group" id="phone-error-page">
                            <input name="login-phone" type="text" id="login-phone-page" class="form-control isNumber IconPhone" class="form-control isNumber IconPhone" placeholder="Số Điện thoại" tabindex="900" autocomplete="off">
                            <p class="text-danger" id="error-page-phone"></p>
                        </div>
                        <div class="form-group" id="password-error-page">
                            <input name="login-password" type="password" id="login-password-page"  class="form-control IconPass" placeholder="Mật khẩu" tabindex="901" autocomplete="off">
                            <p class="text-danger" id="error-page-password"></p>
                        </div>
                        <div class="form-group form-inline text-right">
                            <a href="javascript:void(0)" id="btn-show-form-forget" class="ForgetPass">Quên mật khẩu?</a>
                        </div>
                        <input type="submit" name="login-page" value="Đăng nhập" id="btn-login-page" class="btn btn-block BtnDangNhap" style="margin-bottom:10px; color:#fff; background-color:#e02729;">
                        <p class="text-center">
                            Bạn chưa là thành viên?
                            <a href="/dang-ky/" class="ColorDo">Đăng Ký Mới</a>
                        </p>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script src="{{asset('frontend/assets/js/master/login.js')}}"></script>
@stop