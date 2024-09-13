<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    function index()
    {

        // lazy load
        // $class = ClassRoom::all();
        // eager load
        // $class = ClassRoom::with('students', 'homeroomTeacher')->get();
        $class = ClassRoom::get();
        return view('classroom', ['classList' => $class]);


        // var_dump('test');
        // dd($student);
    }

    function show($id)
    {
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }

    function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('class-add', ['class' => $teacher]);
    }

    function store(Request $request)
    {
        $class = ClassRoom::create($request->all());
        return redirect('/class');
    }

    function edit(Request $request, $id)
    {
        $class = ClassRoom::with(['homeroomTeacher'])->findOrFail($id);
        $teacher = Teacher::where('id', '!=', $class->teacher_id)->get();
        return view('class-edit', ['class' => $class], ['teacher' => $teacher]);
    }

    function update(Request $request, $id)
    {
        $class = Classroom::findOrFail($id);
        $class->update($request->all());
        return redirect('/class');
    }
}
