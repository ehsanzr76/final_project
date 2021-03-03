@extends('UserPanel::layouts.blank')
@section('content')
<div class="col-sm-12">
    @include('UserPanel::layouts.message')
    <div class="card">
        <div class="card-header">
            <h5>لیست کسب و کار ها</h5>
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
                        <th scope="col">عملیات</th>

                    </tr>
                  
                </thead>
                <tbody>
                    {{-- <button class="btn btn-outline-primary btn-sm" type="button" data-original-title="btn btn-outline-primary btn-sm" title="">دکمه اصلی</button> --}}
                    @foreach ($businesses as $business)

                    <tr>
                        <th scope="row">{{$business->id}}</th>
                        <td width="80"><img src="{{$business->image->thumb}}" alt="" style="width:80px;height:80px"></td>
                        <td>{{$business->title}}</td>
                        <td>{{$business->category->title}}</td>
                        <td>{{$business->BusinessNumber}}</td>
                        <td>{{$business->mobile}}</td>
                        <td>{!! mb_substr($business->address,0,20) !!}</td>
                        <td>{!! jdate($business->created_at)->format('%Y-%m-%d') !!}</td>

                        <td>
                            <a href="" title="مشاهده"><i data-feather="eye"></i></a>
                            <a href="{{route('business.edit' , $business->id)}}" style="color: rgb(97, 211, 97)" title="ویرایش"><i
                                    data-feather="edit"></i></a>
                            <a href="{{route('business.delete' , $business->id)}}"
                                onclick="return confirm('آیا کسب و کار مورد نظر حذف شود؟')" style="color: red" title="حذف"><i
                                    data-feather="trash-2"></i></a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection