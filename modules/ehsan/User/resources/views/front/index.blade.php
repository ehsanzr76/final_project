<!DOCTYPE html>
<html lang="en">
@include('user::front.layouts.header')

<body class="rtl">
    <!-- pre-loader-->
    {{-- <div id="pre-loader">
            <div id="preload_inner">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> --}}
    <!-- pre-loader-->
    <!--================Header Logo Area =================-->

    @include('user::front.layouts.navbar')
    @include('user::front.layouts.message')



    <!--================End Shop Header Area =================-->

    <!--================Shop Slider Area =================-->
    <section class="shop_slider_area">
        <div class="shop_slider_inner">
            <div id="shop_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="2000" data-thumb="img/home-slider/shop-slider-1.jpg" data-rotate="0"
                        data-fstransition="fade" data-fsmasterspeed="1500" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/home-slider/shop-slider-1.jpg" alt="" data-bgposition="center 0"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                            data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption s_bg_text"
                                data-x="['right','right','right','right','right','center']" data-y="['top']"
                                data-voffset="['280','280','280','240','220','200']"
                                data-hoffset="['550','550','550','40','0','0']"
                                data-fontsize="['48','48','48','48','28']" data-lineheight="['65','65','65','65','40']"
                                data-height="none" data-width="['none','none','none','none','none','320']"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap','normal',]"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="x:-50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="900" data-splitin=" "
                                data-splitout="none" data-textAlign="['right','right','right','right']"
                                data-responsive_offset="on">سلامت خریداران! من هستم
                            </div>
                            <div class="tp-caption s_big_text"
                                data-x="['right','right','right','right','right','center']" data-y="['top']"
                                data-voffset="['320','320','320','280','260','290']"
                                data-hoffset="['550','550','550','40','0']"
                                data-fontsize="['40','40','40','40','30','30']"
                                data-lineheight="['50','50','50','40','40']" data-height="none"
                                data-width="['none','none','none','none','320']"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap','normal',]"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:-50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">فروش حراجی <br
                                    class="shop_br" /> تا 70% تخفیف.
                            </div>
                            <div class="tp-caption shop_btn" data-x="['right','right','right','right','right','center']"
                                data-y="['top']" data-voffset="['440','440','440','400','370','420']"
                                data-hoffset="['550','550','550','40','0']" data-fontsize="['11','11','11','11','11']"
                                data-height="none" data-width="['none','none','none','none','none','320']"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap','normal',]"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin=" "
                                data-textAlign="['right','right','right','right']" data-splitout="none"
                                data-responsive_offset="on">
                                <a href="#" class="shop_now_btn">حالا بخرید</a>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-3046" data-transition="slotzoom-horizontal" data-slotamount="10"
                        data-thumb="img/home-slider/slider-1.jpg">
                        <!--                         MAIN IMAGE -->
                        <img src="img/home-slider/slider-1.jpg" data-bgparallax="10" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg">
                        <div class="slider_text_box">
                            <div class="tp-caption s_bg_text" data-x="['right']" data-y="['top']"
                                data-voffset="['280','280','280','280','280','280']"
                                data-hoffset="['550','550','550','550','0']" data-fontsize="['48','48','48']"
                                data-lineheight="['65','65','65']" data-width="['none']" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="x:-50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="900" data-splitin=" "
                                data-splitout="none" data-textAlign="['right','right','right','right']"
                                data-responsive_offset="on">سلام خریداران! من هستم
                            </div>
                            <div class="tp-caption s_big_text" data-x="['right']" data-y="['top']"
                                data-voffset="['320','320','320','320','320']"
                                data-hoffset="['550','550','550','550','0']"
                                data-fontsize="['40','40','40','40','40','40']"
                                data-lineheight="['50','50','50','50','50']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:-50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">فروش حراجی <br
                                    class="shop_br" /> تا 70% تخفیف.
                            </div>
                            <div class="tp-caption shop_btn" data-x="['right']" data-y="['top']"
                                data-voffset="['440','440','440','440','440']"
                                data-hoffset="['550','550','550','550','550']" data-width="none"
                                data-fontsize="['11','11','11','11','11']" data-height="none" data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="on"
                                data-textAlign="['right','right','right','right']" data-splitout="none"
                                data-responsive_offset="on">
                                <a href="#" class="shop_now_btn">حالا بخرید</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @include('user::front.layouts.category')
    </section>

    <!--================End Shop Slider Area =================-->

    <!--================Promotion Area =================-->
    <section class="promotion_area">
        <div class="container">
            <div class="row promotion_inner">
                <div class="col-sm-5">
                    <div class="promotion_item">
                        <img src="img/promotion/promotion-1.jpg" alt="">
                        <div class="promotion_text">
                            <h4>مجموعه های جدید</h4>
                            <h3>مدل پرطرفدار</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="promotion_item">
                        <img src="img/promotion/promotion-2.jpg" alt="">
                        <div class="promotion_text">
                            <h4>مجموعه های جدید</h4>
                            <h3>مدل پرطرفدار</h3>
                        </div>
                    </div>
                    <div class="promotion_item">
                        <img src="img/promotion/promotion-3.jpg" alt="">
                        <div class="promotion_text">
                            <h4>مجموعه های جدید</h4>
                            <h3>مدل پرطرفدار</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Promotion Area =================-->

    <!--================Our Product Area =================-->
    <section class="our_product_area">
        <div class="container">
            <div class="trainer_title">
                <h2>محصولات ما<span>.</span></h2>
            </div>
            <div class="our_product_slider owl-carousel">
                <div class="item">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-1.jpg" alt="">
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-2.jpg" alt="">
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-3.jpg" alt="">
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-4.jpg" alt="">
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Our Product Area =================-->

    <!--================Your Success Area =================-->
    <section class="your_success_area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-9">
                    <div class="success_content">
                        <h4><span>50%</span>صرفه جویی می کنید</h4>
                        <h2>موفقیت شما</h2>
                        <h5>تی شرت سیاه <br />فقط 20 هزار تومان</h5>
                        <a class="more_d_btn" href="#">حالا بخرید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Your Success Area =================-->

    <!--================Paint Full Width Area =================-->
    <section class="paint_full_area">
        <div class="paint_inner">
            <div class="col-md-6 p0">
                <div class="paint_left_text">
                    <h3>ما به تنهایی متولد شدیم <br /> رنگ پیکسل برای یک زندگی</h3>
                    <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی ایجاد کرد. </p>
                    <a class="more_d_btn" href="#">بیشتر بخوانید</a>
                </div>
            </div>
            <div class="col-md-6 p0">
                <div class="paint_img_inner">
                    <div class="paint_image">
                        <img src="img/paint-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="paint_inner">
            <div class="col-md-6 p0">
                <div class="paint_image">
                    <img src="img/paint-img-2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 p0">
                <div class="paint_left_text">
                    <h3>ما به تنهایی متولد شدیم <br /> رنگ پیکسل برای یک زندگی</h3>
                    <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی ایجاد کرد. </p>
                    <a class="more_d_btn" href="#">بیشتر بخوانید</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Paint Full Width Area =================-->

    <!--================New Product Area =================-->
    <section class="new_product_area">
        <div class="container">
            <div class="trainer_title">
                <h2>محصولات ما<span>.</span></h2>
            </div>
            <ul class="project_fillter product_fillter">
                <li class="active" data-filter="*"><a href="#">بهترین فروش ها</a></li>
                <li data-filter=".new"><a href="#">محصولات جدید</a></li>
                <li data-filter=".most"><a href="#">محصولات داغ</a></li>
            </ul>
            <div class="row new_product_inner project_inner">
                <div class="col-md-3 col-sm-4 col-xs-6 new">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-4.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 most">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-5.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 new">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-6.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 most">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-7.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 new">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-1.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 most">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-2.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 most">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-3.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 new">
                    <div class="product_item">
                        <div class="product_img">
                            <img src="img/product/our-product/product-8.jpg" alt="">
                            <div class="product_hover">
                                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> اضافه به سبد
                                    خرید</a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> مورد علاقه</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> نگاه سریع</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="row m0">
                                <div class="pull-right">
                                    <h4>45.000 تومان</h4>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5>نام محصول در اینجا</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End New Product Area =================-->

    <!--================Client Says Area =================-->
    <section class="client_says_area yellow_client_say">
        <div class="container">
            <h3 class="client_title">مشتریان ما چی می گویند؟</h3>
            <div class="client_says_slider">
                <div id="client_says_slider" class="rev_slider" data-version="5.3.1.6">
                    <ul>
                        <li data-index="rs-1595" data-transition="slotzoom-horizontal" data-slotamount="10"
                            data-thumb="img/user/client/client-1.png">
                            <!-- MAIN IMAGE -->
                            <div class="slider_text_box">
                                <div class="tp-caption client_first_text" data-width="['900']" data-height="auto"
                                    data-whitespace="normal" data-x="['center']" data-y="['middle']"
                                    data-voffset="['0','0','0','0','0','0']" data-hoffset="['0','0','0','0','0']"
                                    data-fontsize="['28','28','28','28','28','28']"
                                    data-lineheight="['35','35','35','35','35']" data-transform_idle="o:1;"
                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                    data-splitout="none" data-responsive_offset="on">
                                    <div class="client_says_text">
                                        <img class="img-circle" src="img/user/client/client-1.png" alt="">
                                        <p>“لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است ”</p>
                                        <h4>علی عمادزاده</h4>
                                        <h5>متخصص طراحی وردپرس</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-index="rs-1596" data-transition="slotzoom-horizontal" data-slotamount="10"
                            data-thumb="img/user/client/client-2.png">
                            <!-- MAIN IMAGE -->
                            <div class="slider_text_box">
                                <div class="tp-caption client_first_text" data-width="['750']" data-height="auto"
                                    data-whitespace="normal" data-x="['center']" data-y="['middle']"
                                    data-voffset="['0','0','0','0','0','0']" data-hoffset="['0','0','0','0','0']"
                                    data-fontsize="['28','28','28','28','28','28']"
                                    data-lineheight="['35','35','35','35','35']" data-transform_idle="o:1;"
                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                    data-splitout="none" data-responsive_offset="on">
                                    <div class="client_says_text">
                                        <img class="img-circle" src="img/user/client/client-2.png" alt="">
                                        <p>“لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است ”</p>
                                        <h4>علی عمادزاده</h4>
                                        <h5>متخصص طراحی وردپرس</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-index="rs-1597" data-transition="slotzoom-horizontal" data-slotamount="10"
                            data-thumb="img/user/client/client-3.png">
                            <!-- MAIN IMAGE -->
                            <!--LAYER NR. 1 -->
                            <div class="slider_text_box">
                                <div class="tp-caption client_first_text" data-width="['750']" data-height="auto"
                                    data-whitespace="normal" data-x="['center']" data-y="['middle']"
                                    data-voffset="['0','0','0','0','0','0']" data-hoffset="['0','0','0','0','0']"
                                    data-fontsize="['28','28','28','28','28','28']"
                                    data-lineheight="['35','35','35','35','35']" data-transform_idle="o:1;"
                                    data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                    data-splitout="none" data-responsive_offset="on">
                                    <div class="client_says_text">
                                        <img class="img-circle" src="img/user/client/client-3.png" alt="">
                                        <p>“لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است ”</p>
                                        <h4>علی عمادزاده</h4>
                                        <h5>متخصص طراحی وردپرس</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--================End Client Says Area =================-->

    <!--================Box Client Slider Area =================-->
    <section class="box_client_slider_area">
        <div class="container">
            <div class="box_c_slider owl-carousel">
                <div class="item">
                    <img src="img/clients-logo/shop-logo/shop-logo-1.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/shop-logo/shop-logo-2.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/shop-logo/shop-logo-3.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/shop-logo/shop-logo-4.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/shop-logo/shop-logo-5.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/shop-logo/shop-logo-6.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================End Box Client Slider Area =================-->

    <!--================Start ag Footer Area =================-->
    @include('user::front.layouts.footer')