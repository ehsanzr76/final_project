<div id="header" class="sticky clearfix">

    <!-- TOP NAV -->
    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- BUTTONS -->

            <!-- /BUTTONS -->

            <!-- Logo -->
            <a class="logo pull-right" href="index.html" style="color: rgb(73, 68, 95);font-size:18px">
                <img src="{{url('assets/images/transparent-business-icon-business-icon-growth-icon-5d9e94b355d013.8574845015706738433515-removebg-preview.png')}}"
                    width="94.5" height="60" alt="" />NitroBusiness.ir
            </a>

            <a class="btn btn-default btn-lg wow fadeIn animated logo pull-center" href="{{route('business.create')}}"
                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;padding-top:0px;background-color:rgb(223, 223, 233);font-size:16px">برای
                ثبت کسب و کار خود کلیک کنید</a>



            <!-- 
                Top Nav 
                
                AVAILABLE CLASSES:
                submenu-dark = dark sub menu
            -->
            <div class="navbar-collapse pull-left nav-main-collapse collapse">
                <nav class="nav-main">

                    <!--
                        NOTE
                        
                        For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                        Direct Link Example: 

                        <li>
                            <a href="#">HOME</a>
                        </li>
                    -->
                    <ul id="topMain" class="nav nav-pills nav-main">
                        <li class="dropdown">
                            <!-- HOME -->
                            <a href="{{route('home')}}">
                                خانه
                            </a>
                        </li>
                        @include('front::layouts.category')
                        <li class="dropdown">
                            <!-- FEATURES -->
                            <a href="#">
                                قوانین و مقررات
                            </a>
                        </li>
                        <li class="dropdown mega-menu">
                            <!-- PORTFOLIO -->
                            <a href="#">
                                درباره ما
                            </a>
                        </li>
                        <li class="dropdown">
                            <!-- BLOG -->
                            <a href="{{route('contact.create')}}">
                                ارتباط با ما
                            </a>
                        </li>
                        <ul class="pull-right nav nav-pills nav-second-main">

                            <!-- SEARCH -->
                            <li class="search">
                                <a href="javascript:;">
                                    <i class="fa fa-search"></i>
                                </a>
                                <div class="search-box">
                                    <form action="page-search-result-1.html" method="get">
                                        <div class="input-group">
                                            <input type="text" name="src" placeholder="Search" class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">جستجو</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- /SEARCH -->

                            <!-- QUICK SHOP CART -->
                            {{-- <li class="quick-cart">
                                <a href="#">
                                    <span class="badge badge-aqua btn-xs badge-corner">2</span>
                                    <i class="fa fa-shopping-cart"></i> 
                                </a>
                                <div class="quick-cart-box">
                                    <h4>Shop Cart</h4>
            
                                    <div class="quick-cart-wrapper">
            
                                        <a href="#"><!-- cart item -->
                                            <img src="assets/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
                                            <h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
                                            <small>$37.21</small>
                                        </a><!-- /cart item -->
            
                                        <a href="#"><!-- cart item -->
                                            <img src="assets/images/demo/people/300x300/5-min.jpg" width="45" height="45" alt="" />
                                            <h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
                                            <small>$17.18</small>
                                        </a><!-- /cart item -->
            
                                        <!-- cart no items example -->
                                        <!--
                                        <a class="text-center" href="#">
                                            <h6>0 ITEMS ON YOUR CART</h6>
                                        </a>
                                        -->
            
                                    </div>
            
                                    <!-- quick cart footer -->
                                    <div class="quick-cart-footer clearfix">
                                        <a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
                                        <span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
                                    </div>
                                    <!-- /quick cart footer -->
            
                                </div>
                            </li> --}}
                            <!-- /QUICK SHOP CART -->



                        </ul>

                    </ul>





                </nav>
            </div>

        </div>
    </header>
    <!-- /Top Nav -->

</div>