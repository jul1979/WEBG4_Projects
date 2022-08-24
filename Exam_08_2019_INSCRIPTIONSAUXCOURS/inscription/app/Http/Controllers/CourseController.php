<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{


    public static function coursAll()
    {
        $cours = DB::table('courses')
            ->select('id', 'title')
            ->get();
        $students = DB::table('students')
            ->select('id', 'name')
            ->get();


        return view('cours', ['cours' => $cours, 'students' => $students]);
    }

    public static function coursInscrits()
    {
        $cours = Course::inscrits();
        return view('inscrits', ['cours' => $cours]);
    }

    public static function groupe($id)
    {
        $students = Student::eInscrits($id);
        return view('groupe', ['students' => $students]);
    }
}
