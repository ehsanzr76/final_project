@extends('panel::layouts.blank')


@section('content')
<div class="col-sm-8">
    <div class="card">
        <div class="card-header">
            @include('panel::layouts.message')
            <h5>ویرایش کسب وکار ها</h5>
            <div class="card-body">
                <form class="theme-form" method="POST" action="{{route('business.update' , $business->id)}}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-form-label pt-0" for="exampleInputEmail1">عنوان کسب و کار</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" data-original-title="" title=""
                            name="title" value="{{$business->title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">شماره موبایل</label>
                        <input class="form-control" id="exampleInputPassword1" type="text" data-original-title=""
                            title="" name="mobile" value="{{$business->mobile}}" required>
                    </div>

                    <label for="exampleInputPassword1">دسته بندی</label>
                    <select name="category_id" class="form-control">
                        @foreach ($category as $item)
                        <option value="{{$item->id}}" <?php 
                            if (
                               $business->category->title == $item->title) echo 'selected'
                            ?>>{{$item->title}}</option>
                        @endforeach
                    </select>


                    <div class="form-group">
                        <label for="title">وضعیت</label>
                        <select class="form-control" name="status">
                            <option value="0">منتشر نشده</option>
                            <option value="1" <?php if($business->status==1) echo 'selected';?>>منتشر شده
                            </option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">شماره پروانه کسب</label>
                        <input class="form-control" id="exampleInputPassword1" type="text" data-original-title=""
                            title="" name="BusinessNumber" value="{{$business->BusinessNumber}}" required>
                    </div>


                    <div class="form-group draggable ui-draggable ui-draggable-handle">
                        <label for="input-file-1">آپلود عکس</label>
                        <input id="input-file-1" type="file" name="image">
                        <br>
                        <img src="{{$business->image->thumb}}" alt="" width="80">


                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <input class="form-control" id="exampleInputPassword1" type="text" data-original-title=""
                            title="" name="body" value="{{$business->body}}" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس</label>
                        <input class="form-control" id="exampleInputPassword1" type="text" data-original-title=""
                            title="" name="address" value="{{$business->address}}" required>
                    </div>









                    <div class="card-footer">
                        <button class="btn btn-primary" data-original-title="" title="">ویرایش کسب و کار</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection