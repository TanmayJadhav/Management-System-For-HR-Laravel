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
}
