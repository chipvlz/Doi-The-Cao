@extends('doithe.layouts.master')
@section('content')
    <div class="container content clearfix ng-scope">
        <div class="form-group content-margin">
            <h4>Thêm ngân hàng nhận tiền</h4></div>
        <div class="row">
            <div class="form-horizontal col-sm-8 content-margin">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Ngân hàng</th>
                        <th class="text-right">Số tài khoản</th>
                        <th class="text-right">Tên tài khoản</th>
                        <th class="text-right">Chi nhánh</th>
                        <th class="text-right"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($bankForUser as $item)
                        <tr>
                            <td>
                                {{config('constant.bank')[$item->bank_name]}}
                            </td>
                            <td class="text-right" >{{$item->bank_number}}</td>
                            <td class="text-right">{{$item->fullname}}</td>
                            <td class="text-right">{{$item->bank_branch}}</td>
                            <td>
                                <a href="{{URL::route('bank.delete',['id'=>$item->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có muốn xóa tài khoản ngân hàng này không ?')"><i class="fa fa-trash"></i> xóa</a>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="form-horizontal col-sm-4 content-margin">
                <a href="{{URL::route('bank.add')}}" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>
            </div>
        </div>
    </div>
@stop