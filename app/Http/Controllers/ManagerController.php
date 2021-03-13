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

        $manager->save();

        $project = Project::all();
        return view("pages.managers.add",compact('project'));
    }
}
