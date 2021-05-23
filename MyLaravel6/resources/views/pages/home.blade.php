@extends('layouts.main-layout')
@section('content')
    <div class="home_container">
      <h1>Hello world</h1>
      <ul>
        @foreach ($movies as $movie)
          <li><a href="{{ route('movie', $movie -> id) }}">
              [{{ $movie -> id }}]
              {{ $movie -> title }}
            </a>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
