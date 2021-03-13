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
Route::get('/employee/list', [EmployeeController::class,'get_employee_list'])->name('employee list');
Route::get('/employee/add', [EmployeeController::class,'get_employee_add_page']);
Route::post('/employee/add', [EmployeeController::class,'employee_add']);
Route::post('/employee/details', [EmployeeController::class,'get_employee_details']);
Route::post('/employee/edit', [EmployeeController::class,'employee_edit']);


//Manager Routes
Route::get('/manager/list', [ManagerController::class,'get_manager_list']);
Route::get('/manager/add', [ManagerController::class,'get_manager_add_page']);
Route::post('/manager/add', [ManagerController::class,'manager_add']);
Route::get('/manager/edit', [ManagerController::class,'get_manager_edit_page']);
Route::post('/manager/edit', [ManagerController::class,'manager_edit']);

//Department Routes
Route::get('/department/list', [DepartmentController::class,'get_department_list']);

//Project Routes
Route::get('/project/list', [ProjectController::class,'get_project_list']);


//Job Routes
Route::get('/job/list', [JobController::class,'get_job_list']);

