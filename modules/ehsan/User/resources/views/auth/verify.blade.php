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
                            <div class="card mt-4 p-4" style="text-align: center">

                                <h3 class="text-center" style="color: rgb(136, 116, 116)">تایید حساب</h3>
                                <br>
                                @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('کد فعالسازی حساب کاربری به ایمیل شما ارسال شد.') }}
                                </div>
                                @endif

                                {{ __('ایمیل خود را جهت فعالسازی حساب کاربری چک کنید. ') }}

                                <br><br>
                                <form class="theme-form" method="POST" action="{{ route('verification.verify') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">کد تایید را وارد
                                            کنید</label>
                                        <input id="username"
                                            class="form-control @error('verify_code') is-invalid @enderror" type="text"
                                            name="verify_code">

                                        @error('verify_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group" style="text-align: right">
                                        <label for="recaptcha">تصویر امنیتی</label>
                                        {!! htmlFormSnippet() !!}
                                    </div>

                                    <div class>
                                        <button class="btn btn-primary" type="submit">تایید</button>
                                    </div>
                                    <br>
                                    <div class>
                                        <a href="#"
                                            onclick="event.preventDefault();document.getElementById('resend-code').submit()">ارسال
                                            مجدد کد فعالسازی</a>
                                    </div>
                                </form>

                                <form id="resend-code" action="{{route('verification.resend')}}" method="POST">
                                    @csrf
                                </form>
                            </div>
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

    {{-- @include('front.layouts.footer') --}}
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->