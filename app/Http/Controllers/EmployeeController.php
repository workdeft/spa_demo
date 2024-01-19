<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return Inertia::render('Employees/Index',['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Employees/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $employee = new Employee();
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();

        return to_route('employees.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return Inertia::render('Employees/Show',['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return Inertia::render('Employees/Edit',['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();

        return to_route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
    }
}
