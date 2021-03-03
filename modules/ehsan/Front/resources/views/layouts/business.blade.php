<section>
    <div class="container">

        <div class="heading-title heading-dotted">
            <h2 class="size-20">همه کسب و کار ها</h2>
        </div>

        <ul class="shop-item-list row list-inline nomargin">

            @foreach ($business as $item)

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
            <br>
            {{$business->links()}}


           
            
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


