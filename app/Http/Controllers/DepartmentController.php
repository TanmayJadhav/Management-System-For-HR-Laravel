<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Location;

class DepartmentController extends Controller
{
    public function get_department_list()   // to get list of department
    {      
        $department = Department::all();
        $location = Location::select("locations.*")->join("departments","locations.id","=","departments.location_id")->get();
        return view("pages.departments.list",compact('department','location'));
    }

    public function get_department_edit_page(Request $request)
    {
        $id = $request->input('department_id');
        $department = Department::find($id);
        $location = Location::all();
        return view("pages.departments.edit",compact('department','location'));
    }

    public function department_edit(Request $request)
    {
        $id = $request->input('department_id');
        
        
       if( Department::where('id', $id)
                ->update(['name' => $request->input('name'),
                          'location_id' => $request->input('location_id'),
                        ])
        )          
        {
            $department = Department::find($id);
            $location = Location::all();
            $success = 'Profile Updated';
            return view("pages.departments.edit",compact('department','location','success'));
        }      
        else{
            $department = Department::find($id);
            $location = Location::all();
            $error = 'Profile Update Failed . Try Again !!';
            return view("pages.departments.edit",compact('department','location','error'));
        }

    }
}
