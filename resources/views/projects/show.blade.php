@extends('layout')
@section('title', 'Projects')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <h1>All Projects</h1>
                <a href="/projects/create" class="btn btn-light-green">New Project</a>
            </div>
        </div>
    </div>
    <div class="row py-5">
        @foreach($projects as $project)

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
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
@endsection