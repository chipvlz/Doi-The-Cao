<div class="collapse navbar-collapse col-md-10" id="topNav">
    <ul class="nav navbar-nav">

        @if (!\Auth::check())
        <li class="visible-xs">
            <div class="col-half">
                <a style="background-color:#c00;" class="BtnLogin"  href="" data-toggle="modal" data-target="#frmLogin">
                    <img src="{{asset('frontend/assets/img/login.png')}}" alt=""/>Đăng nhập</a>

            </div>
            <div class="col-half">
                <a style="background:#f5f5f5; color:#4c4c4c;" class="register-header-bt" href="/dang-ky/">
                    <img src="{{asset('frontend/assets/img/add-icon.png')}}" alt=""/>Đăng ký</a>
            </div>

        </li>
        @else
            <li class="dropdown hidden-lg hidden-md" style="min-width:220px;">
                <a data-toggle="dropdown" class="AccountLogin pointer" aria-expanded="true">
                    <div class="box innerFloat">
                        <span class="avatar"><img alt="aaa" src="{{asset('frontend/assets/img/avatar.png')}}"></span>
                        <span class="info">
         <span class="name">{{empty(Auth::user()->name)?"GUEST":strtoupper(Auth::user()->name)}}</span>
         <br>
         Số dư : <span class="ColorDo">{{number_format(Auth::user()->money)}} đ</span>
         </span>
                    </div>
                </a>
                <ul class="dropdown-menu menu-success-a">
                    <li class="menu-account-info">
                        <a href="{{URL::route('user.profile')}}">Thông tin tài khoản</a>
                    </li>
                    <li id="pageAbout">
                        <a href="{{URL::route('bank.history-with-draw')}}" ><i class="fa fa-history" style="margin-left: -8px;
    margin-right: 10px;"></i> Lịch Sử Rút Tiền</a>
                    </li>
                    <li id="pageAbout">
                        <a href="{{URL::route('bank.history-pay-phone')}}" ><i class="fa fa-history" style="margin-left: -8px;
    margin-right: 10px;"></i> Lịch Sử Nạp Tiền Điện Thoại</a>
                    </li>
                    <li class="menu-change-pass">
                        <a href="{{URL::route('user.reset-password')}}">Thay đổi mật khẩu</a>
                    </li>
                    <li class="menu-logout">
                        <a href="{{URL::route('user.logout')}}" id="btnLogOut">Đăng xuất</a>
                    </li>
                </ul>
            </li>

        @endif
            <li id="pageAbout">
                <a href="/" ><i class="fa fa-refresh"></i> Đổi Thẻ</a>
            </li>
            <li id="pageAbout">
                <a href="{{URL::route('tra-cuu.index')}}" ><i class="fa fa-history"></i> Lịch Sử Giao Dịch</a>
            </li>
            <li id="pageAbout">
                <a href="{{URL::route('bank.index')}}" ><i class="fa fa-bank"></i> Tài Khoản Ngân Hàng</a>
            </li>
            <li id="pageInfo">
                <a href="{{URL::route('bank.back-pay')}}"> <i class="fa fa-money"></i> Rút Tiền</a>
            </li>
            <li id="pageInfo">
                <a href="{{URL::route('bank.add-money-phone')}}"> <i class="fa fa-shopping-cart"></i> Nạp Tiền Điện Thoại</a>
            </li>

        @if (Auth::check())
        <li class="dropdown hidden-xs hidden-sm " style="min-width:220px;">
            <a data-toggle="dropdown" class="AccountLogin pointer" aria-expanded="true">
                <div class="box innerFloat">
                    <span class="avatar"><img alt="aaa" src="{{asset('frontend/assets/img/avatar.png')}}"></span>
                    <span class="info">
         <span class="name">{{empty(Auth::user()->name)?"GUEST":strtoupper(Auth::user()->name)}}</span>
         <br>
         Số dư : <span class="ColorDo">{{number_format(Auth::user()->money)}} đ</span>
         </span>
                </div>
            </a>
            <ul class="dropdown-menu menu-success-a">
                <li class="menu-account-info">
                    <a href="{{URL::route('user.profile')}}">Thông tin tài khoản</a>
                </li>
                <li id="pageAbout">
                    <a href="{{URL::route('bank.history-with-draw')}}" ><i class="fa fa-history" style="margin-left: -8px;
    margin-right: 10px;"></i> Lịch Sử Rút Tiền</a>
                </li>
                <li id="pageAbout">
                    <a href="{{URL::route('bank.history-pay-phone')}}" ><i class="fa fa-history" style="margin-left: -8px;
    margin-right: 10px;"></i> Lịch Sử Nạp Tiền Điện Thoại</a>
                </li>
                <li class="menu-change-pass">
                    <a href="{{URL::route('user.reset-password')}}">Thay đổi mật khẩu</a>
                </li>
                <li class="menu-logout">
                    <a href="{{URL::route('user.logout')}}" id="btnLogOut">Đăng xuất</a>
                </li>
            </ul>
        </li>
        @else
            <li class="hidden-xs hidden-sm" style="float: right;">
                <a href="" class="BtnLogin" data-toggle="modal" data-target="#frmLogin">
                <span>
                     <i>
                          <img src="{{asset('frontend/assets/img/login.png')}}" height="17" width="18" alt="">
                      </i>
                                        Đăng Nhập
                </span>
                </a>
            </li>
        @endif

    </ul>

</div>