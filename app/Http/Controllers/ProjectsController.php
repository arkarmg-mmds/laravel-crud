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

    public function create(){
        return view('projects.create');
    }

    public function store(){
        $projects = new Projects();
        $projects->title = request('project_title');
        $projects->description = request('project_description');
        $projects->save();

        return redirect('/projects');

        // return request()->all();
        // return request('project_title');
    }
}
