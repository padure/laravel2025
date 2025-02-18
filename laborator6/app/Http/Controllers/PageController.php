<?php

namespace App\Http\Controllers;

use App\Models\Student;

class PageController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }
}

