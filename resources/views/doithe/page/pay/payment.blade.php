@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Rút tiền về TK Ngân hàng</h4>
            <p>Vui lòng nhập số tiền muốn rút(số dư phải lớn hơn {{number_format(config('constant.money_with_draw'))}}):</p>
        </div>
        <div class="row">
            <div class="form-horizontal col-sm-8 content-margin">
                <form class="ng-pristine ng-valid" action="{{URL::route('post-bank.back-pay')}}" method="post" onsubmit="return checkSubmit();">
                    {{csrf_field()}}
                    <div class="form-group" id="bank-error">
                        <label class="control-label col-sm-4">Ngân hàng:</label>
                        <div class="col-sm-8">
                            <select name="bank" id="bank" class="form-control">
                                <option value="999">Chọn ngân hàng</option>
                                @forelse($bank as $item)
                                    <option value="{{$item->id}}">{{$item->bank_name."-".$item->bank_number."-".$item->fullname}}</option>
                                @empty
                                @endforelse
                            </select>
                            <p class="text-danger" id="bank-message"></p>
                        </div>
                    </div>
                    <div class="form-group" id="money-error">
                        <label class="control-label col-sm-4">Số tiền:</label>
                        <div class="col-sm-8">
                            <input type="number" name="money" id="money" value="{{old('money')}}" class="form-control ng-pristine ng-untouched ng-valid" ng-model="amount">
                            <p class="text-danger" id="money-message"></p>
                        </div>
                    </div>
                    <div class="form-group" id="password-two-error">
                        <label for="ca" class="control-label col-sm-4">
                            <b>Mật Khẩu Cấp 2</b>
                        </label>
                        <div class="col-sm-8">
                            <input name="password_two" type="text"  id="password-two" value="{{old('password_two')}}" class="form-control isNumber text-left">
                            <p class="text-danger" id="password-two-message"></p>
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

@section('script')
    <script>
        function checkSubmit() {
            var bank = $('#bank option:selected').val();
            var money = $('#money').val();
            var passwordTwo = $('#password-two').val();
            if (bank==999) {
                $('#bank-error').addClass('has-error');
                $('#bank-message').html('Vui lòng chọn ngân hàng !');
                return false;
            } else {
                $('#bank-error').removeClass('has-error');
                $('#bank-message').html('');
            }

            if (money<=0) {
                $('#money-error').addClass('has-error');
                $('#money-message').html('Vui lòng nhập số tiền cần rút!');
                return false;
            } else {
                $('#money-error').removeClass('has-error');
                $('#money-message').html('');
            }


            if (passwordTwo=='') {
                $('#password-two-error').addClass('has-error');
                $('#password-two-message').html('Vui lòng nhập mật khẩu cấp 2!');
                return false;
            } else {
                $('#password-two-error').removeClass('has-error');
                $('#password-two-message').html('');
            }



            return true;
        }
    </script>
@stop