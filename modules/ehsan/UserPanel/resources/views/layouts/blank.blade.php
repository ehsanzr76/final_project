@include('UserPanel::layouts.header')

<body main-theme-layout="rtl">
  <!-- Loader starts-->
  {{-- <div class="loader-wrapper"> ////// لودر
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> --}}

  <div class="page-wrapper">
    @include('UserPanel::layouts.navbar')
    <div class="page-body-wrapper">
      @include('UserPanel::layouts.sidebar')
      <div class="page-body">
        @include('UserPanel::layouts.navbar2')

        <div class="container-fluid">
          <div class="row">



            @yield('content')







          </div>
        </div>
      </div>
      @include('UserPanel::layouts.footer')
    </div>