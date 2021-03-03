@extends('panel::layouts.blank')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            @include('panel::layouts.message')
            <h5>ویرایش نظرات</h5>
            <div class="card-body">
                <form class="theme-form" method="POST" action="{{route('comment.update' , $comment->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-form-label pt-0" for="exampleInputEmail1">نام کاربر</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" data-original-title="" title=""
                            name="name" value="{{$comment->name}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">ایمیل کاربر</label>
                        <input class="form-control" id="exampleInputPassword1" type="email" data-original-title=""
                            title="" name="email" value="{{$comment->email}}">
                    </div>


                    <div class="form-group">
                        <label for="title">وضعیت</label>
                        <select class="form-control" name="status">
                            <option value="0">منتشر نشده</option>
                            <option value="1" <?php if($comment->status==1) echo 'selected';?>>منتشر شده
                            </option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="title">متن پیام</label><br>
                        <textarea id="editor" type="text"
                            class="form-control @error('body') is-invalid @enderror"
                            name="body">{{$comment->body}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="card-footer">
                        <button class="btn btn-primary" data-original-title="" title="">ویرایش دیدگاه</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection