<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    function index (){
        $ekskul = Extracurricular::with('students')->get();
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }
}
