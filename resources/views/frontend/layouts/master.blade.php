<!DOCTYPE html>
<head><meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>
       Đổi Thẻ Thành Tiền Mặt-@yield('title')
    </title>
    <link rel="icon" href="{{asset('frontend/assets/img/favicon.ico')}}" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/bootstrap-dialog.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}" />

    <style type='text/css'>
        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript,
        if it's not present, don't show loader */
        .no-js #loader {
            display: none;
        }
        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }

        .se-pre-con {
            position: fixed;
            opacity: 0.6;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url({{asset('frontend/assets/img/loading.gif')}}) center no-repeat #fff;
            background-size: 100px 100px;
        }
        /*body {*/
             /*font-family: Georgia;*/
         /*}*/
        /*body {*/
            /*background: radial-gradient(ellipse at top,#277dba2e 0%,rgba(175, 210, 239, 0.75) 70%,rgba(255, 255, 255, 0.47) 88%);*/
            /*overflow-x: hidden;*/
        /*}*/

        #my-dialog-1 .modal-dialog {
            max-width: 450px;
        }
        @media (max-width: 480px) {
            #topNav .dropdown {
                float: none;
            }
        }
        @media (min-width: 1200px) {
            .container {
                width: 1151px;
            }
        }
    </style>
    @yield('link')

</head>
<body style="padding-top: 50px;">
<div class="se-pre-con"></div>

    <div>
        <input type="hidden" name="__VIEWSTATE" id="
