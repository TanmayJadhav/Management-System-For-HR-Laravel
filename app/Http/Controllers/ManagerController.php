<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;

class ManagerController extends Controller
{
    public function get_manager_list()   // to get list of managers
    {      
        $manager = Manager::all();

        return view("pages.managers.list",compact('manager'));
    }
}
