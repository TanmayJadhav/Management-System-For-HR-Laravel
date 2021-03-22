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
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <style>
    #mapid { height: 180px; width:900px; margin-left:auto}
  </style> 

  <!-- Page plugins -->
  <!-- CSS only -->
  
  <link rel="stylesheet" href="/css/admin.css?v=1.2.0" type="text/css">



	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

	<style type="text/css">
		#mapid { height: 500px;}
	</style>
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




<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Jobs</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Table</a></li>
              <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/job/add" class="btn  btn-neutral">Add New Job Position</a>
        </div>
      </div>
    </div>
  </div>
</div>



    









	 

	<script type="text/javascript">

	 	var mymap = L.map('mapid').setView([51.505, -0.09], 10);


	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?access_token={pk.eyJ1IjoidGFubWF5dGoiLCJhIjoiY2tta2dvYmViMTB5ZzJ3dG42MGdydWJpciJ9.kG1ZQbrA3dsPyMsu-yp4xg}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
    }).addTo(mymap);
	 
     
    </script>





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