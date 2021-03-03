@extends('panel::layouts.blank')
@section('content')
<div class="col-sm-12">
  @include('panel::layouts.message')
  <div class="card">
    <div class="card-header">
      <h5>لیست نظرات</h5>
    </div>
    <div class="table-responsive">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">شماره</th>
            <th scope="col">نام کاربر</th>
            <th scope="col">ایمیل کاربر</th>
            <th scope="col">کسب و کار</th>
            <th scope="col">متن نظر</th>
            <th scope="col">تاریخ ثبت نظر</th>
            <th scope="col">وضعیت</th>
            <th scope="col">عملیات</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($comments as $comment)

          @switch($comment->status)
          @case(1)
          @php
          $url = route('comment.status',$comment->id);
          $status = '<a href="'.$url.'" class="btn btn-info active">منتشر شده</a>' @endphp
          @break
          @case(0)
          @php
          $url = route('comment.status',$comment->id);
          $status = '<a href="'.$url.'" class="btn btn-warning active">منتشر نشده</a>' @endphp
          @break
          @default
          @endswitch

          <tr>
            <th scope="row">{{$comment->id}}</th>
            <td>{{$comment->name}}</td>
            <td>{{$comment->email}}</td>
            <td>{{$comment->business->title}}</td>
            <td>{!! mb_substr($comment->body,0,50,'UTF8').'...'!!}</td>
            <td>{!! jdate($comment->created_at)->format('%Y-%m-%d') !!}</td>
            <td>{!!$status!!}</td>
            <td>
              <a href="" title="مشاهده"><i data-feather="eye"></i></a>
              <a href="{{route('comment.edit' , $comment->id)}}" style="color: rgb(97, 211, 97)" title="ویرایش"><i
                  data-feather="edit"></i></a>
              <a href="{{route('comment.delete' , $comment->id)}}"
                onclick="return confirm('آیا دیدگاه مورد نظر حذف شود؟')" style="color: red" title="حذف"><i
                  data-feather="trash-2"></i></a>

            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$comments->links()}}
    </div>
  </div>
</div>



@endsection