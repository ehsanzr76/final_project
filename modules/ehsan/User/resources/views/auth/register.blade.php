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
                                <h3 class="text-center" style="color: rgb(136, 116, 116)">فرم ثبت نام</h3>
                                <br>
                                <form class="theme-form" method="POST" action="{{route('register')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">نام و نام
                                            خانوادگی *</label>
                                        <input id="name" class="form-control @error('name') is-invalid @enderror"
                                            type="text" placeholder="نام و نام خانوادگی خود را وارد کنید..." name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>










                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">ایمیل *</label>
                                        <input id="email" class="form-control  @error('email') is-invalid @enderror"
                                            type="email" placeholder="ایمیل خود را وارد کنید...." name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">شماره موبایل
                                        </label>
                                        <input id="mobile" class="form-control  @error('mobile') is-invalid @enderror"
                                            type="text" placeholder="شماره موبایل خود را وارد کنید...." name="mobile"
                                            value="{{ old('mobile') }}">

                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">رمز عبور
                                            *</label>
                                        <input id="password"
                                            class="form-control @error('password') is-invalid @enderror" type="password"
                                            placeholder="رمز عبور خود را وارد کنید...." name="password" required
                                            autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>




                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">تکرار رمز
                                            عبور *</label>
                                        <input class="form-control" type="password"
                                            placeholder="رمز عبور خود را مجدد وارد کنید...."
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>


                                    <div class="form-group">
                                        <label for="recaptcha">تصویر امنیتی</label>
                                        {!! htmlFormSnippet() !!}
                                    </div>

                                    <label class="col-form-label" style="color: rgb(136, 116, 116)">رمز عبور باید حداقل
                                        8 کاراکتر و ترکیبی از حروف بزرگ ، حروف کوچک ، اعداد و کاراکتر های غیر الفبا
                                        مانند ()*/$&#%@! باشد
                                    </label>

                                    <br>


                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="submit">ثبت نام</button>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-left mt-2 m-l-20">آیا شما قبلا عضو شده اید؟ <a
                                                    class="btn-link text-capitalize" href="{{route('login')}}">ورود</a>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="form-divider"></div>
                                    {{-- <div class="social mt-3">
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
                <br><br>
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