@extends('layouts.app')

@section('page-title', 'laravel_model_controller')

@section('main-content')

@forelse($movies as $movie)

<div>
    <h3> Title: {{$movie['title']}} </h3>

    <img src="{{$movie['url_image']}}" alt="{{$movie['title']}}" <p>Original Title:{{$movie['original_title']}}</p>
    <p>Nationality: {{$movie['nationality']}}</p>
    <p>Release Date: {{$movie['date']}}</p>
    <p>Rating: {{$movie['vote']}}</p>
</div>

@empty


@endforelse

@endsection