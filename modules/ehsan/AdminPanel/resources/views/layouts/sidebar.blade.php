<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><i class="icofont icofont-chart-histogram"
        style="font-size: 25px;color:rgb(190, 166, 166)"> Nitro Business </i></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div>
        <img class="img-60 rounded-circle" src="{{auth()->user()->image->thumb ?? ''}}" width="60" height="60" alt="#">
        <div class="profile-edit"><a href="{{route('users.EditProfile')}}" target="_blank"><i
              data-feather="edit"></i></a></div>
      </div>

      <h6 class="mt-3 f-14"><b>کاربر:</b>{{auth()->user()->name}}</h6>

    </div>
    <ul class="sidebar-menu">
      <li><a class="sidebar-header" href="{{route('Dashboard')}}"><i data-feather="home"></i><span>داشبورد</span><span
            class="badge badge-pill badge-primary">6</span></a></li>


      <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="users"></i><span>کاربران</span><i
            class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('users')}}"><i class="fa fa-circle"></i>مشاهده کاربران</a></li>
        </ul>
      </li>


      <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="layers"></i><span>دسته بندی ها</span><i
            class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('categories')}}"><i class="fa fa-circle"></i>مشاهده و ایجاد دسته</a></li>
        </ul>
      </li>


      <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="shield"></i><span>نقش های کاربری</span><i
            class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('RolePermissions')}}"><i class="fa fa-circle"></i>مشاهده و ایجاد نقش</a></li>
          {{-- <li><a href="{{route('categories')}}"><i class="fa fa-circle"></i>ایجاد کاربر</a>
      </li> --}}

    </ul>


    <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>کسب و کارها</span><i
          class="fa fa-angle-right pull-right"></i></a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('Business')}}"><i class="fa fa-circle"></i>مشاهده لیست کسب وکار ها</a></li>

      </ul>


    </li>

    <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="message-circle"></i></i><span>دیدگاه
          ها</span><i class="fa fa-angle-right pull-right"></i></a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('comment')}}"><i class="fa fa-circle"></i>مشاهده لیست نظرات</a></li>

      </ul>

    </li>


    <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="phone-call"></i></i><span>ارتباط با
          ما</span><i class="fa fa-angle-right pull-right"></i></a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('contact')}}"><i class="fa fa-circle"></i>مشاهده لیست ارتباط با ما</a></li>

      </ul>

    </li>



    <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="layers"></i><span>اشتراک ویژه</span><i
          class="fa fa-angle-right pull-right"></i></a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('vip')}}"><i class="fa fa-circle"></i>مشاهده و ایجاد اشتراک</a></li>
      </ul>
    </li>


  </div>
</div>