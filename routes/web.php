<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\JobController;

Route::get('/', [Controller::class,'dashboard']);

Route::get('/employee/list', [EmployeeController::class,'get_employee_list']);


Route::get('/manager/list', [ManagerController::class,'get_manager_list']);


Route::get('/department/list', [DepartmentController::class,'get_department_list']);


Route::get('/project/list', [ProjectController::class,'get_project_list']);

Route::get('/job/list', [JobController::class,'get_job_list']);

