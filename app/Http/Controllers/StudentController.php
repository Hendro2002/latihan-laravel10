<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Doctrine\DBAL\Types\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    function index()
    {
        // eloquent
        // $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get();
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get();
        return view('students', ['studentList' => $student]);
    }

    function show($id)
    {
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    function store(StudentCreateRequest $request)
    {
        // validate
        // $validated = $request->validate([
        //     'nis' => 'unique:students|max:10|required',
        //     'name' => 'max:100|required',
        //     'gender' => 'required',
        //     'class_id' => 'required',
        // ]);


        // $student = new Student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();
        // dd($request);

        $request->validated();

        $student = Student::create($request->all());
        if ($student) {
            Session::flash('status-add', 'success');
            Session::flash('message-add', 'add new student success');
        }
        return redirect('/students');
    }

    function edit(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id', 'name']);
        return view('student-edit', ['student' => $student], ['class' => $class]);
    }

    function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();
        $student->update($request->all());
        if ($student) {
            Session::flash('status-update', 'success');
            Session::flash('message-update', 'update student success');
        }
        return redirect('/students');
    }

    // create
    // Student::create([
    //     'name' => 'coba2',
    //     'gender' => 'p',
    //     'nis' => '9879879876',
    //     'class_id' => 2,
    // ]);
    // update
    // Student::find(52)->update([
    //     'name' => 'eloquery',
    //     'class_id' => 3
    // ]);
    // delete
    // Student::find(53)->delete();



    // db query
    // $student = DB::table('students')->get();
    // create
    // DB::table('students')->insert([
    //     'name' => 'coba',
    //     'gender' => 'L',
    //     'nis' => '1231231231',
    //     'class_id' => 1,
    // ]);
    // update
    // DB::table('students')->where('id', 51)-> update([
    //     'name' => 'query builder',
    //     'class_id'=>2
    // ]);
    // delete
    // DB::table('students')->where('id', 51)->delete();

    // $nilai=[1,4,5,3,5,3,4,3,4,3,42,3,4,3,2,1,2,3,4,3,2,23,];
    // php biasa
    // // 1. hitung jumlah nilai
    // $countNilai = count($nilai);
    // // 2. hitung berapa banyak nilai
    // $totalNilai = array_sum($nilai);
    // // 3. hitung rata-rata nilai
    // $nilaiRataRata = $totalNilai / $countNilai;

    //collection
    // $nilaiRataRata = collect($nilai)->avg();

    // contains
    // $aaa = collect($nilai)->contains( function ($value){
    //     return $value == 16;
    // });

    // diff
    // $resA=["burger", "siomay","pizza","spageti","makaroni","martabak","bakso"];
    // $resB=["pizza", "fried chicken","martabak","sayur asem","pecel lele","bakwan","bakso"];
    // $menuResA = collect($resA)->diff($resB);
    // $menuResB = collect($resB)->diff($resA);

    // filter
    // $aaa =collect($nilai)->filter(function($value){
    //     return $value > 3;
    // })->all();

    // pluck
    // $biodata = [
    //     ['nama' => 'Rizki', 'umur' => 20],
    //     ['nama' => 'Rahmad', 'umur' => 21],
    //     ['nama' => 'Rahmawan', 'umur' => 22],
    //     ['nama' => 'siti', 'umur'=> 16]
    // ];
    // $aaa=collect($biodata)->pluck('nama')->all();

    // map
    // $nilaiKaliDua = [];
    // foreach ($nilai as $value) {
    //     array_push($nilaiKaliDua, $value * 2);
    // }

    // $nilaiKaliDua = collect($nilai)->map(function($value){
    //     return $value * 2;
    // })->all();

    // dd($nilaiKaliDua);

}
