<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TeacherCreateRequest;

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

    function store(TeacherCreateRequest $request)
    {
        $request->validated();
        $teacher = Teacher::create($request->all());
        if ($teacher) {
            Session::flash('status-add', 'success');
            Session::flash('message-add', 'add new teacher success');
        }
        return redirect('/teacher');
    }

    function edit(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-edit', ['teacher' => $teacher]);
    }

    function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        if ($teacher) {
            Session::flash('status-update', 'success');
            Session::flash('message-update', 'update teacher success');
        }
        return redirect('/teacher');
    }
}
