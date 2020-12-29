@extends('panel::layouts.blank')
@section('content')
<div class="col-lg-4">
  @include('user::front.layouts.message')
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-header">
          <h5>جدول دسته بندی ها</h5>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">شماره</th>
                <th scope="col">عنوان دسته</th>
                <th scope="col">نام مستعار دسته</th>
                <th scope="col">نام پدر</th>
                <th scope="col">عملیات</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->slug}}</td>
                <td>{{$item->parent}}</td>
                <td>
                  <a href="{{route('categories.delete' , $item->id)}}"
                    onclick="return confirm('آیا دسته مورد نظر حذف شود؟')" style="color: red"><i
                      class="icofont icofont-ui-delete" style="font-size: 17px" title="حذف"></i></a>
                  <a href="{{route('categories.edit' , $item->id)}}" style="color: rgb(97, 211, 97)"><i
                      class="icofont icofont-ui-edit" style="font-size: 17px" title="ویرایش"></i></a>
                  <a href=""><i class="icofont icofont-eye" style="font-size: 17px" title="مشاهده"></i></a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
          {{$categories->links()}}
        </div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">
          <h5>دسته بندی ها</h5>
          <div class="card-body">
            <form class="theme-form" method="POST" action="{{route('categories.store')}}">
              @csrf
              <div class="form-group">
                <label class="col-form-label pt-0" for="exampleInputEmail1">عنوان</label>
                <input class="form-control" id="exampleInputEmail1" type="text"
                  placeholder="عنوان دسته بندی را وارد کنید" data-original-title="" title="" name="title" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">نام مستعار یا انگلیسی</label>
                <input class="form-control" id="exampleInputPassword1" type="text" placeholder="نام مستعار را وارد کنید"
                  data-original-title="" title="" name="slug" required>
              </div>

              <label for="exampleInputPassword1">انتخاب دسته پدر</label>
              <select name="parent_id" id="parent_id" class="form-control">
                <option value="">ندارد</option>
                @foreach($categories as $value)
                <option value="{{ $value->id }}">{{ $value->title }}</option>
                @endforeach

              </select>

              <div class="card-footer">
                <button class="btn btn-primary" data-original-title="" title="">ایجاد دسته</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>


  </div>
</div>



@endsection