<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index()
    {
        $teacher = Teacher::all();
        return view('teacher', ['teacherList' => $teacher]);
    }

    function show($id)
    {
        $teacher = Teacher::with('class.students')
            ->findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    function create()
    {
        return view('teacher-add');
    }

    function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return redirect('/teacher');
    }
}
