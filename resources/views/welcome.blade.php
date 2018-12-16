@extends('layouts.master')
@section('title', 'Home Page')
@section('content')


<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <h1>@yield('title')</h1>
            </div>
        </div>
    </div>
    <div class="row">
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
                        </div>
                    </div>

                @endforeach
        </div>
    </div>
</div>
@endsection