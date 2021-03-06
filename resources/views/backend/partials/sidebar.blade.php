<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="backend/index.html">Stisla Lite</a>
      </div>
      <div class="sidebar-user">
        <div class="sidebar-user-picture">
          <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.jpeg')}}">
        </div>
        <div class="sidebar-user-details">
          <div class="user-name">Ujang Maman</div>
          <div class="user-role">
            Administrator
          </div>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="active">
          <a href="backend/index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
        </li>

        <li class="menu-header">Components</li>
        <li>
          <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
          <ul class="menu-dropdown">
            <li><a href="{{ route('general') }}"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
            <li><a href="{{ route('component.main') }}"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
            <li><a href="{{ route('buttons') }}"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
            <li><a href="{{ route('toastr') }}"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
          <ul class="menu-dropdown">
            <li><a href="{{ route('ion') }}"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
            <li><a href="{{ route('fontawesome') }}"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
            <li><a href="{{ route('flag') }}"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('table') }}"><i class="ion ion-clipboard"></i><span>Tables</span></a>
        </li>
        <li>
          <a href="{{ route('chartjs') }}"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
        </li>
        <li>
          <a href="{{ route('simple') }}"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
        </li>
        <li>
          <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
          <ul class="menu-dropdown">
            <li><a href="backend/login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
            <li><a href="backend/register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
            <li><a href="backend/forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
            <li><a href="backend/reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
            <li><a href="backend/404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
          </ul>
        </li>

        <li class="menu-header">More</li>
        <li>
          <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
          <ul class="menu-dropdown">
            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
            <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
              <ul class="menu-dropdown">
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                  <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
        </li>
        <li>
          <a href="backend/credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
        </li>          </ul>
      <div class="p-3 mt-4 mb-4">
        <a href="backend/http://stisla.multinity.com/" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
          <i class="ion ion-help-buoy"></i> <div>Go PRO!</div>
        </a>
      </div>
    </aside>
  </div>
