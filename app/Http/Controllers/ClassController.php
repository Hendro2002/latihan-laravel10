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
        $class = Classroom::create($request->all());
        return redirect('/class');
    }
}
