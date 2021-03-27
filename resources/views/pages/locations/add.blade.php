@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Location</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/locations">Location</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/locations" class="btn  btn-neutral">Back</a>
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
          <h3 class="mb-0">Add New Location Details</h3>
        </div>
        <hr class="my-1" />
        <div class="card-body ">
          <form method="POST" action="/location/add" >
          @csrf
            @if (!empty($success))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
              <strong>{{ $success }}</strong>
            </div>
            @endif
            @if (!empty($error))
            <div class="alert alert-warning alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
              <strong>{{ $error }}</strong>
            </div>
            @endif
           
            <h6 class="heading text-muted mb-4">Add Location details</h6>
            <div class="pl-lg-4 ">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label" for="address">Address</label>
                    <input type="text"  class="form-control" name="address" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label class="form-control-label" for="pincode">Pincode</label>
                    <input type="text"  class="form-control" name="pincode" >
                  </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="city">City</label>
                      <input type="text"  class="form-control" name="city"  >
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="country">Country</label>
                      <select name="country_id" class="form-control" >
                      @php
                      $i = 0
                      @endphp
                        @foreach($country as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                      </select>  
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label class="form-control-label" for="add_country">Add Country</label>
                    <input type="text"  class="form-control" name="add_country" >
                    <small class="text-danger">*If New Country , Add Here. Else Ignore</small>
                  </div>
                  <button name="action"  type="submit" value="add_country" class="btn btn-warning" >Add Country</button>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label class="form-control-label" for="latitude">Latitude</label>
                    <input type="text"  class="form-control" name="latitude" >
                  </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="longitude">Longitude</label>
                      <input type="text"  class="form-control" name="longitude"  >
                    </div>
                </div>
               </div>
                <div class="text-center">
                    <button  type="submit" name="action" value="add_location"  class="btn  btn-success align-center" >Add</button>    
                </div>            
            </div> 
          </form> 
        </div>         
      </div>
    </div>
  </div>
</div>      


@stop()

