<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Job;
use App\Models\Manager;
use App\Models\Department;
use App\Models\Project;


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
        $job = Job::find($employee->job_id);
        $manager = Manager::find($employee->manager_id);
        $department = Department::find($employee->department_id);
        $project = Project::find($employee->project_id);

        switch ($request->input('action')) {
            case 'employee_details':

                return view("pages.employees.employee_details",compact('employee','job','manager','department','project'));

            case 'employee_edit':
                $employee = Employee::all();
                return view("pages.employees.list",compact('employee'));

        }        

        $id = $request->input('employee_id');
        
        $employee = Employee::find($id);

        // return view("pages.employees.employee_details",compact('employee'));
    }

}
