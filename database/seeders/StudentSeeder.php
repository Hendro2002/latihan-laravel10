<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name'=>'abbas', 'gender'=>'l', 'nis'=>'0000000001', 'class_id'=>1],
        //     ['name'=>'putri', 'gender'=>'p', 'nis'=>'0000000002', 'class_id'=>2],
        //     ['name'=>'rini', 'gender'=>'p', 'nis'=>'0000000003', 'class_id'=>3],
        //     ['name'=>'ujang', 'gender'=>'l', 'nis'=>'0000000004', 'class_id'=>4],
        //     ['name'=>'budi', 'gender'=>'l', 'nis'=>'0000000005', 'class_id'=>5],
        // ];

        // foreach ($data as $value) {
        //     # code...
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        Student::factory()->count(50)->create();
    }
}
