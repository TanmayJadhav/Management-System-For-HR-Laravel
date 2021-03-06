<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'fname',
        'lname',
        'email',
        'ph_number',
        'hire_date',
        'job_id',
        'salary',
        'manager_id',
        'department_id',
        'project_id'

    ];
}

