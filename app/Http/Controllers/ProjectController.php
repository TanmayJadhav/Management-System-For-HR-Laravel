<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function get_project_list()     // to get list of projects
    {      
        $project = Project::all();

        return view("pages.projects.list",compact('project'));
    }

    public function get_project_edit_page(Request $request,$id)
    {
        $project = Project::find($id);
        $project_status = Project::select("status")->first();
        // dd($project_status);
        
        return view("pages.projects.edit",compact('project','project_status'));
    }
}

