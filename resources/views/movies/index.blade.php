@extends('layouts.app')

@section('page-title', 'laravel_model_controller')

@section('main-content')

@forelse($movies as $movie)

<div>
    <h3> Title: {{$movie['title']}} </h3>

    <img src="{{$movie['url_image']}}" alt="{{$movie['title']}}">
    <p>Original Title:{{$movie['original_title']}}</p>
    <p>Nationality: {{$movie['nationality']}}</p>
    <p>Release Date: {{$movie['date']}}</p>
    <p>Rating: {{$movie['vote']}}</p>
</div>

@empty
<div>

    <h1>sorry no movies available for you!</h1>
    <img src="https://i1.sndcdn.com/artworks-000638208613-e48vpw-t1080x1080.jpg" alt="">
</div>


@endforelse

@endsection