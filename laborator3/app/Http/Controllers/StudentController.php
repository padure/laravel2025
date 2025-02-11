<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', [
            'students'=>$students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        Student::created($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', ['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->name      = $request->name;
        $student->email     = $request->email;
        $student->telefon   = $request->telefon;
        $student->adresa    = $request->adresa;
        $student->save();
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
