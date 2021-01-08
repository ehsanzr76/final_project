@include('user::front.layouts.header')
@include('user::front.layouts.navbar')


<body main-theme-layout="rtl">
    <!-- Loader starts-->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    @include('user::front.layouts.message')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="auth-bg">
                        <div class="authentication-box">
                            <div class="card mt-4 p-4">

                                <h3 class="text-center" style="color: rgb(136, 116, 116)">فرم ورود به سایت</h3>

                                <br>

                                <form class="theme-form" method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">ایمیل یا
                                            موبایل</label>
                                        <input class="form-control  @error('email') is-invalid @enderror" type="text"
                                            placeholder="ایمیل یا شماره موبایل خود را وارد کنید..." name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror


                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">رمز عبور</label>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            type="password" placeholder="رمز عبور خود را وارد کنید...." name="password"
                                            required autocomplete="current-password">
                                    </div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                  
                                    <label class="ui-checkbox">
                                        مرا به خاطر بسپار
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>

                                    
                                    <div class="form-group">
                                        <label for="recaptcha">تصویر امنیتی</label>
                                        {!! htmlFormSnippet() !!}
                                    </div>



                                 

                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="submit">ورود</button>
                                        </div>
                                    </div><br>


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
                                    <div style="text-align: left">
                                        <label class="ui-checkbox">
                                            <a href="{{ route('register') }}">ثبت نام</a>
                                            <br>
                                            <a href="{{ url('password/reset') }}">رمز عبور را فراموش کرده اید؟ کلیک
                                                کنید</a>


                                        </label>
                                    </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <section class="shop_slider_area">
                        @include('user::front.layouts.category')
                    </section>
                </div>
            </div>
        </div>
    </div>

    @include('user::front.layouts.footer')
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->