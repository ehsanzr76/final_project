
@if ($errors->any())
<hr>
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach<br>
        لطفا فیلد های ذکر شده را پر کنید.
    </ul>
  
</div>
@endif	


@if (session('success'))
<div class="alert alert-success" style="text-align: center;font-size: 25px">
    {{session('success')}}
</div>
@endif

@if (session('warning'))
<div class="alert alert-danger">
    یک خطا رخ داد.کد خطا: {{session('warning')}}
</div>
@endif



