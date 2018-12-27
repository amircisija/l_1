<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Mail;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $projects = auth()->user()->projects;
        return view('projects.show', compact('projects'));
    }


    public function show(Project $project) 
    {

        $this->authorize('update', $project); 
        return view('projects.show-single', compact('project'));
    }    

    public function create() 
    {
        $this->authorize('update', $project); 
        return view('projects.create');
    }

    public function store() 
    {
        $validated = request()->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required', 'min:10']
        ]);

        $validated['owner_id'] = auth()->id();

        Project::create($validated);

        Mail::to($project->owner->email)->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }    

    public function edit(Project $project) 
    {
        $this->authorize('update', $project); 
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
             
        $validated = request()->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required', 'min:10']
        ]);        
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $this->authorize('update', $project);         
        $project->delete();
        return redirect('/projects');

    }

}
