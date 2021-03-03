@extends('front::layouts.blank')
@section('content')





<div class="col-lg-12">
    @include('panel::layouts.message')
    <!-- login form -->

    <form action="{{route('login')}}" method="post" class="sky-form boxed">
        @csrf
        <header style="text-align: center"><i class="fa fa-users"></i> ورود به سایت </header>





        <fieldset class="nomargin">

            <label class="label margin-top-20">ایمیل</label>
            <label class="input">
                <i class="ico-append fa fa-envelope"></i>
                <input class="form-control  @error('email') is-invalid @enderror" type="text"
                    placeholder="ایمیل خود را وارد کنید..." name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus>
                <span class="tooltip tooltip-top-right">آدرس ایمیل</span>
            </label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <label class="label margin-top-20">رمز عبور</label>
            <label class="input">
                <i class="ico-append fa fa-lock"></i>
                <input class="form-control @error('password') is-invalid @enderror" type="password"
                    placeholder="رمز عبور خود را وارد کنید...." name="password" required
                    autocomplete="current-password">
                <b class="tooltip tooltip-top-right">رمز عبور</b>
            </label>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- <label class="checkbox margin-top-20">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <i></i> مرا به خاطر بسپار
            </label><br> --}}
            <br>

            <label for="recaptcha">تصویر امنیتی</label>
            {!! htmlFormSnippet() !!}


        </fieldset>

        <footer class="celarfix">
            <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i> ورود</button>
            <div class="login-forgot-password pull-right">
                <a href="{{route('register')}}" style="color: rgb(60, 0, 255)">ثبت نام</a><br>
                <a href="{{ url('password/reset') }}" style="color: rgb(60, 0, 255)">رمز عبور را فراموش کرده اید؟ کلیک
                    کنید</a>
                   
            </div>
        </footer>
    </form>
    <!-- /login form -->

</div>



@endsection
<!-- page-wrapper Ends-->
<!-- latest jquery-->