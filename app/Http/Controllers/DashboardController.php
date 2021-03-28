<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Manager;

class DashboardController extends Controller
{
      
    public function dashboard()
    {
        $employee_count = Employee::count();
        $manager_count = Manager::count();
        $project_count = Project::count();
        $department_count = Department::count();
        $project_budget = $this->IND_money_format(Project::sum('budget'));

        
        return view('dashboard',compact('employee_count','manager_count','department_count','project_count','project_budget'));
    }

    public function IND_money_format($number){
        $decimal = (string)($number - floor($number));
        $money = floor($number);
        $length = strlen($money);
        $delimiter = '';
        $money = strrev($money);

        for($i=0;$i<$length;$i++){
            if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$length){
                $delimiter .=',';
            }
            $delimiter .=$money[$i];
        }

        $result = strrev($delimiter);
        $decimal = preg_replace("/0\./i", ".", $decimal);
        $decimal = substr($decimal, 0, 3);

        if( $decimal != '0'){
            $result = $result.$decimal;
        }

        return $result;
    }
}
