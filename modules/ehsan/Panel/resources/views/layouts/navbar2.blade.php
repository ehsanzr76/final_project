<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col">
          <div class="page-header-left">
            <h3>پیش خوان</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('Dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">داشبورد</li>
              <li class="breadcrumb-item active">{{$breadcrumb}}</li>

            </ol>
          </div>
        </div>
        <!-- Bookmark Start-->
        <div class="col">
          <div class="bookmark pull-right">
            <ul>
              <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                  data-original-title="تقویم"><i data-feather="calendar"></i></a></li>
              <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                  data-original-title="ایمیل"><i data-feather="mail"></i></a></li>
              <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                  data-original-title="چت"><i data-feather="message-square"></i></a></li>
              <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group form-control-search">
                    <input type="text" placeholder="جستجو..">
                  </div>
                </form>
              </li>
            </ul>
          </div>
        </div>
        <!-- Bookmark Ends-->
      </div>
    </div>
  </div>