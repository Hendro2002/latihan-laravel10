<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtracurricularCreateRequest;
use App\Http\Requests\ExtracurricularEditRequest;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;

class ExtracurricularController extends Controller
{
    function index()
    {
        // $ekskul = Extracurricular::with('students')->get();
        $ekskul = Extracurricular::get();
        return view('ekskul.extracurricular', ['ekskulList' => $ekskul]);
    }

    function show($id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('ekskul.extracurricular-detail', ['ekskul' => $ekskul]);
    }

    function create()
    {
        return view('ekskul.extracurricular-add');
    }

    function store(ExtracurricularCreateRequest $request)
    {
        $request->validated();
        $ekskul = Extracurricular::create($request->all());
        if ($ekskul) {
            Session::flash('status-add', 'success');
            Session::flash('message-add', 'Menambahkan Data Extrakurikuler baru berhasil !!!');
        }
        return redirect('/ekskul/extracurricular');
    }

    function edit(Request $request, $id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('ekskul.extracurricular-edit', ['ekskul' => $ekskul]);
    }

    function update(ExtracurricularEditRequest $request, $id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        $request->validated();
        $ekskul->update($request->all());
        if ($ekskul) {
            Session::flash('status-update', 'success');
            Session::flash('message-update', 'Update data Extrakurikuler berhasil !!!');
        }
        return redirect('/ekskul/extracurricular');
    }

    function delete($id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('ekskul.extracurricular-delete', ['ekskul' => $ekskul],);
    }

    function destroy($id)
    {
        $deleteEkskul = Extracurricular::findOrFail($id);
        $deleteEkskul->delete();

        if ($deleteEkskul) {
            Session::flash('status-delete', 'success');
            Session::flash('message-delete', 'Menghapus data Extrakurikuler berhasil !!!');
        }

        return redirect('/ekskul/extracurricular');
    }
}
