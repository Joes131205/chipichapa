<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view("employees.showEmployee", compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employees.addEmployee");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|string|min:10|max:40',
            'phoneNumber' => ['required', 'string', 'min:9', 'max:12', 'regex:/^08/'],
        ]);

        $lastEmployee = Employee::latest()->first();
        $id = "EMP0001";    
        if (!$lastEmployee) {
            $id = "EMP0001";
        } else {
            $id = "EMP" . sprintf("%04d", substr($lastEmployee->id, 3) + 1);
        }   
        Employee::create([
            'id' => $id,
            'fullName' => $request->fullName,
            'age' => $request->age,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
        ]);

        return redirect()->route('employees.home')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view("employees.updateEmployee", compact("employee"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'fullName' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|string|min:10|max:40',
            'phoneNumber' => ['required', 'string', 'min:9', 'max:12', 'regex:/^08/'],
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update([
            'fullName' => $request->fullName,
            'age' => $request->age,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
        ]);

        return redirect()->route('employees.home')->with('success', 'Employee updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.home')->with('success', 'Employee deleted successfully.');    }
}
