@extends('layout')
@section('title', 'Home')
@section('content')
<div class="title m-b-md">
    Home Page
</div>
<ul>
    @foreach ($tasks as $task)
        <li><?= $task; ?></li>
    @endforeach
</ul>
@endsection