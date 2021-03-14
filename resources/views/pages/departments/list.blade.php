@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Department</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Table</a></li>
              <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/department/add" class="btn  btn-neutral">Add New Department</a>
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
          <h3 class="mb-0">Department List</h3>
        </div>
        <div class="table-responsive ">
          <table class="table align-items-center table-flush datatable">
            <thead class="thead-light">
              <tr>
                <th scope="col">Department Name</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <!--<th scope="col">Salary(LPA)</th>
                <th scope="col">Hire Date</th> -->
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody class="list">
            @php
            $i=0
            @endphp
            @foreach ($department as $department)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{$department->name}}</span>
                    </div>
                  </div>
                </th>
                <td>{{$location[$i]->address}}</td>
                <td>{{$location[$i++]->city}}</td>
                                <!--<td>
                  <span>{{$department->ph_number}}</span>
                </td>
                <td>
                  <div class="ml-4">
                  {{$department->salary}}
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    {{$department->hire_date}}
                  </div>
                </td> -->
                <td>
                <form action="/department/edit" method="get">
                
                  <input type="hidden" name="department_id" value="{{$department->id}}">
                  <button class="btn btn-warning" >Edit</button>
                </form>  
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