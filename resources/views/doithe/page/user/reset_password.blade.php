@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Thay đổi mật khẩu</h4></div>
        <div class="row">
            <div class="form-horizontal col-sm-6 content-margin">
                <form class="ng-pristine ng-valid" action="" method="post">
                    {{csrf_field()}}
                    <div class="form-group {{($errors->has('password_current'))?"has-error":""}}">
                        <label class="control-label col-sm-4">Mẩu khẩu hiện tại:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password_current"  value="{{old('password_current')}}"  class="form-control ng-pristine ng-untouched ng-valid" ng-model="password">
                            <p class="text-danger">{{$errors->first('password_current')}}</p>
                        </div>
                    </div>
                    <div class="form-group {{($errors->has('password_new'))?"has-error":""}}">
                        <label class="control-label col-sm-4">Mẩu khẩu mới:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password_new"  value="{{old('password_new')}}"  class="form-control ng-pristine ng-untouched ng-valid" ng-model="newPassword">
                            <p class="text-danger">{{$errors->first('password_new')}}</p>
                        </div>
                    </div>
                    <div class="form-group {{($errors->has('password_new_confirm'))?"has-error":""}}">
                        <label class="control-label col-sm-4">Nhập lại:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password_new_confirm"   value="{{old('password_new_confirm')}}"  class="form-control ng-pristine ng-untouched ng-valid" ng-model="rePassword">
                            <p class="text-danger">{{$errors->first('password_new_confirm')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop