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
        

        switch ($request->input('action')) {

            case 'employee_details':

                $job = Job::find($employee->job_id);
                $manager = Manager::find($employee->manager_id);
                $department = Department::find($employee->department_id);
                $project = Project::find($employee->project_id);

                return view("pages.employees.employee_details",compact('employee','job','manager','department','project'));

            case 'employee_edit':
                
                $job = Job::all();
                $manager = Manager::all();
                $department = Department::all();
                $project = Project::all();

                return view("pages.employees.edit",compact('employee','job','manager','department','project'));

        }        
    }

    public function employee_edit(Request $request)
    {
        $id = $request->input('employee_id');

        if (
        Employee::where('id', $id)
                ->update(['fname' => $request->input('fname'),
                          'lname' => $request->input('lname'),
                          'email' => $request->input('email'),
                          'ph_number' => $request->input('ph_number'),
                          'hire_date' => $request->input('hire_date'),
                          'job_id' => $request->input('job_id'),
                          'salary' => $request->input('salary'),
                          'manager_id' => $request->input('manager_id'),
                          'department_id' => $request->input('department_id'),
                          'project_id' => $request->input('project_id')
                        ])
        )  
        {  
            $employee = Employee::find($id);
            $job = Job::all();
            $manager = Manager::all();
            $department = Department::all();
            $project = Project::all();
            $success = 'Profile Updated';
            return view("pages.employees.edit",compact('employee','job','manager','department','project','success'));
        } 
        
        else
        {
            $error = 'Profile Update Failed . Try Again !!';
            return view("pages.employees.edit",compact('employee','job','manager','department','project','error'));

        }
    }

    public function get_employee_add_page()
    {
        $job = Job::all();
        $manager = Manager::all();
        $department = Department::all();
        $project = Project::all();

        return view("pages.employees.add",compact('job','manager','department','project'));
    }

    public function employee_add(Request $request)
    {
        
        $employee = new Employee;
        $employee->fname = $request->input('fname');
        $employee->lname = $request->input('lname');
        $employee->email = $request->input('email');
        $employee->ph_number = $request->input('ph_number');
        $employee->hire_date = $request->input('hire_date');
        $employee->job_id = $request->input('job_id');
        $employee->salary = $request->input('salary');
        $employee->manager_id = $request->input('manager_id');
        $employee->department_id = $request->input('department_id');
        $employee->project_id = $request->input('project_id');


        if($employee->save())
        {   
            $job = Job::all();
            $manager = Manager::all();
            $department = Department::all();
            $project = Project::all();
            $employee = Employee::all();
            $success = 'Employee Added';
            return view("pages.employees.add",compact('employee','success','job','manager','department','project'));  
        }

        else{
            $job = Job::all();
            $manager = Manager::all();
            $department = Department::all();
            $project = Project::all();
            $employee = Employee::all();
            $error = 'Try Again Later';
            return view("pages.employees.add",compact('employee','error','job','manager','department','project'));  
        }
                    
    }

}
