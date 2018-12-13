@extends('layouts.master')
@section('title', 'Project')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <a href="/projects" class="btn btn-default">Back to all Projects</a>
                <a href="/projects/{{ $project->id }}/edit" class="btn btn-success">Update</a>
                <h1>Project {{ $project->title }}</h1>
            </div>
        </div>
    </div>
    <div class="row py-5">
      

        <div class="col-md-4">
            <div class="card">
                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $project->title }}</h4>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
            </div>
        </div>

 
    </div>
@endsection