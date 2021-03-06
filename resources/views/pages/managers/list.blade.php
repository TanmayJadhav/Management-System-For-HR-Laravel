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
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/manager/list">Manager</a></li>
              <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/manager/add" class="btn  btn-neutral">Add New Manager</a>
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
          <h3 class="mb-0">Manager List</h3>
        </div>
        <div class="table-responsive ">
          <table class="table align-items-center table-flush datatable">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Project</th>
                <th scope="col">Salary(LPA)</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
            @php
            $i=0;
            @endphp
            @foreach ($manager as $manager)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                  <img class="avatar  mr-3" alt="Image placeholder" src="\img\manager.png">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{$manager->name}}</span>
                    </div>
                  </div>
                </th>
                <td >{{$manager->email}}</td>
                @if ($manager->project_id != 0)
                <td>{{$project[$i++]->name}}</td>
                @else
                <td>None</td>
                @endif
                <td>
                  <div class="ml-4">
                  {{$manager->salary}}
                  </div>
                </td>
                
                <td>
                <form action="/manager/edit" method="get">
                
                  <input type="hidden" name="manager_id" value="{{$manager->id}}">
                  <button class="btn btn-warning">Edit</button>
                </form>  
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