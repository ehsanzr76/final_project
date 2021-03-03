@extends('front::layouts.blank')
@section('content')




<div class="col-lg-12">
    @include('panel::layouts.message')
    <form method="POST" action="{{ route('password.update') }}" class="sky-form boxed">
        @csrf
        <header style="text-align: center"><i class="fa fa-users"></i> بروز رسانی رمز عبور</header>



        <fieldset class="nomargin">
            <input type="hidden" name="token" value="{{ $token }}">

            <label class="label margin-top-20">ایمیل</label>
            <label class="input">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}"
                    autofocus readonly>


                <label class="label margin-top-20">رمز عبور جدید</label>
                <label class="input">
                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                        placeholder="رمز عبور خود را وارد کنید...." name="password" required
                        autocomplete="current-password">


                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                      
                    <label class="col-form-label" style="color: rgb(136, 116, 116);text-align:right">رمز عبور باید
                        حداقل
                        8 کاراکتر و ترکیبی از حروف بزرگ ، حروف کوچک ، اعداد و کاراکتر های غیر الفبا
                        مانند ()*/$&#%@! باشد
                    </label>


                    <label class="label margin-top-20">تکرار رمز عبور</label>
                    <label class="input">
                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                            placeholder="رمز عبور خود را مجدد وارد کنید...." name="password_confirmation" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                      
                        
                        <br>
                        <label for="recaptcha">تصویر امنیتی</label>
                        {!! htmlFormSnippet() !!}
                        <br>

                        <br>


                        <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i>
                            بروزرسانی رمز عبور</button>
        </fieldset>
    </form>
</div>

@endsection
<!-- page-wrapper Ends-->
<!-- latest jquery-->