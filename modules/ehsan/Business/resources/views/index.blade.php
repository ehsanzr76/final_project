@extends('panel::layouts.blank')


@section('content')
<div class="col-sm-12">
    @include('user::front.layouts.message')
    <div class="card">
        <div class="card-header">
            <h5>لیست کسب وکار ها</h5>
        </div>
        <div class="table-responsive">

            <table class="table">
                <thead>
                   
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">بنر</th>
                        <th scope="col">عنوان کسب و کار</th>
                        <th scope="col">دسته بندی</th>
                        <th scope="col">شماره پروانه کسب</th>
                        <th scope="col">شماره موبایل</th>
                        <th scope="col">آدرس</th>
                        <th scope="col">تاریخ ثبت</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">عملیات</th>

                    </tr>
                  
                </thead>
                <tbody>
                    {{-- <button class="btn btn-outline-primary btn-sm" type="button" data-original-title="btn btn-outline-primary btn-sm" title="">دکمه اصلی</button> --}}
                    @foreach ($business as $item)

                    @switch($item->status)
                    @case(1)
                    @php
                    $url = route('business.status',$item->id);
                    $status = '<a href="'.$url.'" class="btn btn-info active">منتشر شده</a>' @endphp
                    @break
                    @case(0)
                    @php
                    $url = route('business.status',$item->id);
                    $status = '<a href="'.$url.'" class="btn btn-warning active">منتشر نشده</a>' @endphp
                    @break
                    @default
                    @endswitch


                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td width="80"><img src="{{$item->thumb}}" alt="" width="80"></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->category->title}}</td>
                        <td>{{$item->BusinessNumber}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>{!! mb_substr($item->address,0,50) !!}</td>
                        <td>{!! jdate($item->created_at)->format('%Y-%m-%d') !!}</td>
                        <td>{!!$status!!}</td>

                        <td>
                            <a href=""><i data-feather="eye"></i></a>
                            <a href="{{route('categories.edit' , $item->id)}}" style="color: rgb(97, 211, 97)"><i
                                    data-feather="edit"></i></a>
                            <a href="{{route('categories.delete' , $item->id)}}"
                                onclick="return confirm('آیا دسته مورد نظر حذف شود؟')" style="color: red"><i
                                    data-feather="trash-2"></i></a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$business->links()}}
        </div>
    </div>
</div>

@endsection