__VIEWSTATE" value="" />
    </div>

    <div>

        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBAL+raDpAgKZ6cP1BgK0/eC5DwLx/aeZD9Eza2u69yau4twopSfYfJJ3J8kM" />
    </div>
    <div class="innerFloat navbar-fixed-top">
        <div class="container">

            <div class="row">
                <div class="navbar-header CustomBtnCollapse col-md-2">


                    <div id='toggle-menu-main' data-toggle="collapse" data-target="#topNav" aria-expanded="false"><div></div></div>


                    @if(!Auth::check())
                    <ul class="navbar-nav nav-login-d">

                        <li>
                            <a href="" class="BtnLogin" style="padding:10px; color:#fff" data-toggle="modal" data-target="#frmLogin">
                                    <span>
                                        <i>
                                            <img src="{{asset('frontend/assets/img/login.jpg')}}" height="17" width="18" alt="">
                                        </i>
                                        Đăng Nhập
                                    </span>
                            </a>
                        </li>

                    </ul>
                    @endif


                    <!-- /.login-success -->



                    <a class="navbar-brand" href="/">
                        <img src="{{asset('frontend/assets/img/logo.jpg')}}" alt="" height="37" width="101">
                    </a>

                    <a href="/">

                    </a>
                </div>
                <!-- end navbar-header -->
                <!--                        <div class="collapse navbar-collapse col-md-10" id="topNav" style="background: transparent url('images/funny.png') no-repeat scroll 80% top / auto 100%;">-->
                @include('frontend.partials.menu_top')
                <!-- end #topNav -->

                <!-- end #topNav -->
            </div>
        </div>
    </div>
    <div class="container" id="containerContent">
    @yield('content')
    <!-- end PartnerLogo -->
    </div>
    </div>
    <!-- end container -->
    <div id="footer" style="height: 100px">
        <marquee direction="left" style="color:#FF0000;text-transform:uppercase;font-weight:bold;font-size:16px;"><p>Đổi thẻ cào cam kết thời gian duyệt thẻ 1-&gt;5p&nbsp;làm việc 24/24. Lệnh rút tiền thực hiện vào 20h mỗi ngày. Thứ 7, CN lệnh rút duyệt vào thứ 2.</p>
        </marquee>
        <p class="text-center" style="color: white"><b>Web thu mua đổi thẻ cào sang tiền mặt chiết khấu thấp</b></p>
        <!-- end container -->
    </div>
    <!-- end #footer -->

    <!-- Popup Form Login -->
    <a href="javascript" data-target="#dShowInfo" style="display: none;" id="aShowInfo"></a>
    <div class="modal fade" id="dShowInfo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ColorDo">Thông báo
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="TextModalTransfer text-left" style="padding-left: 30px;">
                        <p>Quý khách đồng ý thanh toán <b class="ColorDo">182.351 vnđ</b> cho thuê bao trả sau <b>0938979585</b></p>
                        <p>Tổng thanh toán: <b class="ColorDo">182.351 vnđ</b></p>
                    </div>

                    <ul class="ListBtn">
                        <li>
                            <a href="chuyentien-confirm.html" class="btn RegNow">Đồng Ý</a>
                        </li>
                        <li>
                            <a href="javascirpt:;" class="btn BtnGrey">Hủy</a>
                        </li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- end Popup Form Login -->
    <!-- Modal -->
    <button type="button" id="btnmyPupop" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myPupop" style="display: none;"></button>
    <div class="modal fade" id="myPupop" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title ColorDo">Thông báo</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" class="btn BtnGrey" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>

    <!-- End Modal -->


    <!-- FIXED SUPPORT -->
    <div id="fixedSupport">
        <ul class="text-uppercase text-center">
            @if(!Auth::check())
                <li>
                    <a href="/dang-ky/" class="item active">
                        <i class="sprite register ib"></i>
                        <span class="lbl">Đăng ký mới</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>

    <div id="fixedtotop">
        <a href="#" class="to-top">

        </a>

    </div>
    <div id="fixedphao">


    </div>


    <div class="modal fade" id="frmLogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ColorDo">
                        Đăng Nhập
                    </h4>
                </div>

                <div class="modal-body">
                    <form action="{{URL::route('user.login')}}" method="post" id="form-login">
                        {{csrf_field()}}
                        <div id="message-login" style="display:none;">
                            <div class="alert alert-success alert-dismissible" style="display:none;padding: 7px; border-radius: 0px;" id="message-login-success">
                                <strong>Success!</strong> <span id="message-login-success-text"></span>
                            </div>
                            <div class="alert alert-danger alert-dismissible fade in" style="display:none;padding: 7px; border-radius: 0px;" id="message-login-error">
                                <span id="message-login-error-test"></span>
                            </div>
                        </div>

                        <div class="form-group" id="phone-error">
                            <input name="login-phone" type="text" id="login-phone" class="form-control isNumber IconPhone" placeholder="Số Điện Thoại" tabindex="900" autocomplete="off" />
                            <p class="text-danger" id="error-phone"></p>
                        </div>
                        <div class="form-group" id="password-error">
                            <input name="login-password" type="password" id="login-password" class="form-control IconPass" placeholder="Mật khẩu" tabindex="901" autocomplete="off" />
                            <p class="text-danger" id="error-password"></p>
                        </div>
                        <div class="form-group form-inline">
                            <a href="javascript:void(0)" id="btn-show-form-forget" class="ForgetPass">Quên mật khẩu?</a>
                        </div>
                        <input type="submit" name="btn-login" value="Đăng nhập" id="btn-login" class="btn btn-block BtnDangNhap" />
                        <p class="text-center">
                            Bạn chưa là thành viên?
                            <a href="{{URL::route('user.register')}}" class="ColorDo">Đăng Ký Mới</a>
                        </p>
                    </form>

                </div>

            </div>
        </div>
        <label id="ctl00_Login1_lblScripts"></label>
    </div>

