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

    function create()
    {
        return view('extracurricular-add');
    }

    function store(Request $request)
    {
        $extra = Extracurricular::create($request->all());
        return redirect('/extracurricular');
    }
}
