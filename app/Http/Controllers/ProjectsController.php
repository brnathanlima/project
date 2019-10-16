<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::All();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }
}
