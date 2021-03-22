@extends('template')

@section('main')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Location</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Map</a></li>
              <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/job/add" class="btn  btn-neutral">Add New Location</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Department Locations Worldwide</h3>
        </div>
        <div id="mapid"></div>

        </div>
      </div>
    </div>
  </div>
</div>      

<script type="text/javascript">

	 	var mymap = L.map('mapid').setView([20.5937, 78.9629], 10);


	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?access_token={pk.eyJ1IjoidGFubWF5dGoiLCJhIjoiY2tta2dvYmViMTB5ZzJ3dG42MGdydWJpciJ9.kG1ZQbrA3dsPyMsu-yp4xg}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    // maxZoom: 18,
    // id: 'mapbox/streets-v11',
    // tileSize: 512,
    // zoomOffset: -1,
    // accessToken: 'your.mapbox.access.token'
    noWrap: true
    
    }).addTo(mymap);
	 
    @foreach ($location as $location)
    var marker = L.marker([{{$location->latitude}}, {{$location->longitude}}]).addTo(mymap);
    marker.bindPopup("{{$location->city}}").openPopup();
    @endforeach

    
    
     
</script>

@stop