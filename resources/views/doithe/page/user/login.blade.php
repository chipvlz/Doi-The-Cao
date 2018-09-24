@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Đăng nhập</h4>
            <p>Vui lòng nhập số điện thoại &amp; mật khẩu:</p>
        </div>
        <div class="row" style="padding-bottom: 15px">
            <div class="form-horizontal col-sm-6 content-margin" >
                <form class="ng-pristine ng-valid" action="{{URL::route('user.login')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-sm-4">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input type="text" value="{{old('phone')}}" required name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" required name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4"></label>
                        <div class="checkbox col-sm-8">
                            <label>
                                <input name="remember" type="checkbox">
                                <span>Nhớ đăng nhập</span>
                            </label>
                            <a href="#/forgot-password.html" class="pull-right">Quên mật khẩu</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-arrow-right"></i> Đăng nhập
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop