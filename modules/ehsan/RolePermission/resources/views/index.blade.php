@extends('panel::layouts.blank')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            @include('user::front.layouts.message')
            <div class="card">
                <div class="card-header">
                    <h5>نقش های کاربری</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">شماره</th>
                                <th scope="col">نقش کاربری</th>
                                <th scope="col">مجوز ها</th>
                                <th scope="col">عملیات</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>
                                    <ul>
                                        @foreach ($role->permissions as $permission)
                                        <span class="badge badge-dark" style="background-color: rgb(64, 166, 197);font-size:13px">@lang($permission->name)</span>
                                     
                                        @endforeach
                                    </ul>
                                </td>

                                <td>
                                    <a href="" title="مشاهده"><i data-feather="eye"></i></a>
                                    <a href="{{route('RolePermissions.edit' , $role->id)}}"
                                        style="color: rgb(92, 185, 92)" title="ویرایش"><i data-feather="edit"></i></a>
                                    <a href="{{route('RolePermissions.delete' , $role->id)}}"
                                        onclick="return confirm('آیا نقش مورد نظر حذف شود؟')" style="color: red" title="حذف"><i
                                            data-feather="trash-2"></i></a>


                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$roles->links()}} --}}
                </div>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5>ایجاد نقش کاربری</h5>
                    <div class="card-body">
                        <form class="theme-form" method="POST" action="{{route('RolePermissions.store')}}">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1"><b>عنوان نقش</b></label>
                                <input class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                    type="text" placeholder="عنوان نقش را وارد کنید" data-original-title="" title=""
                                    name="name" required value="{{old('name')}}">
                            </div>


                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}



                            <label class="d-block" for="chk-ani"> <b>انتخاب مجوز</b><br>
                                @foreach($permissions as $permission)<hr>
                                <input class="checkbox_animated  @error('permissions') is-invalid @enderror"
                                    id="chk-ani" type="checkbox" data-original-title="" title=""
                                    name="permissions[{{$permission->name}}]" value="{{$permission->name}}">
                                @lang($permission->name)
                            </label>
                            @endforeach

                            {{-- @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}


                            <div class="card-footer">
                                <button class="btn btn-primary" data-original-title="" title="">ایجاد نقش</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

@endsection