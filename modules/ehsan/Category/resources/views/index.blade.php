@extends('panel::layouts.blank')
@section('content')
<div class="col-lg-12">
  @include('user::front.layouts.message')
</div>
<div class="col-sm-12">
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
          @foreach ($category as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->parent}}</td>
            <td>
              <a href="{{route('categories.delete' , $item->id)}}"
                onclick="return confirm('آیا دسته مورد نظر حذف شود؟')" style="color: red"><i
                  class="icofont icofont-ui-delete" title="حذف"></i></a>
              <a href="{{route('categories.edit' , $item->id)}}" style="color: rgb(75, 136, 75)"><i
                  class="icofont icofont-ui-edit" title="ویرایش"></i></a>
              <a href=""><i class="icofont icofont-eye" title="مشاهده"></i></a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$category->links()}}
    </div>
  </div>
</div>



@endsection