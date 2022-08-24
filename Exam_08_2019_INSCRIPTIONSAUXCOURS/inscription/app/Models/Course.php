<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;

    /**
     * Get the programs for the course.
     */
    public function programs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Program::class);
    }



    public static function inscrits()
    {

        return DB::table('courses')
            ->join('programs', 'courses.id', '=', 'programs.course_id')
            ->join('students', 'students.id', '=', 'programs.student_id')
            ->select(DB::raw('count(*) as Nb_Etudiants, courses.title,programs.course_id as cid'))
            ->groupBy('courses.title', 'programs.course_id')
            ->get();
    }
}
