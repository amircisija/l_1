@extends('layouts.master')
@section('title', 'Project')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">

                <h1>Project {{ $project->title }}</h1>
                <a href="/projects" class="btn btn-default">Back to all Projects</a>
                <a href="/projects/{{ $project->id }}/edit" class="btn btn-success">Update</a>

            </div>
        </div>
    </div>
    <div class="row py-5">
      

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $project->title }}</h4>
                    <p class="card-text">{{ $project->description }}</p>

                    @if ($project->tasks->count())
                    <br>
                    <h6><strong>Tasks:</strong></h6>

                        @foreach($project->tasks as $task)
                        <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked{{ $task->id }}" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                <label class="custom-control-label" for="defaultUnchecked{{ $task->id }}">{{ $task->description }}</label>
                            </div>
                        </form>

                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add new Task:</h4>
                <hr>

                
                <form method="POST" action="/projects/{{ $project->id }}/tasks">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="descriptionx" name="description" rows="2" class="form-control md-textarea" required></textarea>
                                <label for="descriptionx">New Task description</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center text-md-left">
                                <button class="btn btn-primary" type="submit">Submit Task</a>
                            </div>
                        </div>
                    </div>
                    @include('partials.error')
                </form>



                </div>
            </div>
        </div>
    </div>
</div>    
@endsection