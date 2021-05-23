@extends('layouts.main-layout')
@section('content')
    <div class="home_container">
      <h1>Hello world</h1>
      <ul>
        <li>
          <h1>titolo: {{ $movie -> title }}</h1>
        </li>
        <li>
          id: [{{ $movie -> id }}]
        </li>
        <li>
          originale: {{ $movie -> original_title }}
        </li>
        <li>
          nazione: {{ $movie -> nationality }}
        </li>
        <li>
          pubblicazione: {{ $movie -> date }}
        </li>
        <li>
          voto: {{ $movie -> vote }}
        </li>
     </ul>
    </div>
@endsection
