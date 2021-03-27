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
              <li class="breadcrumb-item active" aria-current="page">Details</li>
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
        <hr class="my-1" />
        <div class="card-body ">
          <form>
            <h6 class="heading text-muted mb-4">Employee details</h6>
            <div class="pl-lg-4 ">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="fname">First Name</label>
                    <input type="text"  class="form-control" readonly value="{{$employee->fname}}">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="lname">Last Name</label>
                    <input type="text"  class="form-control" readonly value="{{$employee->lname}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email"  class="form-control" readonly  value="{{$employee->email}}">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-control-label" for="mobile number">Mobile Number</label>
                    <input type="text"  class="form-control" readonly  value="{{$employee->ph_number}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="hire date">Hire Date</label>
                      <input type="text"  class="form-control" readonly value="{{$employee->hire_date}}">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                        <label class="form-control-label" for="job">Role</label>
                        <input type="text"  class="form-control" readonly value="{{$job->title}}">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="salary">Salary(LPA)</label>
                      <input type="text"  class="form-control" readonly value="{{$employee->salary}}">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label class="form-control-label" for="manager">Manager</label>
                    <input type="text"  class="form-control" readonly value="{{$manager->name}}">
                  </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="department">Department</label>
                      <input type="text"  class="form-control" readonly value="{{$department->name}}">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label class="form-control-label" for="project">Project</label>
                      @if($employee->project_id == 0)
                      <input type="text"  class="form-control" readonly value="None">
                      @else
                      <input type="text"  class="form-control" readonly value="{{$project->name}}">
                      @endif
                    </div>
                  </div>
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

