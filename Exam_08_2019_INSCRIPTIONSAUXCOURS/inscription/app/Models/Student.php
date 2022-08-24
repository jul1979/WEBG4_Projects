<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    /**
     * Get the programs for the course.
     */
    public function programs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Program::class);
    }

    public static function eInscrits($id)
    {

        return DB::table('students')
            ->join('programs', 'students.id', '=', 'programs.student_id')
            ->where('programs.course_id', '=', $id)
            ->select('students.id', 'students.name')
            ->get();
    }
}
