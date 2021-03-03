@extends('front::layouts.blank')
@section('content')




<div class="col-lg-12">
    @include('panel::layouts.message')
    <!-- login form -->

    <form  method="POST" action="{{route('register')}}" class="sky-form boxed">
        @csrf
        <header style="text-align: center"><i class="fa fa-users"></i><b> ثبت نام </b></header>

        <fieldset class="nomargin">

            <label class="label margin-top-20">نام و نام خانوادگی *</label>
            <label class="input">
                <input class="form-control  @error('name') is-invalid @enderror" type="text"
                    placeholder="نام و نام خانوادگی خود را وارد کنید..." name="name" value="{{ old('name') }}" required
                    autocomplete="name" autofocus>
                <span class="tooltip tooltip-top-right">نام و نام خانوادگی</span>
            </label>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <label class="label margin-top-20">ایمیل *</label>
            <label class="input">
                <input class="form-control  @error('email') is-invalid @enderror" type="email"
                    placeholder="ایمیل خود را وارد کنید..." name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus>
                <span class="tooltip tooltip-top-right">آدرس ایمیل</span>
            </label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <label class="label margin-top-20">شماره موبایل</label>
            <label class="input">
                <input class="form-control  @error('mobile') is-invalid @enderror" type="mobile"
                    placeholder="شماره موبایل خود را وارد کنید..." name="mobile" value="{{ old('mobile') }}" required
                    autocomplete="mobile" autofocus>
                <span class="tooltip tooltip-top-right">شماره موبایل</span>
            </label>
            @error('mobile')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <label class="label margin-top-20">رمز عبور *</label>
            <label class="input">
                <input class="form-control  @error('password') is-invalid @enderror" type="password"
                    placeholder=" رمز عبور خود را وارد کنید..." name="password" required
                    autocomplete="password" autofocus>
                <span class="tooltip tooltip-top-right">رمز عبور</span>
            </label>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="col-form-label" style="color: rgb(136, 116, 116)">رمز عبور باید حداقل
                8 کاراکتر و ترکیبی از حروف بزرگ ، حروف کوچک ، اعداد و کاراکتر های غیر الفبا
                مانند ()*/$&#%@! باشد
            </label>



            
            <label class="label margin-top-20">تکرار رمز عبور *</label>
            <label class="input">
                <input class="form-control" type="password"
                    placeholder=" رمز عبور خود را مجدد وارد کنید..." name="password_confirmation" required autocomplete="new-password">
                <span class="tooltip tooltip-top-right">تکرار رمز عبور</span>
            </label>


        
            <label for="recaptcha">تصویر امنیتی</label>
            {!! htmlFormSnippet() !!}


            <br>
            
        </fieldset>


        <footer class="celarfix">
            <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i>ثبت نام</button>
            <div class="login-forgot-password pull-right">
                <a href="{{route('login')}}" style="color: rgb(60, 0, 255)">آیا قبلا عضو شده اید؟ کلیک کنید</a>
            </div>
        </footer>
    </form>
    <!-- /login form -->

</div>

    <!-- Loader starts-->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->


                            
@endsection
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->