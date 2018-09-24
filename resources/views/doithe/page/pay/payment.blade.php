@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Rút tiền về TK Ngân hàng</h4>
            <p>Vui lòng nhập số tiền muốn rút(số dư phải lớn hơn {{number_format(config('constant.money_with_draw'))}}):</p>
        </div>
        <div class="row">
            <div class="form-horizontal col-sm-8 content-margin">
                <form class="ng-pristine ng-valid" action="{{URL::route('post-bank.back-pay')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-sm-4">Số tiền:</label>
                        <div class="col-sm-8">
                            <input type="number" name="money" value="{{old('money')}}" class="form-control ng-pristine ng-untouched ng-valid" ng-model="amount">
                        </div>
                    </div>
                    <div class="form-group" id="card-seri-class">
                        <label for="ca" class="control-label col-sm-4">
                            <b>Mật Khẩu Cấp 2</b>
                        </label>
                        <div class="col-sm-8">
                            <input name="password_two" type="text" required id="password_two" value="{{old('password_two')}}" class="form-control isNumber text-left">
                            <p class="text-danger" id="error-card-seri"></p>
                            <p><a href="{{URL::route('user.password-two')}}" class="text-danger"><b>Tạo mật khẩu cấp 2 nếu chưa có</b></a></p>
                            <p><a href="{{URL::route('bank.index')}}" class="text-success"><b> Cập nhật thông tin tài khoản ngân hàng nếu cần</b></a></p>
                        </div>

                    </div>
                    <!-- ngIf: amount > 0 -->
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button id="buyCardButton" type="submit" class="btn login-button">
                                <i class="fa fa-arrow-right"></i> Rút tiền
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop