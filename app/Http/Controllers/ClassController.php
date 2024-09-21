<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassCreateRequest;
use App\Http\Requests\ClassEditRequest;
use App\Models\Teacher;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    function index()
    {
        // lazy load
        // $class = ClassRoom::all();
        // eager load
        // $class = ClassRoom::with('students', 'homeroomTeacher')->get();
        $class = ClassRoom::get();
        return view('kelas.classroom', ['classList' => $class]);

        // var_dump('test');
        // dd($student);
    }

    function show($id)
    {
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('kelas.class-detail', ['class' => $class]);
    }

    function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('kelas.class-add', ['class' => $teacher]);
    }

    function store(ClassCreateRequest $request)
    {
        $request->validated();
        $class = ClassRoom::create($request->all());
        if ($class) {
            Session::flash('status-add', 'success');
            Session::flash('message-add', 'Tambah Kelas baru berhasil !!!');
        }
        return redirect('/kelas/class');
    }

    function edit(Request $request, $id)
    {
        $class = ClassRoom::with(['homeroomTeacher'])->findOrFail($id);
        $teacher = Teacher::where('id', '!=', $class->teacher_id)->get();
        return view('kelas.class-edit', ['class' => $class], ['teacher' => $teacher]);
    }

    function update(ClassEditRequest $request, $id)
    {
        $class = Classroom::findOrFail($id);
        $request->validated();
        $class->update($request->all());
        if ($class) {
            Session::flash('status-update', 'success');
            Session::flash('message-update', 'Update data Kelas berhasil !!!');
        }
        return redirect('/kelas/class');
    }

    function delete($id)
    {
        $class = Classroom::findOrFail($id);
        return view('kelas.class-delete', ['class' => $class],);
    }

    function destroy($id)
    {
        $deleteClass = ClassRoom::findOrFail($id);
        $deleteClass->delete();
        if ($deleteClass) {
            Session::flash('status-delete', 'success');
            Session::flash('message-delete', 'Menghapus data Kelas berhasil !!!');
        }
        return redirect('/kelas/class');
    }

    function deletedClass()
    {
        $deletedClass = ClassRoom::onlyTrashed()->get();
        return view('kelas.class-deleted-list', ['class' => $deletedClass]);
    }

    function restore($id)
    {
        $deletedClass = ClassRoom::withTrashed()->where('id', $id)->restore();
        if ($deletedClass) {
            Session::flash('status-restore', 'success');
            Session::flash('message-restore', 'Restore data Kelas berhasil !!!');
        }
        return redirect('/kelas/class-deleted',);
    }

    function deletePermanent($id)
    {
        $class = ClassRoom::withTrashed()->findOrFail($id);
        return view('kelas.class-delete-permanent', ['class' => $class],);
    }

    function forceDestroy($id)
    {
        $class = ClassRoom::withTrashed()->findOrFail($id)->forceDelete();
        if ($class) {
            Session::flash('status-restore', 'success');
            Session::flash('message-restore', 'Hapus data Kelas secara Permanen berhasil !!!');
        }
        return redirect('/kelas/class-deleted');
    }
}
