@extends('panel::layouts.blank')
@section('content')


<div class="col-sm-12">
    @include('user::front.layouts.message')
    <div class="card">
        <div class="card-header">
            <h5>لیست کاربران</h5>
        </div>
        <div class="table-responsive">

            <table class="table">
                <thead>

                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">نام</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">شماره موبایل</th>
                        <th scope="col">نقش کاربری</th>
                        <th scope="col">آی پی</th>
                        <th scope="col">وضعیت حساب</th>
                        <th scope="col">تاریخ عضویت</th>
                        <th scope="col">عملیات</th>
                    </tr>

                </thead>
                <tbody>
                    {{-- <button class="btn btn-outline-primary btn-sm" type="button" data-original-title="btn btn-outline-primary btn-sm" title="">دکمه اصلی</button> --}}
                    @foreach ($users as $user)



                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>
                            <ul>
                                @foreach ($user->roles as $role)
                                <span class="badge badge-dark"
                                    style="background-color: rgb(91, 106, 190);font-size:13px">{{$role->name}} <a
                                        href="{{route('users.removeRole' , ["user"=>$user->id , "role" => $role->id])}}"
                                        onclick="return confirm('آیا نقش کاربر حذف شود؟')" title="حذف نقش"><i
                                            class="fa fa-times" style="color:rgb(202, 55, 55)"></i></a>

                                </span>

                                @endforeach
                                <i class="fa fa-plus"" style=" color: rgb(211, 199, 29);font-size:18px" type="button"
                                    data-toggle="modal" data-target="#exampleModalfat" title="افزودن نقش کاربری"
                                    onclick="setFormAction({{$user->id}})"></i>

                                <li>
                                    <div class="card-body btn-showcase">

                                        <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true"
                                            style="background-color: rgba(0, 0, 0, 0.5)">

                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">انتخاب نقش</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="بستن"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="theme-form" method="POST"
                                                            action="{{route('users.addRole' , 0)}}"
                                                            id="select-role-form">
                                                            @csrf
                                                            <select name="role" class="form-control">
                                                                @foreach ($roles as $role)
                                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                                @endforeach

                                                            </select>
                                                            <div class="modal-footer" style="text-align: right">
                                                                <button class="btn btn-primary" data-original-title=""
                                                                    title="">افزودن</button>
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">بستن</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- 
                                <li><a href="#ex1" rel="modal:open"><i class="fa fa-plus"
                                            style="color: rgb(153, 0, 255)" title="افزودن نقش کاربری"></i></a></li> --}}

                            </ul>
                        </td>
                        <td>{{$user->ip}}</td>
                        <td>{!!$user->hasVerifiedEmail() ? "<span class='badge badge-dark' style='color:rgb(37, 223, 93)'>تایید شده</span>" : "<span class='badge badge-dark' style='color:rgb(255, 136, 0)'>تایید نشده</span>"!!} </td>
                        <td>{!! jdate($user->created_at)->format('%Y/%m/%d') !!}</td>

                        <td>
                            </span>
                            <a href="{{route('users.VerifyUser' , $user->id)}}" title="تایید کاربر"><span class="iconify" data-icon="feather:user-check" data-inline="false" style="font-size: 25px;color:rgb(95, 87, 143)"></a>
                            <a href="{{route('users.edit' , $user->id)}}" style="color:  rgb(97, 211, 97)"
                                title="ویرایش"><i data-feather="edit"></i></a>
                            <a href="{{route('users.delete' , $user->id)}}"
                                onclick="return confirm('آیا کاربر مورد نظر حذف شود؟')" style="color: red"
                                title="حذف"><i data-feather="trash-2"></i></a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">پیام جدید</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="بستن" data-original-title="" title=""><span aria-hidden="true">×</span></button>
              </div> --}}


            {{$users->links()}}
        </div>
    </div>
</div>




<script>
    function setFormAction(userId) {
$("#select-role-form").attr('action', '{{ route('users.addRole', 0) }}'.replace('/0/', '/' + userId + '/' ))
}
</script>




@endsection