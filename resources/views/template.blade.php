
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>HR Admin Panel</title>
  <!-- Favicon -->
  <link rel="icon" href="/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!-- Map css -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <style>
    #mapid { height: 400px;  }
  </style> 

  <!-- Page plugins -->
  <!-- CSS only -->
  
  <link rel="stylesheet" href="/css/admin.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
        
        <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="/">
                    <h2>Welcome HR</h2>
                </a>
            </div>
        

            
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link " href="\">
                        <i class="fas fa-desktop"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/employee/list">
                            <i class="fas fa-users"></i>
                            <span class="nav-link-text">Employees</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/manager/list">
                            <i class="fas fa-user-tie"></i>
                            <span class="nav-link-text">Managers</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/department/list">
                            <i class="fas fa-building"></i>
                            <span class="nav-link-text">Departments</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/project/list">
                            <i class="fas fa-project-diagram"></i>
                            <span class="nav-link-text">Projects</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/job/list">
                            <i class="fas fa-briefcase"></i>
                            <span class="nav-link-text">Jobs</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/locations">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="nav-link-text">Locations</span>
                        </a>
                        </li>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
    </nav>

    <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="/img/profile.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Tanmay Jadhav</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    


    @yield('main')

      <!-- Footer -->
    <footer class="footer pt-0">
    <div class="row align-items-center">
        <div class="col">
        <div class="copyright text-center  text-lg  text-muted">
            &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
        </div>
        </div>
        
    </div>
    </footer>
   
  <!-- Argon Scripts -->
  <!-- Core -->
  
  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/js-cookie/js.cookie.js"></script>
  <script src="/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/js/argon.js?v=1.2.0"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        })
    </script>

</body>

</html>
