<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    /**
     * Get the comments for the blog post.
     */
    public function programs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Program::class);
    }

    public static function allStudents ()
    {
        $students = DB::table('students')
            ->leftJoin('programs', 'students.id', '=', 'programs.student_id')
            ->leftJoin('courses', 'programs.course_id', '=', 'courses.id')
            ->select('students.id', 'students.name', DB::raw('SUM(courses.credits) as total_credits'))
            ->groupBy('students.id', 'students.name')
            ->get();
        return $students;
    }

    public static function coursesByStudentId($id)
    {
       $courses = DB::table('students')
            ->leftJoin('programs', 'students.id', '=', 'programs.student_id')
            ->leftJoin('courses', 'programs.course_id', '=', 'courses.id')
            ->where('students.id', '=', $id)
            ->select('courses.id','courses.title','courses.credits')
            ->get();
        return $courses;

    }

}
