<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TeacherEditRequest;
use App\Http\Requests\TeacherCreateRequest;

class TeacherController extends Controller
{
    function index()
    {
        $teacher = Teacher::all();
        return view('guru.teacher', ['teacherList' => $teacher]);
    }

    function show($id)
    {
        $teacher = Teacher::with('class.students')
            ->findOrFail($id);
        return view('guru.teacher-detail', ['teacher' => $teacher]);
    }

    function create()
    {
        return view('guru.teacher-add');
    }

    function store(TeacherCreateRequest $request)
    {
        $request->validated();
        $teacher = Teacher::create($request->all());
        if ($teacher) {
            Session::flash('status-add', 'success');
            Session::flash('message-add', 'Tambah data Guru baru berhasil !!!');
        }
        return redirect('/guru/teacher');
    }

    function edit(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('guru.teacher-edit', ['teacher' => $teacher]);
    }

    function update(TeacherEditRequest $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $request->validated();
        $teacher->update($request->all());
        if ($teacher) {
            Session::flash('status-update', 'success');
            Session::flash('message-update', 'Update data Guru berhasil !!!');
        }
        return redirect('/guru/teacher');
    }

    function delete($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('guru.teacher-delete', ['teacher' => $teacher],);
    }

    function destroy($id)
    {
        $deleteTeacher = Teacher::findOrFail($id);
        $deleteTeacher->delete();
        if ($deleteTeacher) {
            Session::flash('status-delete', 'success');
            Session::flash('message-delete', 'Menghapus data Guru berhasil !!!');
        }

        return redirect('/guru/teacher');
    }

    function deletedTeacher()
    {
        $deletedTeacher = Teacher::onlyTrashed()->get();
        return view('guru.teacher-deleted-list', ['teacher' => $deletedTeacher]);
    }

    function restore($id)
    {
        $deletedTeacher = Teacher::withTrashed()->where('id', $id)->restore();
        if ($deletedTeacher) {
            Session::flash('status-restore', 'success');
            Session::flash('message-restore', 'Restore data Guru berhasil !!!');
        }
        return redirect('/guru/teacher-deleted',);
    }

    function deletePermanent($id)
    {
        $teacher = Teacher::withTrashed()->findOrFail($id);
        return view('guru.teacher-delete-permanent', ['teacher' => $teacher],);
    }

    function forceDestroy($id)
    {
        $teacher = Teacher::withTrashed()->findOrFail($id)->forceDelete();
        if ($teacher) {
            Session::flash('status-restore', 'success');
            Session::flash('message-restore', 'Hapus data guru secara Permanen berhasil !!!');
        }
        return redirect('/guru/teacher-deleted');
    }
}
