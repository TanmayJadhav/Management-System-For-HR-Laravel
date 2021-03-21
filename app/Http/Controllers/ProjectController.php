<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function get_project_list()     // to get list of projects
    {      
        $project = project::all();
        return view("pages.projects.list",compact('project'));
    }


    public function get_project_add_page()
    {
        
        $project = project::all();

        return view("pages.projects.add",compact('project'));
    }

    public function project_add(Request $request)
    {
        $project = new Project;
        $project->name = $request->input('name');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->budget = $request->input('budget');
        $project->status = $request->input('status');
        $project->completion_percent = $request->input('completion_percent');


        if($project->save())
        {
            $success = 'Project Added';
            return view("pages.projects.add",compact('success'));
        }
        else
        {
            $error = 'Process Failed . Try Again !!';
            return view("pages.projects.edit",compact('error'));
        }
    }

    public function get_project_edit_page(Request $request,$id)
    {
        $project = Project::find($id);
        
        return view("pages.projects.edit",compact('project'));
    }


    public function project_edit(Request $request,$id)
    {
        
       if( Project::where('id', $id)
                ->update(['name' => $request->input('name'),
                          'status' => $request->input('status'),
                          'start_date' => $request->input('start_date'),
                          'end_date' => $request->input('end_date'),
                          'budget' => $request->input('budget'),
                          'completion_percent' => $request->input('completion_percent')
                        ])
        )          
        {
            $project = Project::find($id);
            
            $success = 'Project Details Updated';
            return view("pages.projects.edit",compact('project','success'));
        }      
        else{
            $project = Project::find($id);
            
            $error = 'Project Details Update Failed . Try Again !!';
            return view("pages.projects.edit",compact('project','error'));
        }
    }
}

