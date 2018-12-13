<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    
    public function store(Project $project) 
    {
        $validated = request()->validate([
            'description' => 'required'
        ]);
        $project->addTask($validated);
        return back();
    }

    public function update(Task $task) 
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }

}