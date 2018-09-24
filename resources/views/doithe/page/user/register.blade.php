@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Đăng ký</h4>
            <p>Vui lòng tạo một tài khoản nếu bạn chưa phải thành viên. Thông tin đăng ký của bạn sẽ hoàn toàn được bảo mật.</p>
        </div>
        <div class="row" style="padding-bottom: 15px">
            <div class="form-horizontal col-sm-6 content-margin">
                <form class="ng-pristine ng-valid ng-valid-email" method="post" action="{{URL::route('user.post-register')}}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="control-label col-sm-4">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone" class="form-control ng-pristine ng-untouched ng-valid ng-valid-email" ng-model="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control ng-pristine ng-untouched ng-valid" ng-model="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nhập lại mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" name="confirm_password" class="form-control ng-pristine ng-untouched ng-valid" ng-model="rePassword">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4"></label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default ">
                                <i class="fa fa-arrow-right"></i> Đăng ký
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@stop