{{--forget_password--}}
<div class="modal fade" id="frmForgetPassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title ColorDo">
                    KHÔI PHỤC MẬT KHẨU
                </h4>
            </div>

            <div class="modal-body">
                Vui lòng liên hệ với nhà cung cấp !
                {{--<form action="{{URL::route('auth.forget')}}" method="post" id="form-forget">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<div id="message-forget" style="display:none;">--}}
                        {{--<div class="alert alert-success alert-dismissible" style="display:none;padding: 7px; border-radius: 0px;" id="show-message-forget-success">--}}
                            {{--<span></span>--}}
                        {{--</div>--}}
                        {{--<div class="alert alert-danger alert-dismissible fade in" style="display:none;padding: 7px; border-radius: 0px;" id="show-message-forget-error">--}}
                            {{--<span></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group" id="forget-email-class">--}}
                        {{--<input name="forget-email" type="text" id="forget-email" class="form-control isEmail IconEmailForget" placeholder="Email" tabindex="900" autocomplete="off" />--}}
                        {{--<p class="help-block text-xs" id="forget-show-info">--}}
                            {{--Để đặt lại mật khẩu của mình, hãy nhập địa chỉ email mà bạn sử dụng để đăng nhập--}}
                            {{--vào hệ thống.--}}
                        {{--</p>--}}
                        {{--<p class="text-danger" id="forget-email-error"></p>--}}
                    {{--</div>--}}
                    {{--<input type="submit" name="btn-forget" value="Gửi" id="btn-forget" class="btn btn-block BtnDangNhap" />--}}
                {{--</form>--}}

            </div>

        </div>
    </div>
    <label id="ctl00_Login1_lblScripts"></label>
</div>
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
        <script src="{{asset('frontend/assets/js/login.js')}}"></script>

<!-- END OF FIXED SUPPORT -->

<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/masterpage.master.js')}}"></script>
<script src="{{asset('frontend/assets/js/menuindex.js')}}"></script>
<script src="{{asset('frontend/assets/js/home.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap-dialog.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/function.js')}}"></script>
<script src="{{asset('frontend/assets/js/util.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/accounting.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/jquery.xdomainajax.js')}}" type="text/javascript"></script>

<script src="{{asset('frontend/assets/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
<script src="{{asset('frontend/assets/js/slideshow.js')}}"></script>

<script src="{{asset('frontend/assets/js/function.js')}}"></script>
<script src="{{asset('frontend/assets/js/menu_left.js')}}"></script>
<script src="{{asset('frontend/assets/js/master/main.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        /* SLIDESHOW index dt */
        var Indexcarousel1 = $(".ListPartner");
        Indexcarousel1.carouFredSel({
            width: "95%",
            // height: "auto",
            prev: '.PartnerLogo #prev2',
            next: '.PartnerLogo #next2',
            mousewheel: true,
            responsive: true,
            scroll: 2,
            // auto: {
            //     timeoutDuration: 2000,
            //     delay: 1000
            // },
            scroll: {
                pauseOnHover: true,
                items: 1,
                duration: 350,
                fx: 'scroll'
            },
            swipe: {
                onTouch: true,
                onMouse: true
            },
            items: {
                width: 150,
                visible: {
                    min: 3,
                    max: 6
                }
            },
            onCreate: function () {
                $(window).on('resize', function () {
                    Indexcarousel1.parent().add(Indexcarousel).height(Indexcarousel1.children().first().height());
                }).trigger('resize');
            }
        });


        /* SLIDESHOW index dt */
        var Indexcarousel = $(".BankPaid_mobile");
        Indexcarousel.carouFredSel({
            width: "95%",
            // height: "auto",
            prev: '.PartnerBank #prev3',
            next: '.PartnerBank #next3',
            mousewheel: true,
            responsive: true,
            scroll: 2,

            // auto: {
            //     timeoutDuration: 2000,
            //     delay: 1000
            // },

            scroll: {
                pauseOnHover: true,
                items: 1,
                duration: 350,
                fx: 'scroll'
            },
            swipe: {
                onTouch: true,
                onMouse: true
            },
            items: {
                width: 150,
                visible: {
                    min: 3,
                    max: 6
                }
            },
            onCreate: function () {
                $(window).on('resize', function () {
                    Indexcarousel.parent().add(Indexcarousel).height(Indexcarousel.children().first().height());
                }).trigger('resize');
            }

        });

    })
</script>


<script>
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
    $(document).ready(function () {
        $("html").niceScroll({ cursorwidth: '10px', zindex: 999 });
    })

</script>
@yield('script')

</body>

</html>
