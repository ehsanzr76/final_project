@extends('panel::layouts.blank')
@section('content')
<div class="col-sm-8">
  @include('panel::layouts.message')
  <div class="card">
    <div class="card-header">
      <h5>لیست اشتراک های ویژه</h5>
    </div>
    <div class="table-responsive">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">نام اشتراک</th>
            <th scope="col">قیمت</th>
            <th scope="col">نوع اشتراک</th>
            <th scope="col">توضیحات</th>
            <th scope="col">عملیات</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($vip as $item)

          @switch($item->type)
          @case(1)
          @php
          $type = '<a href="" class="btn btn-info badge">سالانه</a>' @endphp
          @break
          @case(0)
          @php
          $type = '<a href="" class="btn btn-warning badge">ماهانه</a>' @endphp
          @break
          @default
          @endswitch
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{!!$type!!}</td>
            <td>{!! mb_substr($item->description,0,50,'UTF8').'...'!!}</td>
            <td>
              <a href="" title="مشاهده"><i data-feather="eye"></i></a>
              <a href="{{route('vip.edit' , $item->id)}}" style="color: rgb(97, 211, 97)" title="ویرایش"><i
                  data-feather="edit"></i></a>
              <a href="{{route('vip.delete' , $item->id)}}" onclick="return confirm('آیا اشتراک مورد نظر حذف شود؟')"
                style="color: red" title="حذف"><i data-feather="trash-2"></i></a>

            </td>


          </tr>
          @endforeach
        </tbody>
      </table>
      {{$vip->links()}}
    </div>
  </div>
</div>


<div class="col-sm-4">
  <div class="card">
    <div class="card-header">
      <h5>اشتراک ویژه</h5>
      <div class="card-body">

        <form class="theme-form" method="POST" action="{{route('vip.store')}}">
          @csrf
          <div class="form-group">
            <label class="col-form-label pt-0" for="exampleInputEmail1">نام</label>
            <input class="form-control" id="exampleInputEmail1" type="text" placeholder="نام اشتراک را وارد کنید"
              data-original-title="" title="" name="name" required autocomplete="name" autofocus>
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">قیمت</label>
            <input class="form-control" id="exampleInputPassword1" type="text" placeholder="قیمت اشتراک وارد کنید"
              data-original-title="" title="" name="price" required autocomplete="price" autofocus>
            @error('price')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <label for="exampleInputPassword1">نوع اشتراک</label>
          <select name="type" class="form-control">
            <option value="0">ماهانه</option>
            <option value="1">سالانه
            </option>

          </select>

          <br>
          <div class="form-group">
            <label for="title">توضیحات</label><br>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
              required autocomplete="description" autofocus></textarea>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>


          <div class="card-footer">
            <button class="btn btn-primary" data-original-title="" title="">ایجاد اشتراک</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>



@endsection