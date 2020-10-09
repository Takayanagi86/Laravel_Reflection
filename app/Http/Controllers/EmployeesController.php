<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index(){

        $employees = Employees::latest()->get();

        return view('employees.index', [
            'employees' => $employees,
        ]);
    }

    public function show($id){

        $employees = Employees::findOrFail($id);
        return view('employees.show', [
            'employees' => $employees,
        ]);
    }

    public function create(){
        return view('employees.create');
    }

    public function store(){

        $employee = new Employees();
        
        $employee->first_name = request('first_name');
        $employee->last_name = request('last_name');
        $employee->company = request('company');
        $employee->email = request('email');
        $employee->phone_number = request('phone_number');
        

        $employee->save();

        return redirect('/employees')->with('mssg', 'The new Employee has been added.');
    }
    
    public function edit($id){
        $employees = Employees::findOrFail($id);

        return view('employees.edit', [
            'employees' => $employees,
        ]);
    }

    public function update($id){
        $employee = Employees::findOrFail($id);

        $employee->first_name = request('first_name');
        $employee->last_name = request('last_name');
        $employee->company = request('company');
        $employee->email = request('email');
        $employee->phone_number = request('phone_number');
        

        $employee->update();

        return redirect('/employees')->with('mssg', 'Employee details have been updated.');
    }

    public function destroy($id){
        $employee = Employees::findOrFail($id);
        $employee->delete();

        return redirect('/employees')->with('mssg', 'The Employee has been deleted.');
    }
}
