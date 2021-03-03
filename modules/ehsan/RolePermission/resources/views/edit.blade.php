@extends('panel::layouts.blank')



@section('content')



<div class="col-lg-4">
    @include('panel::layouts.message')
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>ویرایش نقش کاربری</h5>
                    <div class="card-body">
                        <form class="theme-form" method="POST" action="{{route('RolePermissions.update' , $roles->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="col-form-label pt-0"><b>عنوان نقش</b></label>
                                <input type="text" value="{{$roles->name}}" name="name"
                                    class="form-control" required>
                            </div>


                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror



                            <label class="d-block" for="chk-ani"> <b>انتخاب مجوز</b> <br><br>
                                @foreach($permissions as $permission)
                                <input class="checkbox_animated  @error('permissions') is-invalid @enderror"
                                    id="chk-ani" type="checkbox" data-original-title="" title=""
                                    name="permissions[{{$permission->name}}]" value="{{$permission->name}}"
                                    @if($roles->hasPermissionTo($permission->name))
                                checked
                                @endif>
                                @lang($permission->name)
                            </label>
                            @endforeach

                            @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                            <div class="card-footer">
                                <button class="btn btn-primary" data-original-title="" title="">بروز رسانی نقش</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

@endsection