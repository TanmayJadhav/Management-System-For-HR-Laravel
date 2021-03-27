@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Jobs</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/job/list">Job</a></li>
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



<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Jobs Position List</h3>
        </div>
        <div class="table-responsive ">
          <table class="table align-items-center table-flush datatable">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col"> Job Availability</th> 
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
            @foreach ($job as $job)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                  <img class="avatar mr-3" alt="Image placeholder" width="50" src="/img/job.png">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{$job->title}}</span>
                    </div>
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center ml-4">
                  @if($job->availability == 1)
                    <span class="name mb-0 text-sm">Yes</span>
                  @else
                    <span class="name mb-0 text-sm">No</span>
                  @endif  
                  </div>
                </td>
                <td>
                  <a class="btn btn-warning" href="/job/edit/{{$job->id}}">Edit</a>
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