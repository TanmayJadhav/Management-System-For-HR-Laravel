<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\JobController;

Route::get('/', [Controller::class,'dashboard']);

//Employees Routes
Route::get('/employee/list', [EmployeeController::class,'get_employee_list']);
Route::post('/employee_details', [EmployeeController::class,'get_employee_details']);

//Manager Routes
Route::get('/manager/list', [ManagerController::class,'get_manager_list']);

//Department Routes
Route::get('/department/list', [DepartmentController::class,'get_department_list']);

//Project Routes
Route::get('/project/list', [ProjectController::class,'get_project_list']);


//Job Routes
Route::get('/job/list', [JobController::class,'get_job_list']);

