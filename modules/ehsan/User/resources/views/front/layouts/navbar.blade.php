<header class="shop_header_area">
    <div class="shop_top_header">
        <div class="container">
            <div class="pull-right">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info ">خروج</button>
                </form>
                <a href="#"><i class="fa fa-phone"></i>+060 (800) 801-858</a>
                <a href="#"><i class="fa fa-envelope-o"></i>Your @email.com</a>
            
            </div>
            <div class="pull-left">
                <div class="shop_sing_item">
                    <a href="#"><img src="img/icon/car-icon.png" alt="">رهگیری سفارش شما </a>
                </div>
                <div class="shop_sing_item">
                    <select class="selectpicker">
                        <option>دلا آمریکا</option>
                        <option>دلا آمریکا</option>
                        <option>دلا آمریکا</option>
                    </select>
                </div>
                <div class="shop_sing_item">
                    <a href="{{route('register')}}"><img src="img/icon/user-icon.png" alt="">عضویت</a>
                    <span>یا</span>
                    <a href="{{route('login')}}">ورود</a>
                  
                </div>
            </div>
         
        </div>
       
    </div>
    <div class="shop_middle_logo_area">
        <div class="container">
            <div class="shop_middle_inner">
                <div class="shop_logo">
                    <a href="#"><img src="img/shop-logo.png" alt=""></a>
                </div>
                <div class="shop_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="جستجو برای محصولات">
                        <select class="selectpicker">
                            <option>همه دسته بندی ها</option>
                            <option>همه دسته بندی ها</option>
                            <option>همه دسته بندی ها</option>
                        </select>
                        <span class="input-group-btn button_submit">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="shop_cart">
                    <div class="shop_cart_inner">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                        <a class="cart_icon" href="#"><img src="img/icon/s-bag-icon.png" alt=""></a>
                        <a href="#">39.000 تومان</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/shop-logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
            </nav>
        </div>
    </div>
</header>