@include('user::front.layouts.header')
@include('user::front.layouts.navbar')


<body main-theme-layout="rtl">
    <!-- Loader starts-->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="auth-bg">
                        <div class="authentication-box">
                            <div class="card mt-4 p-4">
                                <h3 class="text-center" style="color: rgb(136, 116, 116)">بازیابی رمز عبور</h3>
                                <br>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-content form-account">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('status')}}
                                        </div>
                                            
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">ایمیل</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل خود را وارد کنید...">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                    </div>

    
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="submit">بازیابی</button>
                                        </div>
                                    
                                
                                    {{-- <div class="form-divider"></div>
                                    <div class="social mt-3">
                                        <div class="form-group btn-showcase d-flex">
                                            <button class="btn social-btn btn-fb d-inline-block"> <i
                                                    class="fa fa-facebook"></i></button>
                                            <button class="btn social-btn btn-twitter d-inline-block"><i
                                                    class="fa fa-google"></i></button>
                                            <button class="btn social-btn btn-google d-inline-block"><i
                                                    class="fa fa-twitter"></i></button>
                                            <button class="btn social-btn btn-github d-inline-block"><i
                                                    class="fa fa-github"></i></button>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <section class="shop_slider_area">
                        <div class="famouse_category">
                            <div class="cate_title">
                                <h4><i class="fa fa-bars" aria-hidden="true"></i> دسته بندی های فروشگاه</h4>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>صوتی و تصویری</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>صوتی و تصویری</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>الکترونیک خودرو</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>بازی های ویدئویی و
                                        کنسول ها</a></li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>لپ تاپ و کامپیوتر</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>دوربین</a></li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>موبایل و تبلت</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>بازی های ویدئویی و
                                        کنسول ها</a></li>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>صوتی و تصویری</a>
                                </li>


                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('front.layouts.footer') --}}
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->









