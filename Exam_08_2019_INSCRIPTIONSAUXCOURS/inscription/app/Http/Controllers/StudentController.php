<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //

    public function store($id, $matricule)
    {
        $id = DB::table('programs')->insertGetId(
            ['course_id' => $id, 'student_id' => $matricule]
        );
        return response()->json([
            'status' => 200,
            'id' => $id,
        ]);
    }

    public function studentAll()
    {

        return view('inscrits', ['inscrits' => Student::all()]);
    }

    public function show($id)
    {





        $results = DB::select('SELECT students.* from students where students.id not in( select students.id from students join programs on students.id=programs.student_id join courses on programs.course_id=courses.id where courses.id=?)', [$id]);

        return response()->json(['students' => $results]);
    }




    public function index($id)
    {
        $data = Student::eInscrits($id);
        return response()->json(['students' => $data]);
    }
}
