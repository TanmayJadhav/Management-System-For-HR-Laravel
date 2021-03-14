@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Projects</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Table</a></li>
              <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="#" class="btn  btn-neutral">Add New Project</a>
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
          <h3 class="mb-0">Project List</h3>
        </div>
        <div class="table-responsive ">
          <table class="table align-items-center table-flush datatable">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Budget</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Status</th>
                <th scope="col">Completion</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
            @foreach ($project as $project)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                      <img class="avatar mr-3" alt="Image placeholder" width="50" src="/img/project.png">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{$project->name}}</span>
                    </div>
                  </div>
                </th>
                <td>{{$project->budget}}</td>
                <td>{{$project->start_date}}</td>
                <td>
                  <span>{{$project->end_date}}</span>
                </td>
                <td>
                  <div>
                  {{$project->status}}
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">{{$project->completion_percent}}%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{$project->completion_percent}}%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="btn btn-warning" href="#">Edit</a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>      


@stop()