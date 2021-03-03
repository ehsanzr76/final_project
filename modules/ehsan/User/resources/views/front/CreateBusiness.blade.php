@extends('front::layouts.blank')
@section('content')



<div class="col-lg-12">
    @include('panel::layouts.message')

    <!-- login form -->


    <form action="{{route('business.store')}}" method="post" class="sky-form boxed" enctype="multipart/form-data">
        @csrf
        <header style="text-align: center"><i class="fa fa-briefcase"></i> فرم ثبت کسب و کار </header>

        <fieldset class="nomargin">

            <label class="label margin-top-20">عنوان کسب و کار *</label>
            <label class="input">
                <input class="form-control  @error('title') is-invalid @enderror" type="text"
                    placeholder="عنوان کسب و کار خود را وارد کنید..." name="title" value="{{ old('title') }}" required
                    autocomplete="title" autofocus>
            </label>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <label class="label margin-top-20">شماره موبایل *</label>
            <label class="input">
                <input class="form-control  @error('mobile') is-invalid @enderror" type="mobile"
                    placeholder="شماره موبایل خود را وارد کنید..." name="mobile" value="{{ old('mobile') }}" required
                    autocomplete="mobile" autofocus>
            </label>
            @error('mobile')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <label class="label margin-top-20">انتخاب دسته بندی *</label>
            <select name="category_id" class="form-control">
                @foreach ($category as $item)

                <option value="{{$item->id}}">{{$item->title}}</option>

                @endforeach

            </select>



            <label class="label margin-top-20">شماره پروانه کسب *</label>
            <label class="input">
                <input class="form-control  @error('BusinessNumber') is-invalid @enderror" type="text"
                    placeholder="شماره پروانه کسب خود را وارد کنید..." name="BusinessNumber"
                    value="{{ old('BusinessNumber') }}" required autocomplete="BusinessNumber" autofocus>
            </label>
            @error('BusinessNumber')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>


            <div class="form-group draggable ui-draggable ui-draggable-handle">
                <label for="input-file-1">آپلود عکس *</label>
                <input id="input-file-1" type="file" name="image">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">توضیحات *</label>
                <textarea class="form-control @error('body') is-invalid @enderror" type="text" name="body" required
                    autocomplete="body"></textarea>
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">آدرس *</label>
                <textarea class="form-control @error('address') is-invalid @enderror" type="text" name="address"
                    required autocomplete="address"></textarea>
            </div>
            <br>

            <label for="recaptcha">تصویر امنیتی</label>
            {!! htmlFormSnippet() !!}



        </fieldset>

        <footer class="celarfix">
            <button type="submit" class="btn btn-success noradius pull-left"><i class="fa fa-check"></i> ثبت
                درخواست</button>
                
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