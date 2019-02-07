<?php

namespace Enterprise\Http\Controllers;

use Enterprise\Employee;
use Illuminate\Http\Request;

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
        return view('Employees.show',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nameImage = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$nameImage);
        }
        $employee = new Employee();    
        $employee->name = $request->input('name');
        $employee->last_name = $request->input('last_name');
        $employee->day_of_birth = $request->input('day_of_birth');
        $employee->gender = $request->input('gender');
        $employee->address = $request->input('address');
        $employee->phone = $request->input('phone');
        $employee->station = $request->input('station');
        $employee->description = $request->input('description');
        $employee->image = $nameImage;
        $employee->slug = str_replace ( ' ', '-' , $request->input('name').' '.$request->input('last_name'));
        $employee->save();
        return view('Employees.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //$employee = Employee::where('slug','=',$slug)->firstOrFail();
        return view('Employees.data',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('Employees.update',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->fill($request->all());
        $employee->save();
        return view('Employee.data', compact('employee'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
