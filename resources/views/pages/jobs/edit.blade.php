@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Job</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/job/list">Job</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/job/list" class="btn  btn-neutral">Back</a>
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
          <h3 class="mb-0">Edit Job Details</h3>
        </div>
        <hr class="my-1" />
        <div class="card-body ">
          <form method="POST" action="/job/edit/{{$job->id}}">
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
            <h6 class="heading text-muted mb-4">Add job Details</h6>
            <div class="pl-lg-4 ">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Title</label>
                    <input type="text"  class="form-control"  value="{{$job->title}}" name="title" >
                  </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-control-label" for="Availability">Availability</label>
                        <select name="availability" class="form-control" >
                        <option value="1" {{$job->availability == 1 ? 'selected' : ''}} >Yes</option>
                        <option value="0" {{$job->availability == 0 ? 'selected' : ''}} >No</option>
                        </select>  
                    </div>
              </div>
                <div class="text-center">
                    <button  type="submit"  class="btn  btn-success align-center" >Update</button>    
                </div>            
            </div> 
          </form> 
        </div>         
      </div>
    </div>
  </div>
</div>      


@stop()

