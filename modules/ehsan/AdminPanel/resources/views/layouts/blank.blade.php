@include('panel::layouts.header')

<body main-theme-layout="rtl">
  <!-- Loader starts-->
  {{-- <div class="loader-wrapper"> ////// لودر
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> --}}

  <div class="page-wrapper">
    @include('panel::layouts.navbar')
    <div class="page-body-wrapper">
      @include('panel::layouts.sidebar')
      <div class="page-body">
        @include('panel::layouts.navbar2')

        <div class="container-fluid">
          <div class="row">



            @yield('content')







          </div>
        </div>
      </div>
      @include('panel::layouts.footer')
    </div>