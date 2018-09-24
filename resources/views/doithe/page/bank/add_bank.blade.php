@extends('doithe.layouts.master')
@section('content')
<div class="container content clearfix ng-scope">
    <div class="form-group content-margin">
        <h4>Thêm ngân hàng nhận tiền</h4></div>
    <div class="row">
        <div class="form-horizontal col-sm-8 content-margin">
            <form class="ng-pristine ng-valid" action="{{URL::route('bank.post-index')}}" method="post" onsubmit="return checkSubmit();">
                {{csrf_field()}}
                <div class="form-group" id="bank-name-error">
                    <label class="control-label col-sm-4">Chọn ngân hàng:</label>
                    <div class="col-sm-8">
                        <select name="bank_name" class="form-control" id="bank_name">
                            <option value="999">--------- Chọn ngân hàng ---------</option>
                            @forelse(config('constant.bank') as $k=>$v)
                            <option {{(old('bank_name')==$k)?"selected":""}} value="{{$k}}">{{$v}}</option>
                            @empty
                            @endforelse
                        </select>
                        <p class="text-danger" id="bank-name-message"></p>
                    </div>
                </div>
                <div class="form-group" id="bank-name-number">
                    <label class="control-label col-sm-4">Số tài khoản:</label>
                    <div class="col-sm-8">
                        <input type="text" name="bank_number" id="bank_number" value="{{old('bank_number')}}" class="form-control ng-pristine ng-untouched ng-valid" ng-model="account">
                        <p class="text-danger" id="bank-number-message"></p>
                    </div>
                </div>
                <div class="form-group" id="fullnam-error">
                    <label class="control-label col-sm-4">Tên tài khoản:</label>
                    <div class="col-sm-8">
                        <input type="text" name="fullname" id="fullname" value="{{old('fullname')}}" class="form-control ng-pristine ng-untouched ng-valid" ng-model="name">
                        <p class="text-danger" id="fullname-message"></p>
                    </div>
                </div>
                <div class="form-group" id="bank-branch-error">
                    <label class="control-label col-sm-4">Chi nhánh:</label>
                    <div class="col-sm-8">
                        <input type="text" name="bank_branch" id="bank_branch" value="{{old('bank_branch')}}" class="form-control ng-pristine ng-untouched ng-valid" ng-model="name">
                        <p class="text-danger" id="bank-branch-message"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn login-button"><i class="fa fa-arrow-right"></i> Thêm</button>
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
            var bankName = $('#bank_name option:selected').val();
            var bankNumber = $('#bank_number').val();
            var bankName =  $('#fullname').val();
            var bankBrach = $('#bank_branch').val();
            if (bankName==999) {
                $('#bank-name-error').addClass('has-error');
                $('#bank-name-message').html('Vui lòng chọn ngân hàng!');
                $('#bank_name').focus();
                return false;
            } else {
                $('#bank-name-error').removeClass('has-error');
                $('#bank-name-message').html('');
            }
            if (bankNumber=='') {
                $('#bank-number-error').addClass('has-error');
                $('#bank-number-message').html('Vui lòng nhập số tài khoản!');
                $('#bank_number').focus();
                return false;
            } else {
                $('#bank-number-error').removeClass('has-error');
                $('#bank-number-message').html('');
            }
            if (bankName=='') {
                $('#fullname-error').addClass('has-error');
                $('#fullname-message').html('Vui lòng nhập tên tài khoản!');
                $('#fullname').focus();
                return false;
            } else {
                $('#fullname-error').removeClass('has-error');
                $('#fullname-message').html('');
            }
            if (bankBrach=='') {
                $('#bank-branch-error').addClass('has-error');
                $('#bank-branch-message').html('Vui lòng nhập chi nhánh ngân hàng!');
                $('#bank_branch').focus();
                return false;
            } else {
                $('#bank-branch-error').removeClass('has-error');
                $('#bank-branch-message').html('');
            }
            return true;
        }
    </script>
@stop