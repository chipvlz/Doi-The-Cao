@extends('frontend.layouts.master')
@section('title')
Đăng ký
@stop
@section('content')
<div class="register">
    <div class="row">
        <form action="{{URL::route('user.post-register')}}" method="post" id="form-register">
            {{csrf_field()}}
        <div class="col-md-12">
            <div class="LoginFormInfo col-md-8 col-md-offset-2">
               @include('frontend.partials.message')
                <div class="form-horizontal">
                    <h3>
                        <span>Thông Tin Đăng Nhập</span>
                    </h3>
                    <div class="form-group {{($errors->has('phone'))?'has-error':''}}" id="phone-error-class">
                        <label for="" class="col-sm-4 control-label IconPosReg IconPhoneReg">
                            Số điện thoại (<span class="ColorDo">*</span>)
                        </label>
                        <div class="col-sm-7">
                            <input  type="text" id="txtUsername" name="phone" value="{{old('phone')}}" class="form-control isNumber">
                            <p class="text-danger">{{$errors->first('phone')}}</p>
                            <p class="TextNote" style="display: {{($errors->has('phone'))?"none":"block"}}" id="phone-error-message">
                                Số điện thoại này dùng để đăng nhập và nhận các thông tin tài khoản
                            </p>
                        </div>
                    </div>
                    <div class="form-group" id="password-error-class">
                        <label for="" class="control-label col-sm-4 IconPosReg IconPassReg">
                            Mật khẩu (<span class="ColorDo">*</span>)
                        </label>
                        <div class="col-sm-7">
                            <input  type="password" maxlength="22" name="password" id="txtPassword" class="form-control" autocomplete="off">
                            <p class="TextNote"  id="password-error-message">
                                Ít nhất từ 6 đến 8 ký tự
                            </p>
                        </div>
                    </div>
                    <div class="form-group " id="cp-password-error-class">
                        <label for="" class="control-label col-sm-4 IconPosReg IconPassReg">
                            Nhập lại mật khẩu (<span class="ColorDo">*</span>)
                        </label>
                        <div class="col-sm-7">
                            <input  type="password" maxlength="22" id="txtRePassword" name="confirm_password" class="form-control" autocomplete="off">
                            <p class="TextNote"  id="cp-password-error-message">
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-4">
                            <button type="button" class="RegNow" id="btn-register"> Đăng ký ngay</button>
                        </div>

                        <!-- end col-sm-8 -->
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
@section('script')
    <script src="{{asset('frontend/assets/js/user/user_register.js')}}"></script>
@stop