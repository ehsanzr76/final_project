@extends('panel::layouts.blank')
@section('content')


<div class="col-sm-8">
    <div class="card">
        <div class="card-header">
            @include('panel::layouts.message')
            <h5>ویرایش اشتراک ویژه</h5>
            <div class="card-body">
                <form class="theme-form" method="POST" action="{{route('vip.update' , $vip->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-form-label pt-0" for="exampleInputEmail1">نام</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" data-original-title="" title=""
                            name="name" value="{{$vip->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">قیمت</label>
                        <input class="form-control" id="exampleInputPassword1" type="text" data-original-title=""
                            title="" name="price" value="{{$vip->price}}" required>
                    </div>

                    <div class="form-group">
                        <label for="title">نوع اشتراک</label>
                        <select class="form-control" name="type">
                            <option value="0">ماهانه</option>
                            <option value="1" <?php if($vip->type==1) echo 'selected';?>>سالانه
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <input class="form-control" id="exampleInputPassword1" type="text" data-original-title=""
                            title="" name="description" value="{{$vip->description}}" required>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" data-original-title="" title="">ویرایش اشتراک</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



@endsection