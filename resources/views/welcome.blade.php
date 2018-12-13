@extends('layouts.master')
@section('title', 'Home')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="title m-b-md">
                <h1>Home page</h1>
            </div>
        </div>
    </div>
    <div class="row">
       

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
                    <h4 class="card-title">asd</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis eligendi excepturi, dolores fugit iure eum quis voluptates laudantium modi libero cumque, nostrum eaque maxime quaerat eveniet veritatis reiciendis nam!</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
    
        <div class="col-md-4">
        
        
        <div id="map"></div>
        
        
        
        </div>

    
    </div>

@endsection