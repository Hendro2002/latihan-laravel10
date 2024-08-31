<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function index()
    {
        // eloquent
        // $student = Student::all();
        // return view('students', ['studentList' => $student]);
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
        Student::find(53)->delete();


        
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

        // var_dump('test');
        // dd($student);
    }
}
