<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() 
    {
        $projects = Project::all(); 
        return view('projects.show', compact('projects'));
    }

    public function create() 
    {
        return view('projects.create');
    }

    public function show($id) 
    {
        $project = Project::findOrFail($id);
        return view('projects.show-single', compact('project'));
    }

    public function edit($id) 
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/projects');

    }

    public function store() 
    {
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }
}
