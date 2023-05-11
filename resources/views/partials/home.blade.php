@extends('layouts.app')

@section('title', 'List of Movies')

@section('content')

    @foreach ($movies as $movie)
        <div class="card container" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Title: {{$movie->title}}</h3>
                <h3 class="card-text">Original Title:{{$movie->original_title}}</h3>
                <h4 class="card-text">Nationality: {{$movie->nationality}}</h4>
                <p class="card-text mt-3 mb-4">Date: {{$movie->date}}</p>
                <a href="#" class="btn btn-primary">Vote: {{$movie->vote}}</a>
            </div>
        </div>
    @endforeach


@endsection