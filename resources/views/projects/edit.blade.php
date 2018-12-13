@extends('layouts.master')
@section('title', 'Edit Project')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <a href="/projects" class="btn btn-default">Back to all Projects</a>
                <h1>Edit Project</h1>
            </div>
        </div>
    </div>
    <div class="row py-5">


        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form method="POST" action="/projects/{{ $project->id }}">
                @method('PATCH')
                @csrf
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="title" name="title" class="form-control" value="{{ $project->title }}">
                            <label for="title" class="">Project title</label>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <textarea type="text" id="description" name="description" rows="2" class="form-control md-textarea">{{ $project->description }}</textarea>
                            <label for="description" placeholder="asdasdasd">Project description</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>



                <div class="status"></div>
            </form>

            <form method="POST" action="/projects/{{ $project->id }}">
                @method('DELETE')
                @csrf
                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>


        </div>
        <!--Grid column-->

    </div>
@endsection