<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index()
    {
        $student = Student::all();
        return view('students', ['studentList' => $student]);


        // var_dump('test');
        // dd($student);
    }
}
