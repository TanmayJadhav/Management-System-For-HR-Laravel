<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Project;


class ManagerController extends Controller
{
    public function get_manager_list()   // to get list of managers
    {      
        $manager = Manager::all();
        
        $project = Project::select("projects.name")->join("managers","projects.id","=","managers.project_id")->get();
        // dd($project); 
        return view("pages.managers.list",compact('manager','project'));
    }

    public function get_manager_add_page()
    {
        $project = Project::all();

        return view("pages.managers.add",compact('project'));
    }

    public function manager_add(Request $request)
    {
        $manager = new Manager;
        $manager->name = $request->input('name');
        $manager->email = $request->input('email');
        $manager->salary = $request->input('salary');
        $manager->project_id = $request->input('project_id');

        if($manager->save())
        {
            $project = Project::all();
            $success = 'Manager Added';
            return view("pages.managers.add",compact('project','success'));
        }
        else{
            $project = Project::all();
            $error = 'Process Failed !!! Try Agian';
            return view("pages.managers.add",compact('project','error'));
        }

        
    }

    public function get_manager_edit_page(Request $request)
    {   
        $id = $request->input('manager_id');

        $manager = Manager::find($id);
        // dd($manager);
        $project = Project::all();

        return view("pages.managers.edit",compact('project','manager'));
    }

    public function manager_edit(Request $request)
    {   
        $id = $request->input('manager_id');
        
        
       if( Manager::where('id', $id)
                ->update(['name' => $request->input('name'),
                          'salary' => $request->input('salary'),
                          'email' => $request->input('email'),
                          'project_id' => $request->input('project_id')
                        ])
        )          
        {
            $manager = Manager::find($id);
            $project = Project::all();  
            $success = 'Profile Updated';
            return view("pages.managers.edit",compact('project','manager','success'));
        }      
        else{
            $manager = Manager::find($id);
            $project = Project::all();  
            $error = 'Profile Update Failed . Try Again !!';
            return view("pages.managers.edit",compact('project','manager','error'));
        }            
    }
    
}
