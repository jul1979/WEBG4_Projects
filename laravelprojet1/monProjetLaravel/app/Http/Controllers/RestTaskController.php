<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class RestTaskController extends Controller
{
   public function tasks($id = null)
    {
        if ($id == null) {
            $result = Task::allTasks();
        } else {
            $result = Task::get($id);
        }
        return response()->json($result); // ou json_encode($result)
 }
}
