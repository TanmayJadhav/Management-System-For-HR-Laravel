@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Employee</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/employee/list">Employee</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/employee/list" class="btn  btn-neutral">Back</a>
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
          <h3 class="mb-0">Employees Profile</h3>
        </div>
        <hr class="my-1"/>
        <div class="card-body ">
          <form method="POST" action="/employee/edit">
          @csrf
            <input type="hidden" name="employee_id" value="{{$employee->id}}">
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
            <h6 class="heading text-muted mb-4">Edit Employee details</h6>
            <div class="pl-lg-4 ">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="fname">First Name</label>
                    <input type="text"  class="form-control" name="fname" value="{{$employee->fname}}">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="lname">Last Name</label>
                    <input type="text"  class="form-control" name="lname" value="{{$employee->lname}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email"  class="form-control" name="email"  value="{{$employee->email}}">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="mobile number">Mobile Number</label>
                    <input type="text"  class="form-control" name="ph_number"  value="{{$employee->ph_number}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="hire date">Hire Date</label>
                      <input type="date"  class="form-control"name="hire_date" value = "{{ Carbon\Carbon::parse($employee->hire_date)->format('Y-m-d') }}" >
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                        <label class="form-control-label" for="job">Role</label>
                        <select name="job_id" class="form-control" >
                        @foreach($job as $job)
                        <option value="{{$job->id}}" {{$job->id == $employee->job_id ? 'selected' : ""}}>{{$job->title}}</option>
                        @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="salary">Salary(LPA)</label>
                      <input type="text"  class="form-control" name="salary"  value="{{$employee->salary}}">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label class="form-control-label" for="manager">Manager</label>
                    
                    <select name="manager_id" class="form-control" >
                    @foreach($manager as $manager)
                    <option value="{{$manager->id}}" {{$manager->id == $employee->manager_id ? 'selected' : ""}}>{{$manager["name"]}}</option>
                    @endforeach
                    </select>

                  </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="department">Department</label>
                      <select name="department_id" class="form-control" >
                        @foreach($department as $department)
                        <option value="{{$department->id}}" {{$department->id == $employee->department_id ? 'selected' : ""}}>{{$department->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="project">Project</label>
                      <select name="project_id" class="form-control" >
                        @foreach($project as $project)
                        <option value="{{$project->id}}" {{$project->id == $employee->project_id ? 'selected' : ""}}>{{$project->name}}</option>
                        @endforeach
                        <option value="0" {{ $employee->project_id == 0 ? 'selected' : ""}}>None</option>
                      </select>
                      
                    </div>
                  </div>
                </div>
                <div class="text-center">
                    <button class="btn  btn-success align-center" >Update</button>
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

