<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/endless-logo.png" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="../assets/images/user/1.jpg" alt="#">
        <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">پارادایم</h6>
      <p>مدیر کل</p>
    </div>
    <ul class="sidebar-menu">
      <li><a class="sidebar-header" href="{{route('Dashboard')}}"><i data-feather="home"></i><span>داشبورد</span><span
            class="badge badge-pill badge-primary">6</span></a></li>


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
        <li><a href="{{route('Business')}}"><i class="fa fa-circle"></i>مشاهده</a></li>
        <li><a href="{{route('categories')}}"><i class="fa fa-circle"></i>ایجاد کسب و کار</a></li>

      </ul>


    </li>

  </div>
</div>