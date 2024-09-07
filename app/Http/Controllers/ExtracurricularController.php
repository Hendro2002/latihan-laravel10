<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    function index()
    {
        // $ekskul = Extracurricular::with('students')->get();
        $ekskul = Extracurricular::get();
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }

    function show($id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('extracurricular-detail', ['ekskul' => $ekskul]);
    }
}
