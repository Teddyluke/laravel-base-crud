@extends('layouts.main-layout')
@section('content')

  <h1>
    PAGANTI
  </h1>
  {{-- tramite il foreach tiro fuori la lista dei paganti  --}}
  <ul>
      @foreach ($paganti as $pagante)
        <li>{{ $pagante -> name}} {{ $pagante -> lastname}}</li>
      @endforeach
  </ul>

@endsection
