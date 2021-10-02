<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::all();
        return view('allprojects', ['projects' => $projects]);
    }
    public function store(Request $request)
    {
        return $request->all();
    }
}
