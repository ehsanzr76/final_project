@extends('front::layouts.blank')
@section('content')


<div class="col-lg-12">
    @include('panel::layouts.message')
    <div class="card mt-4 p-4" style="text-align: center">

        <h3 class="text-center" style="color: rgb(136, 116, 116)">تایید حساب</h3>
        <br>
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            کد فعالسازی حساب کاربری به ایمیل {{auth()->user()->email}} ارسال شد.
        </div>
        @endif

        {{ __('ایمیل خود را جهت فعالسازی حساب کاربری چک کنید. ') }}

        <br><br>
        <form action="{{route('verification.verify')}}" method="post" class="sky-form boxed">
            @csrf
            <fieldset class="nomargin">

                <label class="label margin-top-20">کد تایید 6 رقمی را وارد
                    کنید</label>
                <label class="input">
                    <input id="username" class="form-control @error('verify_code') is-invalid @enderror" type="text"
                        name="verify_code">
                </label>
                @error('verify_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                    <label for="recaptcha">تصویر امنیتی</label>
                    {!! htmlFormSnippet() !!}

            </fieldset>

            <footer class="celarfix">
                <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i>
                    فعالسازی</button>
                <div class="login-forgot-password pull-right">
                    <a href="#" onclick="event.preventDefault();document.getElementById('resend-code').submit()">ارسال
                        مجدد کد فعالسازی</a>
                </div>
            </footer>
        </form>

        <form id="resend-code" action="{{route('verification.resend')}}" method="POST">
            @csrf
        </form>
    </div>
    @endsection

    {{-- @include('front.layouts.footer') --}}
    <!-- page-wrapper Ends-->
    <!-- latest jquery-->