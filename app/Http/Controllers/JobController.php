<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function get_job_list()     // to get list of jobs
    {      
        $job = Job::all();

        return view("pages.jobs.list",compact('job'));
    }


    public function get_job_add_page()
    {
        $job = Job::all();

        return view("pages.jobs.add",compact('job'));
    }

    public function job_add(Request $request)
    {
        $job = new Job;
        $job->title = $request->input('title');
        $job->availability = 1;

        if($job->save())
        {

            $job = Job::all();
            $success = 'Job Details Added';
            return view("pages.jobs.add",compact('job','success'));
        }
        else{

            $job = Job::all();
            $error = 'Process Failed . Try Again !!';
            return view("pages.jobs.add",compact('job','error'));
        }
    }

    public function get_job_edit_page(Request $request ,$id)
    {
        $job = Job::find($id);
        $job_availability = Job::all();
        return view("pages.jobs.edit",compact('job','job_availability'));
    }

    public function job_edit(Request $request , $id)
    {
       if( Job::where('id', $id)
                ->update(['title' => $request->input('title'),
                          'availability' => $request->input('availability'),
                        ])
        )          
        {
            $job = Job::find($id);
            $job_availability = Job::all();
            $success = 'Job Details Updated';
            return view("pages.jobs.edit",compact('job','success','job_availability'));
        }      
        else{
            $job = Job::find($id);
            $job_availability = Job::all(); 
            $error = 'Process Failed . Try Again !!';
            return view("pages.jobs.edit",compact('job','error','job_availability'));
        }
    }
}
