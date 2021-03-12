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
        
        $project = Project::select('projects.name')->join('managers','projects.id','=','managers.project_id')->get();
        // dd($project); 
        return view("pages.managers.list",compact('manager','project'));
    }
}
