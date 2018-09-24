
<!DOCTYPE html>
<html lang="en" ">
<head>
    <title>Đổi thẻ cào thành tiền mặt nhanh, đơn giản</title>
    <meta name="keywords" content="Đổi thẻ, Đổi Thẻ Cào, Đổi thẻ lấy tiền mặt, Thu mua mã thẻ"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="max-age=0"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache"/>

    <!-- css -->
    <link rel="stylesheet" href="{{asset('doithe/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('doithe/assets/css/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('doithe/assets/css/notifIt.min.css')}}">
    <link rel="stylesheet" href="{{asset('doithe/assets/css/jasny-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('doithe/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('doithe/assets/css/jquery.mmenu.all.css')}}"/>
    <link rel="stylesheet" href="{{asset('doithe/assets/css/bootstrap-dialog.min.css')}}">

    <!-- include: "type": "css", "files": "css/**/*.css" -->
    <link href="{{asset('doithe/style.css')}}" rel="stylesheet" type="text/css">
    <!-- /include -->

    <!-- js components -->
    <script src="{{asset('doithe/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/jasny-bootstrap.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/xls.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/bootstrap-dialog.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('doithe/assets/js/jquery.mmenu.min.all.js')}}"></script>
    <script src="{{asset('doithe/assets/js/jssor.slider.mini.js')}}"></script>
    <script src="{{asset('doithe/assets/js/style.js')}}"></script>

    <!--&lt;!&ndash; angular components &ndash;&gt;-->
    <!--<script src="assets/js/angular.min.js"></script>-->
    <!--<script src="assets/js/angular-ui-router.min.js"></script>-->
    <!--<script src="assets/js/angular-resource.min.js"></script>-->
    <!--<script src="assets/js/angular-cookies.min.js"></script>-->
    <!--<script src="assets/js/loading-bar.min.js"></script>-->
    <!--<script src="assets/js/notifIt.min.js"></script>-->

    <!--&lt;!&ndash; my script &ndash;&gt;-->
    <!--&lt;!&ndash; include: "type": "js", "files": "js/**/*.js" &ndash;&gt;-->
    <script src="{{asset('doithe/assets/js/app.min.js')}}"></script>
    <!-- /include -->

</head>
<body>

