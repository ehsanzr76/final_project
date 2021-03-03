@extends('UserPanel::layouts.blank')
@section('content')


<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            @include('UserPanel::layouts.message')
            <h5>ویرایش پروفایل</h5>
            <div class="card-body">
                <form class="theme-form" method="POST" action="{{route('UserPanel.UpdateProfile')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label pt-0" for="exampleInputEmail1">نام</label>
                        <input class="form-control" id="exampleInputEmail1" type="text"
                            placeholder="نام کاربر را وارد کنید" data-original-title="" title="" name="name"
                            value="{{auth()->user()->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ایمیل</label>
                        <input class="form-control" id="exampleInputPassword1" type="email"
                            placeholder="ایمیل کاربر را وارد کنید" data-original-title="" title="" name="email"
                            value="{{auth()->user()->email}}" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">موبایل</label>
                        <input class="form-control" id="exampleInputPassword1" type="mobile"
                            placeholder="ایمیل کاربر را وارد کنید" data-original-title="" title="" name="mobile"
                            value="{{auth()->user()->mobile}}" required>
                    </div>

                    <br>

                    <div class="form-group draggable ui-draggable ui-draggable-handle">
                        <label for="input-file-1">عکس پروفایل</label><br>
                        <input id="input-file-1" type="file" name="image">
                        <img src="{{auth()->user()->image->thumb ?? ''}}" alt="" width="80">

                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">رمز ورود</label>
                        <input class="form-control" id="exampleInputPassword1" type="password"
                            placeholder=" رمز ورود خود را وارد کنید..." data-original-title="" title="" name="password">
                        <label class="col-form-label" style="color: rgb(136, 116, 116)">رمز عبور باید حداقل
                            8 کاراکتر و ترکیبی از حروف بزرگ ، حروف کوچک ، اعداد و کاراکتر های غیر الفبا
                            مانند ()*/$&#%@! باشد
                        </label>
                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">بیو</label>
                        <textarea class="form-control" value="{{auth()->user()->bio}}"
                            placeholder="بیو خود را وارد کنید..." name="bio"></textarea>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" data-original-title="" title="">ویرایش پروفایل</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



@endsection