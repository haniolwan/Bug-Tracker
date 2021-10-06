<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;


class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::all();
        return view('allprojects', ['projects' => $projects]);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $username = User::find($request->username)->name;
        $credentials = $request->validate(
            [
                'title' => 'required|unique:projects|max:255',
                'desc'  => 'required',
                'owner' =>   $username,
                'access' => 'required'

            ]
        );
        $project = Project::create($credentials);
        if (!$project) {
            return "Error";
        } else {
            return "Project Created Successfully";
        }
    }
}
