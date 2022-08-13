<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Repo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RepoController extends Controller
{


    public function data()
    {
        $repos =  DB::select('select repos.id as id, repos.name as depot,contributors.name as utilisateur,count(commits.id)as commits from contributors join repos on contributors.id=repos.contributor_id left join commits on commits.repo_id=repos.id GROUP BY repos.id,repos.name,contributors.name');
        Log::info($repos);
        return view('repos',['repos' =>$repos]);
    }

    public function detail($id)
    {
        $repos =  DB::select('select contributors.name as user_name,repos.name as repository_name from contributors join repos on contributors.id=repos.contributor_id where repos.id=?',[$id]);
        $user_name = array_map(function ($value): string {
            return $value->user_name;
        }, $repos);
        $repo_name = array_map(function ($value): string {
            return $value->repository_name;
        }, $repos);

        $commits=DB::select('SELECT commits.date,commits.message from commits where commits.repo_id=?',[$id]);
        //array_push($data,[$repos,$commits]);

        //$data = array("user_name"=>$user_name, "repo_name"=>$repo_name, "commits"=>$commits);
       // Log::info($data);
        //return response()->json($data);
        return response()->json([
            'user_name' => $user_name,
            'repository_name' => $repo_name,
            "commits"=>$commits
        ]);

    }
}
