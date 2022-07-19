<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   // use HasFactory;

    public $id;
    public $description;
    public $dueDate;

    /**
     * @param $id
     * @param $description
     * @param $dueDate
     */
    public function __construct($id, $description, $dueDate)
    {
        parent::__construct( );
        $this->id = $id;
        $this->description = $description;
        $this->dueDate = $dueDate;
    }


    public static function allTasks()
    {
        return [ // Normalement lu dans une BD
            1 => new Task(1, "Acheter du pain", "27/01/2019"),
            2 => new Task(2, "Apprendre PHP", "01/03/2019"),
            3 => new Task(3, "Terminer le projet", "21/04/2019")
        ];
    }

    public static function get($id)
    {
        $tasks = self::allTasks();
        return $tasks[$id];
    }

}
