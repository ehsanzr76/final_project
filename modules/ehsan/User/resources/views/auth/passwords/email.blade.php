@extends('front::layouts.blank')
@section('content')

<!-- Loader starts-->
<!-- Loader ends-->
<!-- page-wrapper Start-->


<div class="col-lg-12">
    @include('panel::layouts.message')
    <form method="POST" action="{{ route('password.email') }}" class="sky-form boxed">
        @csrf
        <header style="text-align: center"><i class="fa fa-users"></i> بازیابی رمز عبور</header>



        <fieldset class="nomargin">
            <div class="form-content form-account">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>

                @endif
            </div>
            <fieldset class="nomargin">

                <label class="label margin-top-20">ایمیل</label>
                <label class="input">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="ایمیل خود را وارد کنید...">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>

                    <label for="recaptcha">تصویر امنیتی</label>
                    {!! htmlFormSnippet() !!}

                    <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i>
                        بازیابی</button>
                    </fieldset>
    </form>
</div>



@endsection
<!-- page-wrapper Ends-->
<!-- latest jquery-->