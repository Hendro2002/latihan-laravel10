<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    function index()
    {
        $class = ClassRoom::with('students')->get();
        return view('classroom', ['classList' => $class]);


        // var_dump('test');
        // dd($student);
    }
}
