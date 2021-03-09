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
}
