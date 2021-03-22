<?php

namespace App\Http\Traits;

use App\Models\Employee;

trait EmpoyeeTrait
{
    public function index()
    {
        $employee = Employee::all();
        return view('home')->with(compact('employee'));
    }
}
