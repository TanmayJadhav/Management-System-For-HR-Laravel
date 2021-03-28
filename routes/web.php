<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'login')->name('login');
Route::post('/', [UserController::class,'login']);
Route::get('/logout', [UserController::class, 'logout']);


Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class,'dashboard']);

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
    Route::get('/department/edit', [DepartmentController::class,'get_department_edit_page']);
    Route::post('/department/edit', [DepartmentController::class,'department_edit']);
    Route::get('/department/add', [DepartmentController::class,'get_department_add_page']);
    Route::post('/department/add', [DepartmentController::class,'department_add']);

    //Project Routes
    Route::get('/project/list', [ProjectController::class,'get_project_list']);
    Route::get('/project/edit/{id}', [ProjectController::class,'get_project_edit_page']);
    Route::post('/project/edit/{id}', [ProjectController::class,'project_edit']);
    Route::get('/project/add', [ProjectController::class,'get_project_add_page']);
    Route::post('/project/add', [ProjectController::class,'project_add']);


    //Job Routes
    Route::get('/job/list', [JobController::class,'get_job_list']);
    Route::get('/job/edit/{id}', [JobController::class,'get_job_edit_page']);
    Route::post('/job/edit/{id}', [JobController::class,'job_edit']);
    Route::get('/job/add', [JobController::class,'get_job_add_page']);
    Route::post('/job/add', [JobController::class,'job_add']);


    //Location Routes 
    Route::get('/locations', [LocationController::class,'get_location']);
    Route::get('/location/add', [LocationController::class,'get_location_add_page']);
    Route::post('/location/add', [LocationController::class,'location_add']);



});



