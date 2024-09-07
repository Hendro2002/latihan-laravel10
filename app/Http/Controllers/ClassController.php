<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

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
}
