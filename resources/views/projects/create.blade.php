@extends('layouts.master')
@section('title', 'Create Project')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <h1>Create new Project</h1>
            </div>
        </div>
    </div>
    <div class="row py-5">


        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="/projects" method="POST">
                {{ csrf_field() }}
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="title" name="title" class="form-control" required value="{{ old('title') }}">
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
                            <textarea type="text" id="description" name="description" rows="2" class="form-control md-textarea" required value="{{ old('description') }}"></textarea>
                            <label for="description">Project description</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Submit</a>
            </div>
            @include('partials.error')
        </div>
        <!--Grid column-->

    </div>
</div>    
@endsection