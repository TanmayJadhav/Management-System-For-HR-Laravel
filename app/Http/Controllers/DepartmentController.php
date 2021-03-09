<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function get_department_list()   // to get list of department
    {      
        $department = Department::all();

        return view("pages.departments.list",compact('department'));
    }
}
