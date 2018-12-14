@extends('layouts.master')
@section('title', 'Projects')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Project list</h1>
                    </div>
                    <div class="col-md-4">
                        <a href="/projects/create" class="btn btn-light-green float-right">New Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row py-5">
        <div class="card-columns">
        @foreach($projects as $project)

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $project->title }}</strong></h5>
                    <p class="card-text">{{ $project->description }}</p>

                    <br>
                    <h5><strong>Task list:</strong></h5>
                    <ul class="list-group list-group-flush">
                        @foreach($project->tasks as $task)
                            <li class="list-group-item  {{ $task->completed ? 'bg-success' : ''}}">{{ $task->description }}</li>
                        @endforeach
                    </ul>

                    <br>

                    <a href="/projects/{{ $project->id }}" class="card-link">Details</a>
                    <a href="/projects/{{ $project->id }}/edit" class="card-link">Update</a>


                </div>
            </div>

        @endforeach
        </div>
    </div>
</div>
@endsection