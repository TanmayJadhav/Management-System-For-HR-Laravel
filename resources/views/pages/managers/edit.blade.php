@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Manager</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/manager/list">Manager</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/manager/list" class="btn  btn-neutral">Back</a>
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
          <h3 class="mb-0">Manager Profile</h3>
        </div>
        <hr class="my-1" />
        <div class="card-body ">
          <form method="POST" action="/manager/edit" >
          @csrf
            <input type="hidden" name="manager_id" value="{{$manager->id}}">
            <h6 class="heading text-muted mb-4">Edit Manager details</h6>
            <div class="pl-lg-4 ">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Name</label>
                    <input type="text"  class="form-control"  name="name" value="{{$manager->name}}" >
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email"  class="form-control" value="{{$manager->email}}" name="email" >
                  </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="salary">Salary(LPA)</label>
                      <input type="text"  class="form-control" value="{{$manager->salary}}" name="salary"  >
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label class="form-control-label" for="project">Project</label>
                      <select name="project_id" class="form-control" >
                        @foreach($project as $project)
                        <option value="{{$project->id}}" {{$project->id == $manager->project_id ? 'selected' : ''}} >{{$project->name}}</option>
                        @endforeach
                        <option value="0" >None</option>
                      </select>  
                    </div>
                </div>
               </div>
                <div class="text-center">
                    <button  type="submit" class="btn  btn-success align-center" >Update</button>    
                </div>            
            </div> 
          </form> 
        </div>         
      </div>
    </div>
  </div>
</div>      


@stop()

