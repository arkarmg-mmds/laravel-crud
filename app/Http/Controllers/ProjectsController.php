<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;

class ProjectsController extends Controller
{
    //
    public function index(){

        $projects = Projects::all();
        
        // return $projects;
        // return view('projects.index' , ['projects' => $projects ]);
        return view('projects.index' , compact('projects'));
    }
}
