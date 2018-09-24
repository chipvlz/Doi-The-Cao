@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Thông tin tài khoản</h4></div>
        <div class="row">
            <div class="form-horizontal col-sm-6 content-margin">
                <form class="ng-pristine ng-valid">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Họ và tên:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" value="{{$userProfile->fullname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input type="text" name="phone" class="form-control" value="{{$userProfile->phone}}" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="button" class="btn btn-default">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ngIf: user.useOdp == 1 -->
        </div>
    </div>
@stop