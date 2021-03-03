@include('front::layouts.header')

<body class="smoothscroll enable-animation" dir="rtl">
    <div id="wrapper">
        @include('front::layouts.navbar')

        @include('front::layouts.breadcrumb')
        @include('panel::layouts.message')
        <section>
            <div class="container">

                <div class="row">

                    <!-- RIGHT -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">

                        <div class="row">

                            <!-- IMAGE -->
                            <div class="col-lg-4 col-sm-4" style="text-align: center">

                                <div class="thumbnail relative margin-bottom-3" ]>

                                    <!-- 
                                        IMAGE ZOOM 
                                        
                                        data-mode="mouseover|grab|click|toggle"
                                    -->
                                    <figure id="zoom-primary" class="zoom" data-mode="mouseover"
                                        style="position: relative; overflow: hidden;">
                                        <!-- 
                                            zoom buttton
                                            
                                            positions available:
                                                .bottom-right
                                                .bottom-left
                                                .top-right
                                                .top-left

                                        <!-- 
                                            image 
                                            
                                            Extra: add .image-bw class to force black and white!
                                        -->
                                        <img class="img-responsive" src="{{$business->image->thumb}}"
                                            style="width:250px;height:200px" alt="This is the product title">
                                        <img src="assets/images/demo/shop/products/1000x1500/p5.jpg" class="zoomImg"
                                            style="position: absolute; top: -196.289px; left: -538.955px; opacity: 0; width: 1000px; height: 1500px; border: none; max-width: none; max-height: none;">
                                    </figure>

                                </div>

                                <!-- Thumbnails (required height:100px) -->

                                <!-- /Thumbnails -->

                            </div>
                            <!-- /IMAGE -->

                            <!-- ITEM DESC -->
                            <div class="col-lg-6 col-sm-6">


                                <!-- /buttons -->

                                <!-- price -->
                                <div class="shop-item-price" style="text-align: center">
                                    <span>
                                        <h4>{{$business->title}}</h4>
                                    </span>
                                </div>
                                <!-- /price -->

                                <hr>

                                <div class="clearfix margin-bottom-30">

                                    <strong>دسته بندی: </strong><b  style="color: rgb(255, 136, 0)">{{$business->category->title}}</b>
                                </div>


                                <!-- short description -->
                                <p>{{$business->body}}</p>
                                <!-- /short description -->


                                <!-- countdown -->
                                <div class="text-center">
                                    <div class="countdown is-countdown" data-from="January 31, 2018 15:03:26"
                                        data-labels="years,months,weeks,days,hour,min,sec"><span
                                            class="countdown-row countdown-show3"><span
                                                class="countdown-section"></span><span class="countdown-section"><span
                                                    class="countdown-amount">{{$business->hit}}</span><span
                                                    class="countdown-period">تعداد بازدید ها</span></span><span
                                                class="countdown-section"><span class="countdown-amount">{{$business->comments()->count()}}</span><span
                                                    class="countdown-period">تعداد نظرات</span></span></span></div>
                                </div>
                                <!-- /countdown -->


                                <hr>

                                <!-- FORM -->
                                <form class="clearfix form-inline nomargin" method="get" action="shop-cart.html">
                                    <input type="hidden" name="product_id" value="1">

                                    <!-- see assets/js/view/demo.shop.js -->
                                    <input type="hidden" id="color" name="color" value="yellow">
                                    <input type="hidden" id="qty" name="qty" value="1">
                                    <input type="hidden" id="size" name="size" value="5">
                                    <!-- see assets/js/view/demo.shop.js -->





                                </form>
                                <!-- /FORM -->

                                <!-- Share -->
                                <!-- /Share -->

                                <!-- /rating -->

                            </div>
                            <!-- /ITEM DESC -->

                        </div>



                        <ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
                            <li role="presentation" class=""><a href="#description" role="tab" data-toggle="tab"
                                    aria-expanded="false">مشخصات کسب و کار</a></li>
                            <li role="presentation" class=""><a href="#reviews" role="tab" data-toggle="tab"
                                    aria-expanded="false">نظرات کاربران</a></li>
                        </ul>

                        <div class="tab-content padding-top-20">
                            <!-- DESCRIPTION -->
                            <div role="tabpanel" class="tab-pane fade" id="description">
                                <i class="fa fa-map-marker"></i>  آدرس محل کسب و کار : <p>{{$business->address}}</p>

                                <i class="fa fa-phone"></i>  شماره تماس : {{$business->mobile}}
                                <br><br>
                           
                                <i class="fa fa-calendar"></i>  تاریخ ثبت  : {!! jdate($business->created_at)->format('%Y/%m/%d') !!}
                                    
                              
                            </div>

                            <!-- SPECIFICATIONS -->

                            <!-- REVIEWS -->
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <!-- REVIEW ITEM -->

                                @foreach ($comments as $comment)
                                <div class="block margin-bottom-60">

                                    <span class="user-avatar">
                                        <i class="icon-user"></i>
                                    </span>

                                    <div class="media-body">
                                        <h4 class="media-heading size-14">
                                            {{$comment->name}}-
                                            <span
                                                class="text-muted">{!!jdate($comment->created_at)->format('%Y/%m/%d')!!}</span>
                                            {{-- <span class="size-14 text-muted">
                                                <!-- stars -->
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span> --}}
                                        </h4>

                                        <p>
                                            {{$comment->body}}
                                        </p>

                                    </div>




                                </div>
                                <hr>
                                @endforeach

                                <!-- /REVIEW ITEM -->

                                <!-- REVIEW ITEM 
                                <!-- /REVIEW ITEM -->


                                <!-- REVIEW FORM -->
                                <h4 class="page-header margin-bottom-40">ثبت دیدگاه</h4>
                                <form method="post" action="{{route('comment.store' , $business->id)}}">
                                    @csrf
                                    <div class="row margin-bottom-10">

                                        <div class="col-md-6 margin-bottom-10">
                                            <!-- Name -->
                                            <label class="col-form-label pt-0" for="exampleInputEmail1">نام*</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="نام خود را وارد کنید . . ." maxlength="100"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <div class="col-md-6">
                                            <!-- Email -->
                                            <label class="col-form-label pt-0" for="exampleInputEmail1">ایمیل</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="ایمیل خود را وارد کنید . . ." maxlength="100"
                                                value="{{ old('email') }}">
                                        </div>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <!-- Comment -->
                                    <div class="margin-bottom-30">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">متن*</label>
                                        <textarea name="body" id="text" class="form-control" rows="6"
                                            placeholder="دیدگاه خود را وارد کنید . . ." maxlength="1000" required
                                            autocomplete="body" autofocus></textarea>
                                    </div>

                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- 
                                    <!-- Stars -->
                                    <div class="product-star-vote clearfix">

                                        <label class="radio pull-left">
                                            <input type="radio" name="product-review-vote" value="1">
                                            <i></i> 1 Star
                                        </label>

                                        <label class="radio pull-left">
                                            <input type="radio" name="product-review-vote" value="2">
                                            <i></i> 2 Stars
                                        </label>

                                        <label class="radio pull-left">
                                            <input type="radio" name="product-review-vote" value="3">
                                            <i></i> 3 Stars
                                        </label>

                                        <label class="radio pull-left">
                                            <input type="radio" name="product-review-vote" value="4">
                                            <i></i> 4 Stars
                                        </label>

                                        <label class="radio pull-left">
                                            <input type="radio" name="product-review-vote" value="5">
                                            <i></i> 5 Stars
                                        </label>

                                    </div> --}}

                                    <!-- Send Button -->
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>ارسال
                                        نظر</button>

                                </form>
                                <!-- /REVIEW FORM -->

                            </div>
                        </div>


                        <hr class="margin-top-80 margin-bottom-80">



                    </div>


                    <!-- LEFT -->


                </div>

            </div>
        </section>



        <section>
            <div class="container">
        
                <div class="heading-title heading-dotted">
                    <h2 class="size-20">کسب و کار های مشابه</h2>
                </div>
        
                <ul class="shop-item-list row list-inline nomargin">
        
                    @foreach ($RelatedBusiness as $item)
        
                    <li class="col-lg-2 col-sm-4" style="border: rgb(216, 223, 223) solid">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="{{route('business.show' , $item->id)}}">
                                    <img class="img-responsive" src="{{$item->image->thumb ?? ''}}" style="height:140px;width:140px" alt="">
                                </a>
                                <!-- /hover buttons -->
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-15">{{$item->title}}</h1><hr>
                                
                                <!-- rating -->
                                <span class="pull-center"><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star-o font-primary"></i></span>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    <i class="icon-eye" style="color: rgb(255, 60, 0)"></i> {{$item->hit}} <br>
                                    <i class="fa fa-comments-o" style="color: rgb(48, 130, 185)"></i> {{$item->comments()->count()}}<br>
                                </div>
                                <br>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    @endforeach
                   
        
        
                   
                    
                    <!-- ITEM -->
                
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    {{-- <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/6.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Mobile Phone</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $53.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/7.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Black Shirt</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $68.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/8.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Backpack</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $19.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/9.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Blue Shoes</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $81.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/10.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Water Watch</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $38.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/11.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Bag</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $22.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/1.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Woman Bag</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $15.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/2.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Woman Hat</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $61.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/3.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Cotton Cap</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $56.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/4.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Sun Glasses</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $98.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li>
                    <!-- /ITEM -->
        
                    <!-- ITEM -->
                    <li class="col-lg-2 col-sm-4">
        
                        <div class="shop-item">
        
                            <div class="thumbnail noborder nopadding">
                                <!-- product image(s) -->
                                <a class="shop-item-image" href="shop-single-left.html">
                                    <img class="img-responsive" src="assets/images/demo/shop/home/products/0.jpg" alt="">
                                </a>
                                <!-- /product image(s) -->
        
                                <!-- hover buttons -->
                                <div class="shop-option-over">
                                    <a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
                                </div>
                                <!-- /hover buttons -->
        
                            </div>
                            
                            <div class="shop-item-summary text-center">
                                <h2 class="size-14">Bag</h2>
                                
                                <!-- rating -->
                                <div class="shop-item-rating-line">
                                    <div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
                                </div>
                                <!-- /rating -->
        
                                <!-- price -->
                                <div class="shop-item-price">
                                    $34.00
                                </div>
                                <!-- /price -->
                            </div>
        
                        </div>
        
                    </li> --}}
                    <!-- /ITEM -->
        
                </ul>
        
            </div>
        </section>
        
        
        
        @include('front::layouts.footer')