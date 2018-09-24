@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Đổi thẻ cào thành tiền mặt</h4>
        </div>
        <div class="row">
            <div class="form-horizontal col-sm-8 content-margin">
                <form class="ng-pristine ng-valid">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Loại thẻ:</label>
                        <div class="col-sm-8">
                            <div role="toolbar" class="btn-toolbar">
                                <div data-toggle="buttons" class="btn-group">
                                    <label class="btn btn-default" style="width:25%">
                                        <input type="radio" value="vtt" title="Viettel" name="provider">
                                        <img src="{{asset('doithe/assets/img/vtt.png')}}" style="width:100%">
                                    </label>
                                    <label class="btn btn-default" style="width:25%">
                                        <input type="radio" value="vms" title="Mobifone" name="provider">
                                        <img src="{{asset('doithe/assets/img/vms.png')}}" style="width:100%">
                                    </label>
                                    <label class="btn btn-default" style="width:25%">
                                        <input type="radio" value="vnp" title="Vinaphone" name="provider">
                                        <img src="{{asset('doithe/assets/img/vnp.png')}}" style="width:100%">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Thông tin phí:</label>
                        <div class="control-label col-sm-8">
																						<span class="text-left pull-left">Viettel:
																							<strong class="ng-binding">36%</strong>, Mobifone:
																							<strong class="ng-binding">36%</strong>, Vinaphone:
																							<strong class="ng-binding">36%</strong>, Gate:
																							<strong class="ng-binding">36%</strong>
                                                                                            <!-- ngIf: scoinActive -->
																						</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Mã pin:</label>
                        <div class="col-sm-8">
                            <input type="text" id="pin" name="pin" class="form-control ng-pristine ng-untouched ng-valid" ng-model="pin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Mã serial:</label>
                        <div class="col-sm-8">
                            <input type="text" id="serial" name="serial" class="form-control ng-pristine ng-untouched ng-valid" ng-model="serial">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button id="buyCardButton" type="submit" class="btn login-button" ng-click="charge()">
                                <i class="fa fa-arrow-right"></i> Nạp thẻ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop