@if (isset($errors) && count($errors))
    <br>
    <div class="alert alert-danger col-lg-6" role="alert" style="color: rgb(0, 0, 0)">
        <h4 class="alert-heading">خطا</h4>
        @foreach($errors->all() as $error)
        <hr>
        <p class="mb-0">
            {{ $error }}
        </p>
        @endforeach
    </div>
@endif

@if (session('success'))
<div class="alert alert-success dark alert-dismissible fade show col-lg-6" role="alert" style="text-align: center">

    {{session('success')}}
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">×</span></button>
</div>
@endif


@if (session('warning'))
<div class="alert alert-warning dark alert-dismissible fade show" role="alert">
    {{session('warning')}}

    <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span
            aria-hidden="true">×</span></button>
</div>
@endif