<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Throwable;

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
        // return $useremail;
        // dd($email);

        // $project = Project::create($credentials);
        $credentials = $request->validate(
            [
                'title' => 'required',
                'user-id' =>  'required',
                'desc'  => 'required',
                'access' => 'required'
            ]
        );

        // dd(User::find($credentials['user-id'])->email);
        try {
            $project = Project::create(
                [
                    'title' => $credentials['title'],
                    'desc' => $credentials['desc'],
                    'owner' => User::find($credentials['user-id'])->email,
                    'access' => $credentials['access'],
                ]
            );
        } catch (Throwable $e) {
            dd('An error happend');
        }

        return redirect('allprojects')->with('success');
    }
}
