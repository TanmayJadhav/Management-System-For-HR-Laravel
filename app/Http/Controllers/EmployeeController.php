<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function get_employee_list()     // to get list of employees
    {      
        $employee = Employee::all();

        return view("pages.employees.list",compact('employee'));
    }
}
