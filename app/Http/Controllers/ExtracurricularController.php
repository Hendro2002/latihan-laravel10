<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtracurricularCreateRequest;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;

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

    function store(ExtracurricularCreateRequest $request)
    {
        $request->validated();
        $extra = Extracurricular::create($request->all());
        if ($extra) {
            Session::flash('status-add', 'success');
            Session::flash('message-add', 'add new extracurricular success');
        }
        return redirect('/extracurricular');
    }

    function edit(Request $request, $id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('extracurricular-edit', ['ekskul' => $ekskul]);
    }

    function update(Request $request, $id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        $ekskul->update($request->all());
        if ($ekskul) {
            Session::flash('status-update', 'success');
            Session::flash('message-update', 'update extracurricular success');
        }
        return redirect('/extracurricular');
    }
}
