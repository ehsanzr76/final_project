@extends('front::layouts.blank')
@section('content')



<div class="col-lg-12">
    @include('panel::layouts.message')

    <!-- login form -->


    <form action="{{route('contact.store')}}" method="post" class="sky-form boxed" enctype="multipart/form-data">
        @csrf
        <header style="text-align: center"> <i class="icon-email"></i> </i></i> انتقادات و پیشنهادات خود را با ما در میون
            بگذارید </header>

        <fieldset class="nomargin">


            @auth

            <label class="label margin-top-20">نام شما *</label>
            <label class="input">
                <input class="form-control  @error('name') is-invalid @enderror" type="text"
                    placeholder="نام خود را وارد کنید..." name="name" value="{{ Auth::User()->name}}" required
                    autocomplete="name" autofocus>
            </label>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <label class="label margin-top-20">ایمیل شما *</label>
            <label class="input">
                <input class="form-control  @error('email') is-invalid @enderror" type="email"
                    placeholder="ایمیل خود را وارد کنید..." name="email" value="{{ Auth::User()->email}}" required
                    autocomplete="email" autofocus>
            </label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror




            @else



            <label class="label margin-top-20">نام شما *</label>
            <label class="input">
                <input class="form-control  @error('name') is-invalid @enderror" type="text"
                    placeholder="نام خود را وارد کنید..." name="name" value="{{ old('name') }}" required
                    autocomplete="name" autofocus>
            </label>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <label class="label margin-top-20">ایمیل شما *</label>
            <label class="input">
                <input class="form-control  @error('email') is-invalid @enderror" type="email"
                    placeholder="ایمیل خود را وارد کنید..." name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus>
            </label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @endauth

            <div class="form-group">
                <label for="exampleInputPassword1">توضیحات *</label>
                <textarea class="form-control @error('body') is-invalid @enderror" type="text" name="body" required
                    autocomplete="body"></textarea>
            </div>

            <br>

            <label for="recaptcha">تصویر امنیتی</label>
            {!! htmlFormSnippet() !!}



        </fieldset>

        <footer class="celarfix">
            <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i> ارسال</button>
        </footer>
    </form>
    <!-- /login form -->

</div>



@endsection










<!-- Loader starts-->
<!-- Loader ends-->
<!-- page-wrapper Start-->
<!-- page-wrapper Ends-->
<!-- latest jquery-->