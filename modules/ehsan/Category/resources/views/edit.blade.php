@extends('panel::layouts.blank')
@section('content')


<div class="col-sm-8">
    <div class="card">
        <div class="card-header">
            @include('user::front.layouts.message')
            <h5>ویرایش دسته بندی</h5>
            <div class="card-body">
                <form class="theme-form" method="POST" action="{{route('categories.update' , $category->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-form-label pt-0" for="exampleInputEmail1">عنوان</label>
                        <input class="form-control" id="exampleInputEmail1" type="text"
                    placeholder="عنوان دسته بندی را وارد کنید" data-original-title="" title="" name="title" value="{{$category->title}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">نام مستعار یا انگلیسی</label>
                        <input class="form-control" id="exampleInputPassword1" type="text"
                            placeholder="نام مستعار را وارد کنید" data-original-title="" title="" name="slug"  value="{{$category->slug}}" required>
                    </div>

                    <label for="exampleInputPassword1">انتخاب دسته پدر</label>
                    <select name="parent_id" id="parent_id" class="form-control">
                      <option value="">ندارد</option>
                      @foreach($categories as $value)
                      <option value="{{ $value->id }}" @if ($value->id == $category->parent_id) selected
                          
                      @endif>{{ $value->title }}</option>
                      @endforeach

                    </select>

                    <div class="card-footer">
                        <button class="btn btn-primary" data-original-title="" title="">ویرایش دسته</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



@endsection