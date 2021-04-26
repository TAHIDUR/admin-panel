<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-lite.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
              <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
            </ul>
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit"><i class="ion ion-search"></i></button>
            </div>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                  <div class="float-right">
                    <a href="#">View All</a>
                  </div>
                </div>
                <div class="dropdown-list-content">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.jpeg')}}" class="rounded-circle dropdown-item-img">
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-2.jpeg')}}" class="rounded-circle dropdown-item-img">
                    <div class="dropdown-item-desc">
                      <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-3.jpeg')}}" class="rounded-circle dropdown-item-img">
                    <div class="dropdown-item-desc">
                      <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-4.jpeg')}}" class="rounded-circle dropdown-item-img">
                    <div class="dropdown-item-desc">
                      <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                      <div class="time">16 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-5.jpeg')}}" class="rounded-circle dropdown-item-img">
                    <div class="dropdown-item-desc">
                      <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
              <i class="ion ion-android-person d-lg-none"></i>
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="backend/profile.html" class="dropdown-item has-icon">
                  <i class="ion ion-android-person"></i> Profile
                </a>
                <a href="#" class="dropdown-item has-icon">
                  <i class="ion ion-log-out"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        @include('backend.partials.sidebar')

        <div class="main-content">
          @yield('content')
        </div>
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="backend/https://multinity.com/">Multinity</a>
          </div>
          <div class="footer-right"></div>
        </footer>
      </div>
    </div>

    <script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/modules/popper.js')}}"></script>
    <script src="{{ asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
    <script src="{{ asset('assets/js/sa-functions.js')}}"></script>

    <script src="{{ asset('assets/modules/chart.min.js')}}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-lite.js')}}"></script>

    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          label: 'Statistics',
          data: [460, 458, 330, 502, 430, 610, 488],
          borderWidth: 2,
          backgroundColor: 'rgb(87,75,144)',
          borderColor: 'rgb(87,75,144)',
          borderWidth: 2.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 4
        }]
      },
      options: {
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize: 150
            }
          }],
          xAxes: [{
            gridLines: {
              display: false
            }
          }]
        },
      }
    });
    </script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/demo.js')}}"></script>
  </body>
  </html>
