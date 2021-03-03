@extends('panel::layouts.blank')
@section('content')


<div class="col-sm-8">
    <div class="card">
        <div class="card-header">
            @include('panel::layouts.message')
            <h5>ویرایش کاربران</h5>
            <div class="card-body">
                <form class="theme-form" method="POST" action="{{route('users.update' , $user->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-form-label pt-0" for="exampleInputEmail1">نام</label>
                        <input class="form-control" id="exampleInputEmail1" type="text"
                            placeholder="نام کاربر را وارد کنید" data-original-title="" title="" name="name"
                            value="{{$user->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ایمیل</label>
                        <input class="form-control" id="exampleInputPassword1" type="email"
                            placeholder="ایمیل کاربر را وارد کنید" data-original-title="" title="" name="email"
                            value="{{$user->email}}" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">موبایل</label>
                        <input class="form-control" id="exampleInputPassword1" type="mobile"
                            placeholder="ایمیل کاربر را وارد کنید" data-original-title="" title="" name="mobile"
                            value="{{$user->mobile}}" required>
                    </div>

                    <label for="exampleInputPassword1">وضعیت کاربر</label>
                    <select name="status" class="form-control">
                        @foreach (\ehsan\User\models\User::$statuses as $status)
                        <option value="{{$status}}" @if ($status==$user->status) selected @endif>
                            @lang($status)
                        </option>
                        @endforeach

                    </select>

                    <br>

                    <div class="form-group draggable ui-draggable ui-draggable-handle">
                        <label for="input-file-1">پروفایل کاربر</label><br>
                        <input id="input-file-1" type="file" name="image">

                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">رمز ورود کاربر</label>
                        <input class="form-control" id="exampleInputPassword1" type="password"
                            placeholder=" رمز ورود کاربر را وارد کنید..." data-original-title="" title=""
                            name="password">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">بیو</label>
                        <textarea class="form-control" value="{{$user->bio}}" placeholder="بیو کاربر را وارد کنید..."
                            name="bio"></textarea>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" data-original-title="" title="">ویرایش کاربر</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



@endsection