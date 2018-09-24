@extends('frontend.layouts.master')
@section('title')
    Thanh toán
@stop
@section('link')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/sms.css')}}">
@stop
@section('content')
    <section class="HomeContent innerFloat">
        <div class="MainContent row">
            <div class="SideBarLeft col-md-3">
            @include('frontend.partials.meu_left')
            <!-- end cssmenu -->
                <div class="support-left">
                    <p>Chăm sóc khách hàng</p>
                    <p class="mobile" style="font-size:18px;text-transform: lowercase;">19006611 - Ext 4</p>
                </div>
            </div>
            <!-- end SideBarLeft -->
            <div class="BlockContent col-md-9">

                    <div class="table-wrapper" id="load-table-sim">
                        <div class="alert alert-success" id="alert-pay-success" style=" display:none;padding: 7px; border-radius: 0px;">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, sit?</span>
                        </div>
                        <div class="alert alert-danger" id="alert-pay-error"  style="display:none;padding: 7px; border-radius: 0px;">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, enim?</span>
                        </div>

                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2>Nạp sim</h2></div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Thêm mới</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-bordered" id="table-pay-card">
                            <thead>
                            <tr>
                                <th>SĐT</th>
                                <th>Loại thuê bao</th>
                                <th>Số tiền</th>
                                <th>Số lần nạp</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
            </div>
            <!-- endn BlockContent -->
        </div>
    </section>

@stop
@section('script')
    <script src="{{asset('frontend/assets/js/master/sms.js')}}"></script>
@stop