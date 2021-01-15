<header class="shop_header_area">
    <div class="shop_top_header">
        <div class="container">
            <div class="pull-right">
                {{-- <a href="#"><i class="fa fa-phone"></i>+060 (800) 801-858</a>
                <a href="#"><i class="fa fa-envelope-o"></i>Your @email.com</a> --}}
            </div>

            <div class="pull-left">
                <div class="shop_sing_item">
                    <i class="fa fa-home"> <a href="{{route('homepage')}}">خانه</a></i>
                </div>
                <div class="shop_sing_item">
                    <i class="fa fa-warning"> <a href="{{route('homepage')}}"> قوانین درج کسب و کار </a></i>
                </div>
                <div class="shop_sing_item">
                    <i class="fa fa-envelope-o"><a href="{{route('homepage')}}"> ارتباط با ما </a> </i>
                </div>

                <div class="shop_sing_item">
                    <a href="{{route('register')}}"><img src="img/icon/user-icon.png" alt="">عضویت</a>
                    <span>یا</span>
                    <a href="{{route('login')}}">ورود</a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-primary">خروج</button></form>

                </div>

            </div>


        </div>
    </div>

    <div class="shop_middle_logo_area">
        <div class="container-fluid">
            <div class="row">
                <div class="shop_middle_inner">


                    <div class="col-lg-4">
                        <div class="shop_logo">
                            <h4> <a href="#" style="color: rgb(0, 0, 0)"><img
                                        src="{{url('img/543-5437998_reporting-icon-business-report-icon-png-transparent-png-removebg-preview.png')}}"
                                        alt="" style="width:90px">نیترو بیزینس</a></h4>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="shop_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="جستجو برای کسب و کار ها">
                                <span class="input-group-btn button_submit">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
  

                    <div class="col-lg-4">
                        <div class="shop_cart" style="float: left">
                            <div class="shop_cart_inner"
                                style="width: 300px;text-align:center;background-color:#fed700">
                                برای ثبت کسب و کار خود <a href="{{route('business.create')}}">اینجا</a> کلیک کنید
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    {{-- <div class="shop_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/shop-logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="hot mega_menu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">معاملات خوب</a>
                            <div class="mega_menu_inner dropdown-menu">
                                <div class="mega_item">
                                    <h4>مد مردانه</h4>
                                    <ul>
                                        <li><a href="#">بهینه سازی سرعت</a></li>
                                        <li><a href="#">به روز رسانی های ثابت</a></li>
                                        <li><a href="#">کیف و کفش</a></li>
                                        <li><a href="#">زیبایی</a></li>
                                        <li><a href="#">جین</a></li>
                                    </ul>
                                </div>
                                <div class="mega_item">
                                    <h4>مد زنانه</h4>
                                    <ul>
                                        <li><a href="#">قیمت های مناسب</a></li>
                                        <li><a href="#">کیف و کفش</a></li>
                                        <li><a href="#">لوزام جانبی</a></li>
                                        <li><a href="#">عینک آفتابی</a></li>
                                        <li><a href="#">پیراهن</a></li>
                                    </ul>
                                </div>
                                <div class="mega_item">
                                    <h4>مشاغل</h4>
                                    <ul>
                                        <li><a href="#">شلوار</a></li>
                                        <li><a href="#">چینی</a></li>
                                        <li><a href="#">تیشرت</a></li>
                                        <li><a href="#">لباس زیر</a></li>
                                        <li><a href="#">جوراب</a></li>
                                    </ul>
                                </div>
                                <div class="mega_item">
                                    <h4>دیگر</h4>
                                    <ul>
                                        <li><a href="#">شلوار و جین</a></li>
                                        <li><a href="#">تیشرت</a></li>
                                        <li><a href="#">نصب کلیکی</a></li>
                                        <li><a href="#">جوراب</a></li>
                                    </ul>
                                </div>
                                <div class="mega_item">
                                    <img src="img/mega-menu-img.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">محصولات آینده</a></li>
                        <li><a href="#">محصولات داغ</a></li>
                        <li><a href="#">کارت های هدیه</a></li>
                        <li><a href="#">وبلاگ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">ارسال رایگان برای خریدهای بالای 100 هزار تومان</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div> --}}
</header>