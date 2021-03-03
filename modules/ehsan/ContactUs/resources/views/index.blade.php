@extends('panel::layouts.blank')
@section('content')
<div class="col-sm-12">
    @include('panel::layouts.message')
    <div class="card">
        <div class="card-header">
            <h5>لیست ارتباط با ما</h5>
        </div>
        <div class="table-responsive">

            <table class="table">
                <thead>
                   
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">نام کاربر</th>
                        <th scope="col">ایمیل کاربر</th>
                        <th scope="col">متن پیام</th>
                        <th scope="col">تاریخ ثبت پیام</th>
                        <th scope="col">عملیات</th>

                    </tr>
                  
                </thead>
                <tbody>
                    {{-- <button class="btn btn-outline-primary btn-sm" type="button" data-original-title="btn btn-outline-primary btn-sm" title="">دکمه اصلی</button> --}}
                    @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{!! mb_substr($contact->body,0,20) !!}</td>
                        <td>{!! jdate($contact->created_at)->format('%Y-%m-%d') !!}</td>

                        <td>
                            <a href="" title="مشاهده"><i data-feather="eye"></i></a>
                            <a href="{{route('business.edit' , $contact->id)}}" style="color: rgb(97, 211, 97)" title="ویرایش"><i
                                    data-feather="edit"></i></a>
                            <a href="{{route('business.delete' , $contact->id)}}"
                                onclick="return confirm('آیا کسب و کار مورد نظر حذف شود؟')" style="color: red" title="حذف"><i
                                    data-feather="trash-2"></i></a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$contacts->links()}}
        </div>
    </div>
</div>

@endsection