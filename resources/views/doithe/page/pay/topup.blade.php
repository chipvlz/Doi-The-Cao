@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Nạp tiền điện thoại</h4>
            <p>Vui lòng nhập số điện thoại, mệnh giá cần nạp:</p>
        </div>
        <div class="row">
            <div class="form-horizontal col-sm-8 content-margin">
                <form class="ng-pristine ng-valid" action="{{URL::route('doithe.topup')}}" method="post" onsubmit="return checkSubmit();">
                    {{csrf_field()}}
                    <div class="form-group" id="phone-error">
                        <label class="control-label col-sm-4">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input name="phone" value="{{old('phone')}}" id="phone" type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="09.., 01.." ng-model="target">
                            <p class="text-danger" id="phone-message"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Mệnh giá:</label>
                        <div class="col-sm-8">
                            <select name="money" class="form-control" id="money">
                                <option value="10000">10.000</option>
                                <option value="20000">20.000</option>
                                <option value="50000">50.000</option>
                                <option value="100000">100.000</option>
                                <option value="200000">200.000</option>
                                <option value="500000">500.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn login-button">
                                <i class="fa fa-arrow-right"></i> Nạp tiền
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
            if (phone=='' || phone.length<10) {
                $('#phone-error').addClass('has-error');
                $('#phone-message').html('Vui lòng nhập số điện thoại hoặc sai định dạng !');
                return false;
            } else {
                $('#phone-error').removeClass('has-error');
                $('#phone-message').html('');
            }
            return true;
        }
    </script>
@stop