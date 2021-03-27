@extends('template')

@section('main')

<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Employees</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/employee/list">Employee</a></li>
              <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/employee/add" class="btn  btn-neutral">Add New Employee</a>
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
          <h3 class="mb-0">Employees List</h3>
        </div>
        <div class="table-responsive ">
          <table class="table align-items-center table-flush datatable">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Salary(LPA)</th>
                <th scope="col">Hire Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
            @foreach ($employee as $employee)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                      <img class="avatar  mr-3" alt="Image placeholder"  src="\img\employee.png">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">{{$employee->fname}} {{$employee->lname}}</span>
                    </div>
                  </div>
                </th>
                <td>{{$employee->email}}</td>
                <td>
                  <span>{{$employee->ph_number}}</span>
                </td>
                <td>
                  <div class="ml-4">
                  {{$employee->salary}}
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    {{$employee->hire_date}}
                  </div>
                </td>
                <td>
                <form method="POST" action="/employee/details">
                @csrf
                  <input type="hidden" name="employee_id" value="{{$employee->id}}">
                  <button class="btn btn-success" type="submit" name="action" value="employee_details">View</button>
                  <button class="btn btn-warning" type="submit" name="action" value="employee_edit">Edit</button>
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