@extends('layouts.app')

@section('page-title', $bike['model_name'])

@section('main-content')

  {{-- Bikes cards --}}
  <div class="container-md px-4">
    <main id="id">
      <h1>
        {{ $bike['model_name'] }}
      </h1>
    </main>
  </div>

@endsection
