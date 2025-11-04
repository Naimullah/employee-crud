<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        // dd($employees);
       return view('index',[ 'employees' => $employees ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name'  => 'required|string|max:255',
        //     'email'      => 'required|email|unique:employees,email',
        //     'phone'      => 'nullable|string|max:20',
        //     'department' => 'required|string|max:255',
        //     'position'   => 'required|string|max:255',
        //     'hire_date'  => 'required|date',
        //     'salary'     => 'required|numeric|min:0',
        //     'status'     => 'required|string|max:50',
        // ]);

        // Employee::create($validatedData);

        // return redirect()->route('employees.index')->with('success', 'Employee created successfully.'); 
        $employees=new Employee();
        $employees->first_name=$request->first_name;
        $employees->last_name=$request->last_name;
        $employees->email=$request->email;
        $employees->phone=$request->phone;
        $employees->department=$request->department;
        $employees->position=$request->position;
        $employees->hire_date=$request->hire_date;
        $employees->salary=$request->salary;
        $employees->status=$request->status;
        $employees->save();
        // dd($employees);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->department = $request->department;
        $employee->position = $request->position;
        $employee->hire_date = $request->hire_date;
        $employee->salary = $request->salary;
        $employee->status = $request->status;
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
