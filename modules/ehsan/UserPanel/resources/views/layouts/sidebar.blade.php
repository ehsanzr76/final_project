<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><i class="icofont icofont-chart-histogram"
        style="font-size: 25px;color:rgb(190, 166, 166)"> Nitro Business </i></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div>
        <img class="img-60 rounded-circle" src="{{auth()->user()->image->thumb ?? ''}}" width="60" height="60" alt="#">
        <div class="profile-edit"><a href="{{route('UserPanel.EditProfile')}}" target="_blank"><i
              data-feather="edit"></i></a></div>
      </div>

      <h6 class="mt-3 f-14"><b>کاربر:</b>{{auth()->user()->name}}</h6>

    </div>
    <ul class="sidebar-menu">
      <li><a class="sidebar-header" href="{{route('UserPanel')}}"><i data-feather="home"></i><span>داشبورد</span><span
            class="badge badge-pill badge-primary">6</span></a></li>


      <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>کسب و کار
            ها</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('UserPanel.ShowBusiness')}}"><i class="fa fa-circle"></i>مدیریت کسب و کار های شما</a></li>
          <li><a href="{{route('business.create')}}"><i class="fa fa-circle"></i>ثبت کسب و کار جدید</a></li>

        </ul>
      </li>


      <li class="nav-item"><a class="sidebar-header" href="#"><i data-feather="message-circle"></i><span>پیام
            ها</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('users')}}"><i class="fa fa-circle"></i>صندوق پیام های شما</a></li>
        </ul>
      </li>
  </div>
</div>