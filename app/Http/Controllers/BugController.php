<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Bug;
use App\Models\User;

class BugController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