<div class="mm-page">
    <div class="topmenu">
        <div class="menu clearfix">
            <a href="#menu" class="m-expand"></a>

            <div class="logo">
                <a class="logo-desktop" href="/" ui-sref="home"><img style="height: 34px; padding-top: 12px;" src="{{asset('doithe/assets/img/logo-web.png')}}"/></a>
            </div>

            @if(!\Auth::check())
            <div id="login-menu">
                <div class="login">
                    <a href="#nlogin"><i class="fa fa-user"></i></a>
                    <ul class="list-inline">
                        <li><a href="{{URL::route('user.register')}}" ui-sref="register">Đăng ký</a></li>
                        <li><a href="{{URL::route('user.login')}}" ui-sref="login">Đăng nhập</a></li>
                    </ul>
                </div>
                <nav class="mm-menu mm-horizontal mm-offcanvas mm-right mm-front" id="nlogin">
                    <ul>
                        <li>
                            <span><i class="fa fa-user"></i> Xin chào</span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" ui-sref="login">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" ui-sref="register">Đăng ký tài khoản</a>
                        </li>
                    </ul>
                </nav>
            </div>
            @else
            <div id="user-menu">
                <a href="#nuser" class="account-items">
                    <div class="account">
                        <div class="hi-thumb">
                            <img src="{{asset('doithe/assets/img/avatar-default.png')}}" alt="avatar">
                        </div>
                        <p><span class="number-account">GUEST</span><br>{{number_format(\Auth::user()->money)}}đ</p><i
                                class="fa fa-chevron-down"></i>
                    </div>
                </a>
                <nav id="nuser">
                    <ul class="list-unstyled alias-menu-account">
                        <li>
                            <a href="#nuser" class="infomation-user">
                                <div class="hi-thumb">
                                    <img src="{{asset('doithe/assets/img/avatar-default.png')}}" alt="avatar">
                                </div>
                                <p><span class="number-account"></span><br>đ</p>
                            </a>
                        </li>
                        <li><a href="{{URL::route('user.profile')}}" ui-sref="profile"><i class="fa fa fa-th-large"></i>Tài khoản</a></li>
                        <li><a href="{{URL::route('user.reset-password')}}" ui-sref="changePassword"><i class="fa fa-lock"></i>Đổi mật khẩu</a></li>
                        <li><a href="{{URL::route('user.password-two')}}" ui-sref="changePassword2"><i class="fa fa-key"></i>Mật khẩu cấp 2</a></li>
                        <li><a href="{{URL::route('bank.index')}}" ui-sref="bank"><i class="fa fa fa-credit-card"></i>Ngân hàng</a></li>
                        {{--<li><a href="javascript:void(0);" ui-sref="logBalance"><i class="fa fa-history"></i>Biến động số dư</a></li>--}}
                        {{--<li><a href="javascript:void(0);" ui-sref="history"><i class="fa fa fa-clock-o"></i>Báo cáo</a></li>--}}
                        {{--<li><a href="javascript:void(0);" ui-sref="api-setup"><i class="fa fa fa-cogs"></i>Kết nối API</a></li>--}}
                        <li><a href="javascript:void(0);" ui-sref="logout"><i class="fa fa fa-sign-out"></i>Thoát</a></li>
                    </ul>
                </nav>
            </div>
        @endif

            <div class="mdland-navigator">
                <div class="menu-navigator clearfix">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="mn-desktop" href="/" ui-sref="home">Trang chủ</a>
                        </li>
                        <li>
                            <a class="mn-desktop" href="{{URL::route('doithe.pay-change')}}" ui-sref="charge">Nạp tiền</a>
                        </li>
                        {{--<li>--}}
                            {{--<a class="mn-desktop" href="javascript:void(0);" ui-sref="transfer">Chuyển tiền</a>--}}
                        {{--</li>--}}
                        <li>
                            <a class="mn-desktop" href="{{URL::route('bank.back-pay')}}" ui-sref="payment">Rút tiền</a>
                        </li>
                        <li>
                            <a class="mn-desktop" href="javascript:void(0);">Dịch vụ <i
                                        class="fa fa-chevron-down"></i> <i class="fa fa-chevron-right"></i></a>
                            <ul class="list-unstyled alias-menu">
                                <li><a href="{{URL::Route('bank.add-money-phone')}}" ui-sref="topup">Nạp tiền điện thoại</a></li>
                                <li><a href="javascript:void(0);" ui-sref="softpin-mobile">Mua thẻ điện thoại</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="mn-desktop" href="javascript:void(0);" ui-sref="fee">Bảng giá</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /mdland-navigator -->
        </div>
        <nav class="mm-menu mm-horizontal mm-offcanvas" id="menu">
            <ul>
                <li>
                    <a href="/" ui-sref="home">Trang chủ</a>
                </li>
                <li>
                    <a href="{{URL::route('doithe.pay-change')}}" ui-sref="charge">Nạp tiền</a>
                </li>
                {{--<li>--}}
                    {{--<a href="javascript:void(0);" ui-sref="transfer">Chuyển tiền</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{URL::route('bank.back-pay')}}" ui-sref="payment">Rút tiền</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Dịch vụ</a>
                    <ul class="list-unstyled alias-menu">
                        <li><a href="{{URL::Route('bank.add-money-phone')}}" ui-sref="topup">Nạp tiền điện thoại</a></li>
                        <li><a href="javascript:void(0);" ui-sref="softpin-mobile">Mua thẻ điện thoại</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" ui-sref="softpin-game">Mua thẻ Carot</a>
                </li>
                <li>
                    <a href="javascript:void(0);" ui-sref="fee">Bảng giá</a>
                </li>
            </ul>
        </nav>
    </div>
    @include('doithe.partials.message')
    @yield('content')
    <div class="payment clearfix hidden-xs">
    </div>

    <div class="footer clearfix">
        <div class="info-footer clearfix">
            <div class="footer-left clearfix">
                <ul class="list-inline">
                    <li>
                        <div class="hi-items">
                            <p class="title">
                                <strong>Tài khoản</strong><i class="fa fa-minus"></i>
                            </p>
                            <ul class="alias-footer" style="display: block;">
                                <li><a href="javascript:void(0);" ui-sref="register">Đăng ký</a></li>
                                <li><a href="javascript:void(0);" ui-sref="login">Đăng nhập</a></li>
                                <li><a href="javascript:void(0);" ui-sref="charge">Nạp tiền</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="hi-items">
                            <p class="title">
                                <strong>Dịch vụ</strong><i class="fa fa-minus"></i>
                            </p>
                            <ul class="alias-footer" style="display: block;">
                                <li><a href="javascript:void(0);" ui-sref="softpin-game">Mua thẻ carot</a></li>
                                <li><a href="javascript:void(0);" ui-sref="softpin-mobile">Mua thẻ điện thoại</a></li>
                                <li><a href="javascript:void(0);" ui-sref="softpin-game">Mua thẻ game</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="hi-items">
                            <p class="title">
                                <strong>Tiện ích</strong><i class="fa fa-minus"></i>
                            </p>
                            <ul class="alias-footer" style="display: block;">
                                <li><a href="javascript:void(0);" ui-sref="transfer">Chuyển tiền</a></li>
                                <li><a href="javascript:void(0);" ui-sref="payment">Rút tiền</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="hi-items">
                            <p class="title"><strong>Hỗ trợ trực tuyến</strong></p>
                            <ul class="list-unstyled  alias-items">
                                <li>
                                    <i class="fa fa-phone-square"></i>

                                    <p class="nummber"><span>096.998.9504<span class="text-support"> (08h - 22h trừ T7&CN)</span></span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>

                                    <p><a href="javascript:void(0);" class="nummber"> <span class="__cf_email__" data-cfemail="85e1eaecf1ede0ebede4ebedc5e2e8e4ece9abe6eae8">doithe@thecaogiatot.com</span> </a></p>

                                    <p class="text-support"><span>Liên hệ qua Email</span></p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!--end .footer-left -->
        </div>
    </div>

    <div align="center" class="bottom-footer clearfix">
        <div class="info-bottom-footer clearfix">
            <div class="menu-bottom-footer">
                <ul class="list-inline">
                    <li><a href="javascript:void(0);" ui-sref="home">Trang chủ</a></li>
                    <li><a href="javascript:void(0);" ui-sref="fee">Bảng giá</a></li>
                    <li><a href="javascript:void(0);">Hướng dẫn</a></li>
                    <li><a href="javascript:void(0);">Điều khoản sử dụng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- $('#sellModal').modal('show'); -->
<div class="modal fade" id="sellModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                class="white">×</span></button>
                    <i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i> Cài đặt bảo mật:
                </div>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            Bạn hãy thiết lập mật khẩu cấp 2 để sử dụng cho các giao dịch thanh toán!
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-sm btn-primary" ng-click="setPassword2()"><i
                                        class="fa fa-check" aria-hidden="true"></i> Đồng ý
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i
                                        class="fa fa-times" aria-hidden="true"></i> Hủy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="newsletter-bar" ng-if="alert.alert == 1">
    <div class="newsletter-bar-inner">
        <marquee align="middle" direction="left" scrollamount="2" style="margin-right: 10px;">
            KHÁCH HÀNG MUỐN NẠP THẺ VIETTEL LIÊN HỆ QUA ZALO

        </marquee>

    </div>
</div>

<script>
    $('nav#menu').mmenu();
    $('nav#nlogin').mmenu({
        offCanvas: {
            position: "right",
            zposition: "front"
        }
    }, {
        offCanvas: {
            pageNodeType: "form"
        }
    });
    $('nav#nuser').mmenu({
        offCanvas: {
            position: "right",
            zposition: "front"
        }
    }, {
        offCanvas: {
            pageNodeType: "form"
        }
    });
</script>
@yield('script')
</body>
</html>