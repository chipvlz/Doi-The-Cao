@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Đăng ký</h4>
            <p>Vui lòng tạo một tài khoản nếu bạn chưa phải thành viên. Thông tin đăng ký của bạn sẽ hoàn toàn được bảo mật.</p>
        </div>
        <div class="row" style="padding-bottom: 15px">
            <div class="form-horizontal col-sm-6 content-margin">
                <form class="ng-pristine ng-valid ng-valid-email" method="post" action="{{URL::route('user.post-register')}}" onsubmit="return checkSubmit();">
                    {{csrf_field()}}

                    <div class="form-group" id="phone-error">
                        <label class="control-label col-sm-4">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone" id="phone" class="form-control ng-pristine ng-untouched ng-valid ng-valid-email" ng-model="email">
                            <p class="text-danger" id="phone-message"></p>
                        </div>
                    </div>
                    <div class="form-group" id="password-error">
                        <label class="control-label col-sm-4">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" id="password" class="form-control ng-pristine ng-untouched ng-valid" ng-model="password">
                            <p class="text-danger" id="password-message"></p>
                        </div>
                    </div>
                    <div class="form-group" id="confirm-password-error">
                        <label class="control-label col-sm-4">Nhập lại mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" name="confirm_password" id="confirm-password" class="form-control ng-pristine ng-untouched ng-valid" ng-model="rePassword">
                            <p class="text-danger" id="confirm-password-message"></p>
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
@section('script')
    <script>
        function checkSubmit() {
            var phone = $('#phone').val();
            var password = $('#password').val();
            var cpPassword = $('#confirm-password').val();
            if(phone=='') {
                $('#phone-error').addClass('has-error');
                $('#phone-message').html('Vui lòng nhập số điện thoại!');
                $('#phone').focus();
                return false;
            } else {
                $('#phone-error').removeClass('has-error');
                $('#phone-message').html('');
            }
            if(password=='') {
                $('#password-error').addClass('has-error');
                $('#password-message').html('Vui lòng nhập mật khẩu!');
                $('#password').focus();
                return false;
            } else {
                $('#password-error').removeClass('has-error');
                $('#password-message').html('');
            }
            if(cpPassword=='' || cpPassword != password) {
                $('#confirm-password-error').addClass('has-error');
                $('#confirm-password-message').html('Vui lòng nhập lại mật khẩu hoặc chưa nhập đúng mật khẩu!');
                $('#confirm-password').focus();
                return false;
            } else {
                $('#confirm-password-error').removeClass('has-error');
                $('#confirm-password-message').html('');
            }

            return true;
        }
    </script>
@stop