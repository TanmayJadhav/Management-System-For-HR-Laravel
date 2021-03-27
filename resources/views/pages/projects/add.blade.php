@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Project</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/project/list">Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/project/list" class="btn  btn-neutral">Back</a>
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
          <h3 class="mb-0">Projects Details</h3>
        </div>
        <hr class="my-1"/>
        <div class="card-body ">
          <form method="POST" action="/project/add/">
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
            <h6 class="heading text-muted mb-4">Add Project details</h6>
            <div class="pl-lg-4 ">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="name">First Name</label>
                    <input type="text"  class="form-control" name="name">
                  </div>
                </div>
                <div class="col-6">
                    <label class="form-control-label" for="status">Status</label>
                    <select name="status" class="form-control" >
                    <option value="Completed" >Completed</option>
                    <option value="In Progress">In Progress</option>
                    </select>
                    <small  class="form-text text-danger">*If Project is completed , please add the End Date.</small>
                </div>    
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="email">Budget</label>
                    <input type="number"  class="form-control" name="budget">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="completion percent">Completion Percent</label>
                    <input type="number"  class="form-control" name="completion_percent" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="start date">Start Date</label>
                      <input type="date"  class="form-control"name="start_date"  >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="end date">End Date</label>
                     
                      <input type="date"  class="form-control" name="end_date"  >
                      
                      
                    </div>
                  </div>  
                    
              </div>
                <div class="text-center">
                    <button class="btn  btn-success align-center" >Add</button>
                </div>    
              </div>
                            
            </div> 
          </form> 
        </div>         
      </div>
    </div>
  </div>
</div>      


@stop()

