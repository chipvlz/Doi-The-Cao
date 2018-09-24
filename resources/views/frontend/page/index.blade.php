@extends('frontend.layouts.master')
@section('title')
    Trang chủ
@stop
@section('content')
<section class="HomeContent innerFloat">


    <div class="SideBar">
        <h2 class="HotNew">
            <span>Tin Nóng</span>
        </h2>
        <ul class="ListTopNews">


            <li>
                <a href='#' target="_blank" title='Mua thẻ GATE ở đâu?'>
                    Mua thẻ GATE ở đâu?

                </a>
            </li>

            <li>
                <a href='#' target="_blank" title='Thẻ Gate nạp được những game nào?'>
                    Thẻ Gate nạp được những game

                </a>
            </li>

            <li>
                <a href='#' target="_blank" title='[TB] Nghĩ lễ 30/4-1/5'>
                    [TB] Nghĩ lễ 30/4-1/5

                </a>
            </li>

            <li>
                <a href='#' target="_blank" title='[TB] BẢO TRÌ VÀ NÂNG CÂP HỆ THỐNG'>
                    [TB] BẢO TRÌ VÀ NÂNG CÂP HỆ

                </a>
            </li>


        </ul>

        <!-- ADS SLIDER -->
        <div id="adsSliderWrapper">
            <ul id="adsSlider" class="ListAdvertiser innerFloat">


                <li>
                    <a href='http://gate.vn/tin-tuc/chi-tiet/216/Dich-vu--diem-ban-the-GATE-da-nang' target='_blank'>
                        <img src="{{asset('frontend/assets/img/Gate_245X340.png')}}" />
                    </a>
                </li>

                <li>
                    <a href='https://daily.gate.vn/nap-ggold/nap-bang-the-cao/34/' target='_blank'>
                        <img src="{{asset('frontend/assets/img/Gate_245X341.png')}}" />
                    </a>
                </li>


            </ul>
            <div class="paginator ds"></div>
        </div>
        <!-- END OF ADS SLIDER -->
    </div>
    <!-- end SideBar -->

    <h3 class="title-hot-new-mb">
        <span>Tin Nóng</span>
    </h3>
    <ul class="list-new-mobile">


        <li>
            <a href='#' target="_blank">
                Mua thẻ GATE ở đâu?
            </a>
        </li>

        <li>
            <a href='#' target="_blank">
                Thẻ Gate nạp được những game nào?
            </a>
        </li>

        <li>
            <a href='#' target="_blank">
                [TB] Nghĩ lễ 30/4-1/5
            </a>
        </li>

        <li>
            <a href='#' target="_blank">
                [TB] BẢO TRÌ VÀ NÂNG CÂP HỆ THỐNG
            </a>
        </li>


    </ul>



    <div class="TopService">

        <div id="napthe-block">
            <a href="3"><span class="glyphicon glyphicon-phone"></span>Thông báo nạp tiền</a>
        </div>

        <div class="BlockTop1">
            <a href="#" class="Block1Left BgLightBlue">

                <span class="Icon">
                    <img src="{{asset('frontend/assets/img/icon1.png')}}" height="98" width="98" alt="" class="img-responsive center-block" />
                </span>
                <!-- end Icon -->
                <span class="InContent">
                    <span class="TextLarge">Dịch Vụ Thanh Toán</span>
                    <span class="TextContent">Mọi thao tác đăng nhập vào hệ thống đều sử dụng tiêu chuẩn bảo mật thông qua mã xác minh 1 lần được gửi qua SMS.
                    </span>
                </span>
                <!-- end InContent -->
            </a>
            <!-- end Block1Left -->

            <div class="Block1Right">


                <a href="#" class="Block1Sub1 BgLightGreen">
                    <span class="Icon">
                        <img src="{{asset('frontend/assets/img/icon2.png')}}" height="51" width="51" alt="" class="img-responsive center-block" />
                    </span>
                    <!-- end Icon -->
                    <span class="InContent">
                        <span class="TextLarge">Mua mã thẻ game</span>
                    </span>
                    <!-- end InContent -->
                </a>
                <!-- end Block1Sub1 -->


                <a href="#" class="Block1Sub1 BgXanhNhat"> <span class="Icon">
                                        <img src="{{asset('frontend/assets/img/icon6.png')}}" height="51" width="51" alt="" class="img-responsive center-block" />
                                    </span>
                    <!-- end Icon --><span class="InContent" style="    margin: 0 auto 2px;">
                                        <span class="TextLarge">Nạp tiền điện thoại</span> </span>
                    <!-- end InContent -->
                </a>


                <!-- end Block1Sub1 -->
            </div>
            <!-- end Block1_1 -->

        </div>
        <!-- end BlockTop1 -->

        <div class="clearfix"></div>

        <div class="BlockTop2">

            <a href="javascript:;" onclick="javascript:alert('Dịch vụ chuẩn bị ra mắt...')" class="Block2Right BgXanhTim" data-animate-scroll='{"x": "100",
                                                                                                            "y":"100",
                                                                                                            "rotation":"-25",
                                                                                                            "alpha": "0",
                                                                                                            "duration": "1.5",
                                                                                                            "scaleX": "0",
                                                                                                            "scaleY": "0"}'>
                <span class="Icon">
                    <img src="{{asset('frontend/assets/img/icon8.png')}}" height="70" width="70" alt="" class="img-responsive center-block" />
                </span>
                <!-- end Icon -->
                <span class="InContent">

                </span>
                <!-- end InContent -->
            </a>
            <div class="Block2Left">




                <a href="" class="BlockSub2 BgMangCut"> <span class="Icon">
                                        <img src="{{asset('frontend/assets/img/icon3.png')}}" height="51" width="51" alt="" class="img-responsive center-block" />
                                    </span>
                    <!-- end Icon --><span class="InContent">
                                        <span class="TextLarge">Mua mã thẻ điện thoại</span> </span>
                    <!-- end InContent -->
                </a>




                <a href="" class="BlockSub2 BgXamDam" data-animate-scroll='{"alpha": "0",
                                                                                                        "y":"50",
                                                                                                        "duration": "1.75",
                                                                                                        "scaleX": "0",
                                                                                                        "scaleY": "0",
                                                                                                        "ease": "Elastic.easeIn"}'>
                    <span class="Icon">
                        <img src="{{asset('frontend/assets/img/icon5.png')}}" height="51" width="51" alt="" class="img-responsive center-block" />
                    </span>
                    <!-- end Icon -->
                    <span class="InContent">
                        <span class="TextLarge">Nạp tiền game</span>
                    </span>
                    <!-- end InContent -->
                </a>


                <a href="" class="BlockSub2 BgVangCam"> <span class="Icon">
                                        <img src="{{asset('frontend/assets/img/icon9.png')}}" height="51" width="45" alt="" class="img-responsive center-block" />
                                    </span>
                    <!-- end Icon --><span class="InContent">
                                        <span class="TextLarge">Thanh toán hóa đơn</span> </span>
                    <!-- end InContent -->
                </a>

                <a href="" class="BlockSub2 BgXanhTham"> <span class="Icon">
                                        <img src="{{asset('frontend/assets/img/icon4.png')}}" height="51" width="51" alt="" class="img-responsive center-block" />
                                    </span>
                    <!-- end Icon --><span class="InContent">
                                        <span class="TextLarge">Chuyển tiền sim đa năng</span> </span>
                    <!-- end InContent -->
                </a>




            </div>
        </div>
        <!-- end BlockTop2 -->
    </div>
    <!-- end TopService -->
</section>
@stop