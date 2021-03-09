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

    public function get_employee_details(Request $request)     // to get details of employee
    {    
        $id = $request->input('employee_id');
        
        $employee = Employee::find($id);

        switch ($request->input('action')) {
            case 'employee_details':

                return view("pages.employees.employee_details",compact('employee'));

            case 'employee_edit':
                $employee = Employee::all();
                return view("pages.employees.list",compact('employee'));

        }        

        $id = $request->input('employee_id');
        
        $employee = Employee::find($id);

        // return view("pages.employees.employee_details",compact('employee'));
    }

}
