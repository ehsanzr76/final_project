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
                                <h3 class="text-center" style="color: rgb(136, 116, 116)">فرم ثبت کسب و کار</h3>
                                <br>

                                <form class="theme-form" method="POST" action="{{route('business.store')}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">عنوان کسب و کار
                                            *</label>
                                        <input class="form-control  @error('title') is-invalid @enderror" type="text"
                                            placeholder="عنوان کسب و کار خود را وارد کنید" name="title"
                                            value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <br>
                                        <div class="form-group">
                                            <label class="col-form-label" style="color: rgb(136, 116, 116)">شماره موبایل
                                                *</label>
                                            <input class="form-control @error('mobile') is-invalid @enderror"
                                                type="text" placeholder="شماره موبایل خود را وارد کنید" name="mobile"
                                                value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror


                                        </div>


                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="exampleInputPassword1">تاریخ شروع</label>
                                        <div id="app">
                                            <date-picker name="startDate" v-model="date"></date-picker>
                                        </div>
                                    </div>

                                    @error('startDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">تاریخ پایان</label>
                                        <div id="app1">
                                            <date-picker name="endDate" v-model="date"></date-picker>
                                        </div>
                                    </div> --}}

                                    @error('endDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror




                                    <label for="exampleInputPassword1">انتخاب دسته بندی *</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($category as $item)

                                        <option value="{{$item->id}}">{{$item->title}}</option>

                                        @endforeach

                                    </select><br>

                                    <div class="form-group">
                                        <label class="col-form-label" style="color: rgb(136, 116, 116)">شماره پروانه کسب
                                            *</label>
                                        <input class="form-control @error('BusinessNumber') is-invalid @enderror"
                                            type="text" placeholder="شماره پروانه خود را وارد کنید"
                                            name="BusinessNumber" value="{{ old('BusinessNumber') }}" required
                                            autocomplete="BusinessNumber" autofocus>

                                        @error('BusinessNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>


                                    <div class="form-group draggable ui-draggable ui-draggable-handle">
                                        <label for="input-file-1">آپلود عکس</label>
                                        <input id="input-file-1" type="file" name="image">
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleInputPassword1">توضیحات *</label>
                                        <textarea class="form-control @error('body') is-invalid @enderror" type="text"
                                            name="body" required autocomplete="body"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">آدرس *</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror"
                                            type="text" name="address" required autocomplete="address"></textarea>
                                    </div>





                                    <div class="form-group">
                                        <label for="recaptcha">تصویر امنیتی</label>
                                        {!! htmlFormSnippet() !!}
                                    </div>





                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="submit">ثبت درخواست</button>
                                        </div>
                                    </div><br><br><br>


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